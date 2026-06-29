// ===== Calibras landing — interactions =====
document.addEventListener('DOMContentLoaded', function () {

  /* Mobile nav toggle */
  var toggle = document.getElementById('navToggle');
  var nav = document.getElementById('mainNav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('open');
    });
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('open');
      });
    });
  }

  /* Header shadow on scroll */
  var header = document.getElementById('siteHeader');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 8) {
      header.style.boxShadow = '0 6px 20px rgba(20,23,28,.06)';
    } else {
      header.style.boxShadow = 'none';
    }
  });

  /* Reveal-on-scroll animation */
  var revealEls = document.querySelectorAll(
    '.stat-card, .project-card, .voice-card, .news-card, .product-grid, .platform-grid'
  );
  revealEls.forEach(function (el) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(18px)';
    el.style.transition = 'opacity .6s ease, transform .6s ease';
  });

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) {
      el.style.opacity = '1';
      el.style.transform = 'none';
    });
  }

  /* Smooth active nav highlight */
  var navLinks = document.querySelectorAll('.main-nav a');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      navLinks.forEach(function (l) { l.classList.remove('active'); });
      link.classList.add('active');
    });
  });

});
