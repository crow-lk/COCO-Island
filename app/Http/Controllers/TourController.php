<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    /**
     * Display a listing of popular tours.
     */
    public function getPopularTours()
    {
        $popularTours = Tour::where('is_popular', true)
                           ->where('is_active', true)
                           ->orderBy('display_order')
                           ->get();
                           
        return $popularTours;
    }
    
    /**
     * Display a listing of all tours in admin panel.
     */
    public function index()
    {
        $tours = Tour::orderBy('display_order')->get();
        return view('admin.tours.index', compact('tours'));
    }
    
    /**
     * Show the form for creating a new tour.
     */
    public function create()
    {
        return view('admin.tours.create');
    }
    
    /**
     * Store a newly created tour in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'route_name' => 'nullable|string',
            'slug' => 'nullable|string|unique:tours,slug',
            'is_popular' => 'boolean',
            'display_order' => 'integer',
            'is_active' => 'boolean',
        ]);
        
        $imagePath = $request->file('image')->store('frontend/assets/img/tour', 'public');
        
        // Generate slug if not provided
        $slug = $request->slug ?? Str::slug($request->title);
        
        Tour::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $slug,
            'image_path' => $imagePath,
            'route_name' => $request->route_name,
            'is_popular' => $request->is_popular ? true : false,
            'display_order' => $request->display_order ?? 0,
            'is_active' => $request->is_active ? true : false,
        ]);
        
        return redirect()->route('admin.tours.index')->with('success', 'Tour created successfully');
    }
    
    /**
     * Show the form for editing the tour.
     */
    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }
    
    /**
     * Update the tour in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'route_name' => 'nullable|string',
            'is_popular' => 'boolean',
            'display_order' => 'integer',
            'is_active' => 'boolean',
        ]);
        
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'route_name' => $request->route_name,
            'is_popular' => $request->is_popular ? true : false,
            'display_order' => $request->display_order ?? 0,
            'is_active' => $request->is_active ? true : false,
        ];
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('frontend/assets/img/tour', 'public');
            $data['image_path'] = $imagePath;
        }
        
        $tour->update($data);
        
        return redirect()->route('admin.tours.index')->with('success', 'Tour updated successfully');
    }
    
    /**
     * Remove the tour from storage.
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        
        return redirect()->route('admin.tours.index')->with('success', 'Tour deleted successfully');
    }
    
    /**
     * Display the specified tour.
     */
    public function show($slug)
    {
        $tour = Tour::where('slug', $slug)
                    ->where('is_active', true)
                    ->firstOrFail();
                    
        return view('tours.show', compact('tour'));
    }
    
    /**
     * Display legacy tour by route name (for backward compatibility)
     */
    public function showByRoute($routeName)
    {
        $tour = Tour::where('route_name', "tours.{$routeName}")
                    ->where('is_active', true)
                    ->first();
                    
        if ($tour) {
            return view('tours.show', compact('tour'));
        }
        
        // Fallback to the old static view if no dynamic tour is found
        if (view()->exists("tours.{$routeName}")) {
            return view("tours.{$routeName}");
        }
        
        abort(404);
    }
}
