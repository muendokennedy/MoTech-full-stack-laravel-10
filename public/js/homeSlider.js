// Working of the home slider container

const homeSlides = document.querySelectorAll('.slide');

let slideIndex = 0;

function next(){
  // Remove the display active class from the current slide
  homeSlides[slideIndex].classList.remove('active');
  slideIndex = (slideIndex + 1) % homeSlides.length;
  homeSlides[slideIndex].classList.add('active');
}

function prev(){
  // Remove the display active class from the current slide
  homeSlides[slideIndex].classList.remove('active');
  slideIndex = (slideIndex - 1 + homeSlides.length) % homeSlides.length;
  homeSlides[slideIndex].classList.add('active');
}


// call the next function after 6 seconds
setInterval(next, 5000);
