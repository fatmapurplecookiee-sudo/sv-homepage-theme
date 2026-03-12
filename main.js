document.addEventListener('DOMContentLoaded', function() {

  // mobile nav toggle
  var hamburger = document.getElementById('sv-hamburger');
  var mobileNav = document.getElementById('sv-mobile-nav');
  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', function() {
      mobileNav.classList.toggle('open');
    });
    mobileNav.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', function() {
        mobileNav.classList.remove('open');
      });
    });
  }

  // scroll reveal
  var reveals = document.querySelectorAll('.sv-reveal');
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('sv-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function(el) { observer.observe(el); });
  } else {
    // fallback for old browsers
    reveals.forEach(function(el) { el.classList.add('sv-visible'); });
  }

  // email validation - cta form
  var ctaBtn = document.getElementById('sv-cta-submit');
  var ctaInput = document.getElementById('sv-cta-email');
  var ctaMsg = document.getElementById('sv-cta-msg');
  if (ctaBtn && ctaInput) {
    ctaBtn.addEventListener('click', function() {
      var email = ctaInput.value.trim();
      var valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      if (!valid) {
        ctaMsg.textContent = 'Please enter a valid email address.';
        ctaMsg.style.color = 'rgba(255,255,255,0.9)';
      } else {
        ctaMsg.textContent = '🎉 You\'re in! We\'ll be in touch soon.';
        ctaInput.value = '';
      }
    });
  }

  // smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var id = this.getAttribute('href').slice(1);
      var target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        var offset = 80;
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

});
