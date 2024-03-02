/////navbar scroll y reveal
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
      var navbar = document.querySelector('.navbar');
      var scrollY = window.scrollY;
      if (scrollY > 150) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  });
  