document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  const lineUp = document.querySelector('.lineUp');

  navLinks.forEach(function(navLink) {
    navLink.addEventListener('click', function(event) {
      event.preventDefault();
      removeActiveClass();
      navLink.classList.add('active');
    });
  });

  function removeActiveClass() {
    navLinks.forEach(function(navLink) {
      navLink.classList.remove('active');
    });
  }
});