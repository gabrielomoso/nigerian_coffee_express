
// Add smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  // Add functionality to "Shop Now" and "Explore Our Collection" buttons
  document.querySelectorAll('.cta-button').forEach(button => {
    button.addEventListener('click', function() {
      if (this.textContent === 'Explore Our Collection' || this.textContent === 'Shop Now') {
        window.location.href = 'nigerian_coffee_express/shop';
      }
    });
  });
  
  // Add a simple animation to the hero section
  const hero = document.querySelector('.hero');
  window.addEventListener('load', () => {
    hero.style.opacity = 0;
    let opacity = 0;
    const fadeIn = setInterval(() => {
      if (opacity >= 1) {
        clearInterval(fadeIn);
      }
      hero.style.opacity = opacity;
      opacity += 0.1;
    }, 100);
  });