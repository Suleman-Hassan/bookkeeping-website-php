const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-nav');
if (toggle && nav) {
  toggle.addEventListener('click', () => {
    const open = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(open));
  });
}
document.querySelectorAll('.main-nav a').forEach(link => {
  link.addEventListener('click', () => {
    nav?.classList.remove('is-open');
    toggle?.setAttribute('aria-expanded', 'false');
  });
});

// Add gentle reveal effects to page sections and cards as they enter view.
const motionTargets = document.querySelectorAll(
  '.hero-copy, .hero-visual, .trust-inner, .two-col > *, .section-heading, .service-card, .quote-content, .values-grid > *, .cta-inner > *, .page-hero .container > *, .story-layout > *, .mission-inner > *, .founder-card, .process-grid > *, .pricing-intro > *, .price-card, .faq-layout > *, .contact-layout > *, .form-card, .footer-top > *'
);
if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  document.body.classList.add('js-motion');
  const observer = new IntersectionObserver((entries, currentObserver) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        currentObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });
  motionTargets.forEach((element, index) => {
    element.classList.add('reveal');
    if (element.matches('.hero-visual, .founder-card, .form-card')) element.classList.add('reveal-scale');
    if (element.matches('.two-col > :first-child, .story-layout > :first-child')) element.classList.add('reveal-left');
    if (element.matches('.two-col > :last-child, .story-layout > :last-child')) element.classList.add('reveal-right');
    if (element.matches('.service-card, .price-card, .values-grid > *, .process-grid > *')) element.style.transitionDelay = `${(index % 4) * 85}ms`;
    observer.observe(element);
  });
}

// Compact sticky header once the visitor starts scrolling.
const header = document.querySelector('.site-header');
const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 18);
updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });
