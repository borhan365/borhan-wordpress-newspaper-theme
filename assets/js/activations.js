// FOR CLICKING MULTIPE TABS
window.addEventListener('load',function(){
	var tabs = document.querySelectorAll('ul.nav-tabs > li');
	for(i=0; i<tabs.length; i++){
			tabs[i].addEventListener('click',switchTab);
	}
	
	function switchTab(event){
		event.preventDefault();
		
		document.querySelector('ul.nav-tabs li.active').classList.remove('active');
		document.querySelector('.tab-pane.active').classList.remove('active');
		
		var clickedTab = event.currentTarget;
		var anchor = event.target;
		var activePaneID = anchor.getAttribute("href");
		
		clickedTab.classList.add('active');
		document.querySelector(activePaneID).classList.add('active');
	}
});

// FOR CLICKING DOUBLE TABS
window.addEventListener('load',function(){
	var tabs = document.querySelectorAll('ul.double-tab > li');
	for(i=0; i<tabs.length; i++){
			tabs[i].addEventListener('click',switchTab);
	}
	
	function switchTab(event){
		event.preventDefault();
		
		document.querySelector('ul.double-tab li.active').classList.remove('active');
		document.querySelector('.double-tab-pane.active').classList.remove('active');
		
		var clickedTab = event.currentTarget;
		var anchor = event.target;
		var activePaneID = anchor.getAttribute("href");
		
		clickedTab.classList.add('active');
		document.querySelector(activePaneID).classList.add('active');
	}
});

// FOR FRONT PAGE CAROUSEL
var galleryBlog = new Swiper('.gallery-blog', {
	spaceBetween: 10,
	//slidesPerView: 4,
	
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	
	breakpoints: {
		500: {
		  mousewheel: true,
		  keyboard: true,
		  slidesPerView: 1,
		  spaceBetween: 24,
		  allowSlidePrev: true,
		  allowSlideNext: true
		},
		800: {
		  mousewheel: true,
		  keyboard: true,
		  slidesPerView: 3,
		  spaceBetween: 24,
		  allowSlidePrev: true,
		  allowSlideNext: true
		},
		1200: {
		  mousewheel: true,
		  keyboard: true,
		  slidesPerView: 4,
		  spaceBetween: 24,
		  allowSlidePrev: true,
		  allowSlideNext: true
		}
	}
});

// FOR FRONT PAGE BOTTOM CAROUSEL
var galleryThumbs = new Swiper('.gallery-thumbs', {
	spaceBetween: 10,
	slidesPerView: 1,
	freeMode: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
});

var galleryTop = new Swiper('.gallery-top', {
	spaceBetween: 10,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	thumbs: {
		swiper: galleryThumbs
	},
	
	breakpoints: {}
});