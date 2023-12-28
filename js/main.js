
// scroll behaviour 
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    const scrollPosition = window.scrollY;
  
    if (scrollPosition > 550) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
  });
  