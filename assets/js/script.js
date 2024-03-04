/////navbar scroll y reveal
document.addEventListener("DOMContentLoaded", function() {
  function handleScroll() {
      var navbar = document.querySelector('.navbar');
      var scrollY = window.scrollY;
      
      if (scrollY > 150) {
          navbar.classList.add('scrolled');
      } else {
          navbar.classList.remove('scrolled');
      }
  }
  handleScroll();
  window.addEventListener("scroll", function() {
      handleScroll();
  });
});

  