//   carrossel
$('.carrossel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
    });

// menu navbar

(function() {
// Bind Click event to the drop down navigation button
document.querySelector('.nav-button').addEventListener('click', function() {
/*  Toggle the CSS closed class which reduces the height of the UL thus 
hiding all LI apart from the first */
this.parentNode.parentNode.classList.toggle('closed')}, false);
  })();
