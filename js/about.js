
// Add smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  // Add a simple fade-in animation for sections
  const sections = document.querySelectorAll('section');
  const options = {
    threshold: 0.5
  };
  
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, options);
  
  sections.forEach(section => {
    section.style.opacity = 0;
    section.style.transform = 'translateY(20px)';
    section.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(section);
  });
  
  // Add hover effect for brand cards
  const brands = document.querySelectorAll('.brand');
  brands.forEach(brand => {
    brand.addEventListener('mouseenter', () => {
      brand.style.backgroundColor = '#f0e0d0';
    });
    brand.addEventListener('mouseleave', () => {
      brand.style.backgroundColor = 'white';
    });
  });
  