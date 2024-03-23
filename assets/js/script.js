/////navbar scroll y reveal
document.addEventListener("DOMContentLoaded", function() {
  function handleScroll() {
      var navbar = document.querySelector('.navbar');
      var scrollY = window.scrollY;
      
      if (scrollY > 100) {
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


////navbar nav button 
function showNav(){
    let toggler=document.getElementById('navbar-toggler')
    let nav=document.getElementById('navbarNavDropdown')
    toggler.classList.toggle('show');
    nav.classList.toggle('show');
}

/////lord icon hover effect, not sure it works
document.addEventListener("DOMContentLoaded", function() {
    var listItem = document.getElementById('listItem');
    var lordIcon = document.getElementById('lordIcon');

    // Trigger mouseover event
    var event = new Event('mouseover');
    lordIcon.dispatchEvent(event);
});
  



    //$ quick access buttons(whatsapp and call) animation
    window.addEventListener("scroll", function() {
        const navbar = document.querySelector(".wts-icn");
        const scrolled = window.scrollY;
      
        // Add or remove a CSS class to control the appearance of the navbar when scrolling
        if (scrolled > 10) {
            navbar.classList.add("wts-actv");
        } else {
            navbar.classList.remove("wts-actv");
        }
      });
      
      window.addEventListener("scroll", function() {
        const navbar = document.querySelector(".cal-icn");
        const scrolled = window.scrollY;
      
        // Add or remove a CSS class to control the appearance of the navbar when scrolling
        if (scrolled >10) {
            navbar.classList.add("cal-actv");
        } else {
            navbar.classList.remove("cal-actv");
        }
      });
        