(function ($) {
"use strict";

	// variables 
	var win = $(window);
	var scroll = $('#scroll');


	// pre loader
	win.on('load',function() {
		$("#loading").fadeOut(500)
	});

	// search btn
	$(".search").on("click", function () {
		$(".search-bar-wrapper").addClass("search-bar-open");
	});
	$(".search-close").on("click", function () {
		$(".search-bar-wrapper").removeClass("search-bar-open");
	});

	
	//data - background
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	//mean menu -- mobile menu
	$("#mobile-menu").meanmenu({
		meanMenuContainer: ".mobile-menu",
		meanScreenWidth: "991"
	});

	// Show or hide the sticky footer button
	win.on('scroll', function(event) {
		if($(this).scrollTop() > 600){
			
			scroll.fadeIn(200)
		} else{
			scroll.fadeOut(200)
		}
	});
	
	//Animate the scroll to yop
	scroll.on('click', function(event) {
		event.preventDefault();
		
		$('html, body').animate({
			scrollTop: 0,
		}, 1500);
	});

	// mainSlider
	function mainSlider() {
	var BasicSlider = $('.hero-slider');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: true,
		autoplaySpeed: 8000,
		dots: false,
		fade: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-arrow-right"></i></button>',
		responsive: [{
		breakpoint: 767,
		settings: {
			dots: false,
			arrows: false
		}
		}]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
		var $this = $(this);
		var $animationDelay = $this.data('delay');
		var $animationType = 'animated ' + $this.data('animation');
		$this.css({
			'animation-delay': $animationDelay,
			'-webkit-animation-delay': $animationDelay
		});
		$this.addClass($animationType).one(animationEndEvents, function () {
			$this.removeClass($animationType);
		});
		});
	}
	}
	mainSlider();

	
	// tour-slider
	$('.tour-slider').owlCarousel({
		loop:true,
		margin:30,
		autoplay:true,
		autoplayTimeout:3000,
		smartSpeed:500,
		items:3,
		navText:['<button><i class="fa fa-angle-left"></i>PREV</button>','<button>NEXT<i class="fa fa-angle-right"></i></button>'],
		nav:false,
		dots:false,
		responsive:{
			0:{
				items:1
			},
			767:{
				items:2
			},
			992:{
				items:3
			}
		}
	});

	// testi-slider-active
	$('.testi-slider-active').owlCarousel({
		loop:true,
		margin:30,
		autoplay:true,
		autoplayTimeout:3000,
		smartSpeed:500,
		items:3,
		navText:['<button><i class="fa fa-angle-left"></i>PREV</button>','<button>NEXT<i class="fa fa-angle-right"></i></button>'],
		nav:false,
		dots:false,
		responsive:{
			0:{
				items:1
			},
			767:{
				items:2
			},
			992:{
				items:3
			}
		}
	});

	// sidebar-banner
	$('.sidebar-banner').owlCarousel({
		loop:true,
		margin:30,
		autoplay:true,
		autoplayTimeout:3000,
		smartSpeed:500,
		items:3,
		navText:['<button><i class="fa fa-angle-left"></i></button>','<button><i class="fa fa-angle-right"></i></button>'],
		nav:true,
		dots:false,
		responsive:{
			0:{
				items:1
			},
			767:{
				items:1
			},
			992:{
				items:1
			}
		}
	});

	//image loaded
	$('.grid').imagesLoaded( function() {
		// init Isotope
		var $grid = $('.grid').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: 1
		  }
		});	
	});
	
	// nice select 
	$('select').niceSelect();

	// product countdown
	$(".countdown").countdown();
})(jQuery);

// Why Choose Us – accordion + 3×3 gallery + lightbox
(function(){
  const root = document.getElementById('why-choose-us');
  if (!root) return;

  // Accordion
  const accBtns   = Array.from(root.querySelectorAll('.cu-acc-btn'));
  const accPanels = Array.from(root.querySelectorAll('.cu-acc-panel'));

  // Gallery + modal
  const gallery   = root.querySelector('.cu-gallery');
  const allItems  = Array.from(gallery.querySelectorAll('.cu-gitem'));
  const modal     = gallery.querySelector('.cu-modal');
  const modalImg  = gallery.querySelector('.cu-modal__img');
  const btnPrev   = gallery.querySelector('.cu-modal__prev');
  const btnNext   = gallery.querySelector('.cu-modal__next');
  const btnClose  = gallery.querySelector('.cu-modal__close');

  let currentSet = []; // 9 visible tiles (ordered)
  let index = 0;

  // Accordion helpers
  function closeAll(){
    accBtns.forEach(btn => {
      btn.classList.remove('is-open');
      btn.setAttribute('aria-expanded','false');
    });
    accPanels.forEach(p => {
      p.style.height = 0;
    });
  }
  function openBtn(btn){
    const panel = document.getElementById(btn.getAttribute('aria-controls'));
    btn.classList.add('is-open');
    btn.setAttribute('aria-expanded','true');
    // set height for smooth transition
    panel.style.height = panel.scrollHeight + 'px';
  }

  // Gallery: choose 9, prioritizing selected group
  function setGroup(group){
    // order: selected group first, then others (stable)
    const sorted = allItems.slice().sort((a,b)=>{
      const aw = (a.dataset.group === group) ? 0 : 1;
      const bw = (b.dataset.group === group) ? 0 : 1;
      return aw - bw;
    });

    // ensure 9 tiles; pad by cycling if fewer available
    currentSet = sorted.slice(0, 9);
    if (currentSet.length < 9 && sorted.length){
      let i = 0;
      while (currentSet.length < 9){ currentSet.push(sorted[i++ % sorted.length]); }
    }

    const toShow = new Set(currentSet);
    allItems.forEach(it => it.hidden = !toShow.has(it));

    // wire thumbnails
    currentSet.forEach((it, i) => {
      const img = it.querySelector('.cu-gimage');
      img.onclick = () => openAt(i);
    });

    index = 0;
  }

  // Modal/lightbox
  function openAt(i){
    index = i;
    updateModal();
    modal.setAttribute('aria-hidden','false');
    document.body.classList.add('noscroll');
  }
  function updateModal(){
    const img = currentSet[index].querySelector('.cu-gimage');
    modalImg.src = img.getAttribute('src');
    modalImg.alt = img.getAttribute('alt') || '';
  }
  function move(delta){
    index = (index + delta + currentSet.length) % currentSet.length;
    updateModal();
  }
  function closeModal(){
    modal.setAttribute('aria-hidden','true');
    document.body.classList.remove('noscroll');
  }

  // Events
  accBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const isOpen = btn.classList.contains('is-open');
      closeAll();
      if (!isOpen) openBtn(btn);

      // Filter right gallery to this group
      setGroup(btn.dataset.group);
    });
  });

  // Recompute panel heights on resize
  window.addEventListener('resize', () => {
    accBtns.forEach(btn => {
      if (btn.classList.contains('is-open')) {
        const panel = document.getElementById(btn.getAttribute('aria-controls'));
        panel.style.height = panel.scrollHeight + 'px';
      }
    });
  });

  // Modal controls
  btnPrev.addEventListener('click', ()=> move(-1));
  btnNext.addEventListener('click', ()=> move(1));
  btnClose.addEventListener('click', closeModal);
  modal.addEventListener('click', (e)=> { if (e.target === modal) closeModal(); });
  document.addEventListener('keydown', (e)=>{
    if (modal.getAttribute('aria-hidden') === 'true') return;
    if (e.key === 'Escape') closeModal();
    if (e.key === 'ArrowLeft') move(-1);
    if (e.key === 'ArrowRight') move(1);
  });

  // INIT: open first accordion + set group 0
  openBtn(accBtns[0]);
  setGroup(accBtns[0].dataset.group);
})();

// mark that JS is enabled (for progressive enhancement)
document.documentElement.classList.add('js');

// reveal on scroll using IntersectionObserver
(function(){
  const els = document.querySelectorAll('#about-intro .reveal');
  if (!('IntersectionObserver' in window) || !els.length){
    // fallback: show immediately
    els.forEach(el => el.classList.add('in'));
    return;
  }

  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting){
        entry.target.classList.add('in');
        obs.unobserve(entry.target); // animate once
      }
    });
  }, { rootMargin: '0px 0px -10% 0px', threshold: 0.2 });

  els.forEach(el => io.observe(el));
})();

