// ==========================================================================
// Cube27 Main JavaScript
// ==========================================================================

document.addEventListener('DOMContentLoaded', function () {
  // Initialize all components
  initHeader();
  initMobileNav();
  initHeroCarousel(); // New for landing page
  initAboutCarousel();  // Renamed from initCarousel
  initScrollProgress(); // New for modernization
  initForms();
  initAOS();
});

// --------------------------------------------------------------------------
// Header Scroll Effect
// --------------------------------------------------------------------------
function initHeader() {
  const header = document.querySelector('.header');
  if (!header) return;

  let lastScroll = 0;

  window.addEventListener('scroll', function () {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 50) {
      header.classList.add('header--scrolled');
    } else {
      header.classList.remove('header--scrolled');
    }

    lastScroll = currentScroll;
  });
}

// --------------------------------------------------------------------------
// Scroll Progress Bar
// --------------------------------------------------------------------------
function initScrollProgress() {
  const progressBar = document.querySelector('.scroll-progress');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    progressBar.style.width = scrolled + "%";
  });
}

// --------------------------------------------------------------------------
// Mobile Navigation
// --------------------------------------------------------------------------
function initMobileNav() {
  const toggle = document.querySelector('.nav-toggle');
  const navList = document.querySelector('.nav__list');

  if (!toggle || !navList) return;

  toggle.addEventListener('click', function () {
    navList.classList.toggle('nav__list--open');
    toggle.classList.toggle('nav-toggle--active');

    const isOpen = navList.classList.contains('nav__list--open');
    toggle.setAttribute('aria-expanded', isOpen);

    // Prevent scrolling when menu is open
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // Mobile Dropdowns
  const navItems = navList.querySelectorAll('.nav__item');
  navItems.forEach(item => {
    const link = item.querySelector('.nav__link');
    if (item.querySelector('.dropdown-menu')) {
      link.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          item.classList.toggle('nav__item--active');
        }
      });
    }
  });

  // Close menu when clicking outside
  document.addEventListener('click', function (e) {
    if (!toggle.contains(e.target) && !navList.contains(e.target)) {
      navList.classList.remove('nav__list--open');
      toggle.classList.remove('nav-toggle--active');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }
  });
}

// --------------------------------------------------------------------------
// Hero Carousel (Landing Page)
// --------------------------------------------------------------------------
function initHeroCarousel() {
  const track = document.querySelector('.carousel-track');
  const slides = document.querySelectorAll('.carousel-slide');
  const dots = document.querySelectorAll('.carousel-dot');

  if (!track || slides.length === 0) return;

  let currentIndex = 0;
  let interval;

  function goToSlide(index) {
    currentIndex = index;
    track.style.transform = `translateX(-${currentIndex * 100}%)`;

    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle('carousel-dot--active', i === currentIndex);
    });
  }

  function nextSlide() {
    let next = (currentIndex + 1) % slides.length;
    goToSlide(next);
  }

  // Auto-slide
  function startAutoSlide() {
    interval = setInterval(nextSlide, 5000); // 5 seconds
  }

  function stopAutoSlide() {
    clearInterval(interval);
  }

  // Dot clicks
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      goToSlide(i);
      stopAutoSlide();
      startAutoSlide();
    });
  });

  // Pause on hover
  const carousel = document.querySelector('.hero');
  if (carousel) {
    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);
  }

  startAutoSlide();
}

// --------------------------------------------------------------------------
// Employee Carousel (About Page)
// --------------------------------------------------------------------------
function initAboutCarousel() {
  const carousel = document.querySelector('.carousel');
  if (!carousel) return;

  const track = carousel.querySelector('.carousel__track');
  const slides = carousel.querySelectorAll('.carousel__slide');
  const prevBtn = carousel.querySelector('.carousel__btn--prev');
  const nextBtn = carousel.querySelector('.carousel__btn--next');

  if (!track || slides.length === 0) return;

  let currentIndex = 0;
  const slideWidth = slides[0].offsetWidth + 16; // width + gap
  const maxIndex = Math.max(0, slides.length - Math.floor(track.parentElement.offsetWidth / slideWidth));

  function updateCarousel() {
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

    // Update button states
    if (prevBtn) {
      prevBtn.disabled = currentIndex === 0;
      prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
    }
    if (nextBtn) {
      nextBtn.disabled = currentIndex >= maxIndex;
      nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
    }
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', function () {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', function () {
      if (currentIndex < maxIndex) {
        currentIndex++;
        updateCarousel();
      }
    });
  }

  // Initialize
  updateCarousel();

  // Handle resize
  window.addEventListener('resize', function () {
    currentIndex = 0;
    updateCarousel();
  });
}

// --------------------------------------------------------------------------
// Form Validation
// --------------------------------------------------------------------------
function initForms() {
  const contactForm = document.querySelector('.contact-form');
  if (!contactForm) return;

  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    // Basic validation
    const requiredFields = contactForm.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(function (field) {
      if (!field.value.trim()) {
        isValid = false;
        field.classList.add('form-input--error');
      } else {
        field.classList.remove('form-input--error');
      }
    });

    // Email validation
    const emailField = contactForm.querySelector('input[type="email"]');
    if (emailField && emailField.value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailField.value)) {
        isValid = false;
        emailField.classList.add('form-input--error');
      }
    }

    if (isValid) {
      // Show success message
      const successMessage = document.createElement('div');
      successMessage.className = 'form-success';
      successMessage.innerHTML = `
        <div style="padding: 1rem; background: #D1FAE5; border-radius: 0.5rem; color: #065F46; margin-bottom: 1rem;">
          <strong>Thank you!</strong> We'll be in touch within 24 hours.
        </div>
      `;

      contactForm.insertBefore(successMessage, contactForm.firstChild);
      contactForm.reset();

      // Remove success message after 5 seconds
      setTimeout(function () {
        successMessage.remove();
      }, 5000);
    }
  });

  // Remove error state on input
  contactForm.querySelectorAll('input, select, textarea').forEach(function (field) {
    field.addEventListener('input', function () {
      field.classList.remove('form-input--error');
    });
  });
}

// --------------------------------------------------------------------------
// AOS (Animate on Scroll) - Simple Implementation
// --------------------------------------------------------------------------
function initAOS() {
  const animatedElements = document.querySelectorAll('[data-aos]');
  if (animatedElements.length === 0) return;

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        // Add delay if specified
        const delay = entry.target.getAttribute('data-aos-delay') || 0;

        setTimeout(function () {
          entry.target.classList.add('aos-animate');
        }, delay);

        // Optionally, unobserve after animation
        // observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  animatedElements.forEach(function (el) {
    observer.observe(el);
  });
}

// --------------------------------------------------------------------------
// Smooth Scroll for Anchor Links
// --------------------------------------------------------------------------
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener('click', function (e) {
    const targetId = this.getAttribute('href');
    if (targetId === '#') return;

    const target = document.querySelector(targetId);
    if (target) {
      e.preventDefault();
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
