$(document).ready(function() {
	// $('.owl-carousel').owlCarousel({
 //    thumbs: true,
 //    thumbsPrerendered: true
 //  });
	var owl = $('.owl-carousel');
  owl.owlCarousel({
    loop: true,
    items: 1,
    thumbs: true,
    thumbImage: true,
    thumbContainerClass: 'owl-thumbs',
    thumbItemClass: 'owl-thumb-item'
  });
});