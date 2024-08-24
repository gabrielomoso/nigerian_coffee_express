// Form submission handler
document.getElementById('contact-form').addEventListener('submit', function(e) {
    // Remove the preventDefault() call to allow the form to submit to the server
    // e.preventDefault();
    // The alert is no longer needed as the server will handle the response
    // alert('Thank you for your message! We will get back to you soon.');
    // this.reset();
  });
  
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