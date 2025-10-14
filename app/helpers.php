<?php

if (!function_exists('localized_route')) {
    /**
     * Generate a localized route URL
     *
     * @param string $name
     * @param array $parameters
     * @param string|null $locale
     * @return string
     */
    function localized_route($name, $parameters = [], $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        
        // Add locale to the beginning of parameters array
        $parameters = array_merge(['locale' => $locale], $parameters);
        
        return route($name, $parameters);
    }
}

if (!function_exists('current_route_localized')) {
    /**
     * Get the current route in a different locale
     *
     * @param string $locale
     * @return string
     */
    function current_route_localized($locale)
    {
        $currentRoute = request()->route();
        if (!$currentRoute) {
            return route('home', ['locale' => $locale]);
        }
        
        $routeName = $currentRoute->getName();
        $parameters = $currentRoute->parameters();
        
        // Replace the locale parameter
        $parameters['locale'] = $locale;
        
        try {
            return route($routeName, $parameters);
        } catch (\Exception $e) {
            // If route generation fails, default to home
            return route('home', ['locale' => $locale]);
        }
    }
}

if (!function_exists('destination_content')) {
    /**
     * Load structured destination content from docs/content directory with locale fallback.
     *
     * @param string $slug
     * @param string|null $locale
     * @return array{title: array{full?: string, main?: string, highlight?: string}, intro?: string, sections?: array<int, array<string, mixed>>}
     */
    function destination_content(string $slug, ?string $locale = null): array
    {
        $locale = $locale ?? app()->getLocale();
        $basePath = base_path('docs/content');

        $candidatePaths = [
            $basePath . DIRECTORY_SEPARATOR . $locale . DIRECTORY_SEPARATOR . $slug . '.txt',
            $basePath . DIRECTORY_SEPARATOR . $slug . '.txt',
        ];

        $filePath = null;
        foreach ($candidatePaths as $path) {
            if (is_file($path)) {
                $filePath = $path;
                break;
            }
        }

        if (!$filePath) {
            return [];
        }

        $rawContent = file_get_contents($filePath);
        if ($rawContent === false) {
            return [];
        }

        $normalized = str_replace(["\r\n", "\r"], "\n", trim($rawContent));
        if ($normalized === '') {
            return [];
        }

        // Split into blocks separated by blank lines
        $rawBlocks = preg_split("/\n\s*\n/", $normalized);
        $blocks = array_values(array_filter(array_map('trim', $rawBlocks), static function ($block) {
            return $block !== '';
        }));

        if (empty($blocks)) {
            return [];
        }

        $titleBlock = array_shift($blocks);
        $introBlock = $blocks ? array_shift($blocks) : '';

        $titleParts = preg_split('/\s+—\s+|\s+-\s+/', $titleBlock);
        $title = [
            'full' => $titleBlock,
            'main' => $titleParts[0] ?? $titleBlock,
            'highlight' => $titleParts[1] ?? null,
        ];

        $intro = trim($introBlock);

        $sections = [];
        $currentIndex = null;

        foreach ($blocks as $block) {
            $lines = preg_split("/\n/", $block);
            $text = trim($block);
            if ($text === '') {
                continue;
            }

            $isSingleLine = count($lines) === 1;
            $hasColon = str_contains($text, ':');
            $hasSentencePunctuation = (bool) preg_match('/[.?!;]/u', $text);

            $shouldStartSection = $isSingleLine && !$hasColon && !$hasSentencePunctuation;

            if ($shouldStartSection) {
                $sections[] = [
                    'key' => \Illuminate\Support\Str::slug($text),
                    'heading' => $text,
                    'items' => [],
                ];
                $currentIndex = array_key_last($sections);
                continue;
            }

            if ($currentIndex === null || !isset($sections[$currentIndex])) {
                continue;
            }

            $sectionKey = $sections[$currentIndex]['key'] ?? '';

            switch ($sectionKey) {
                case 'frequently-asked-questions':
                    $question = trim($lines[0]);
                    $answerLines = array_slice($lines, 1);
                    $answer = trim(implode(' ', $answerLines));

                    if ($answer === '' && str_contains($question, '?')) {
                        [$questionPart, $answerPart] = explode('?', $question, 2);
                        $question = trim($questionPart) . '?';
                        $answer = trim($answerPart);
                    }

                    $sections[$currentIndex]['items'][] = [
                        'question' => $question,
                        'answer' => $answer,
                    ];
                    break;

                case 'sample-one-day-plan-flexible':
                    if (preg_match('/^\d{1,2}[:.]\d{2}/', $text)) {
                        $parts = preg_split('/\s+/', $text, 2);
                        $time = $parts[0] ?? '';
                        $details = $parts[1] ?? '';
                        $sections[$currentIndex]['items'][] = [
                            'type' => 'schedule',
                            'time' => $time,
                            'details' => trim($details),
                        ];
                    } else {
                        $sections[$currentIndex]['items'][] = [
                            'type' => 'note',
                            'details' => $text,
                        ];
                    }
                    break;

                case 'travel-responsibly':
                    $sections[$currentIndex]['items'][] = [
                        'details' => $text,
                    ];
                    break;

                case 'make-it-seamless-with-coco-island-holidays':
                    $sections[$currentIndex]['items'][] = [
                        'details' => $text,
                    ];
                    break;

                default:
                    if ($hasColon) {
                        [$itemTitle, $description] = explode(':', $text, 2);
                        $sections[$currentIndex]['items'][] = [
                            'title' => trim($itemTitle),
                            'description' => trim($description),
                        ];
                    } else {
                        $sections[$currentIndex]['items'][] = [
                            'description' => $text,
                        ];
                    }
                    break;
            }
        }

        return [
            'title' => $title,
            'intro' => $intro,
            'sections' => $sections,
        ];
    }
}
