const intro = document.getElementById("intro");
const introText = document.getElementById("introText");

const texts = [
  "Hi…",
  "Welcome to my tech world",
  "My name is Kuldeep Singh",
  "I’m a Flutter Developer"
];

// 👉 SHOW INTRO ONLY IF HOME PAGE EXISTS
const isHome = document.querySelector(".home-page");

if (!isHome) {
  intro?.remove();
} else {
  if (sessionStorage.getItem("introSeen")) {
    intro?.remove();
  } else {
    sessionStorage.setItem("introSeen", "true");

    let i = 0;

    const interval = setInterval(() => {
      introText.style.opacity = 0;

      setTimeout(() => {
        i++;
        if (texts[i]) {
          introText.innerText = texts[i];
          introText.style.opacity = 1;
        }
      }, 400);
    }, 1000);

    setTimeout(() => {
      clearInterval(interval);
      intro.style.opacity = 0;
      setTimeout(() => intro.remove(), 800);
    }, 4200);
  }
}

/* =====================
   DARK MODE (GLOBAL)
===================== */
const root = document.documentElement;
const toggle = document.getElementById("themeToggle");

// apply saved theme BEFORE paint
const savedTheme = localStorage.getItem("theme");
if (savedTheme) {
  root.dataset.theme = savedTheme;
}

toggle?.addEventListener("click", () => {
  const theme = root.dataset.theme === "dark" ? "light" : "dark";
  root.dataset.theme = theme;
  localStorage.setItem("theme", theme);

  // persist for server-rendered pages
  fetch('/set-theme/' + theme);
});

/* =====================
   SCROLL ANIMATIONS
===================== */
const animatedEls = document.querySelectorAll('[data-animate]');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const delay = entry.target.dataset.delay || 0;
      setTimeout(() => {
        entry.target.classList.add('show');
      }, delay);
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });

animatedEls.forEach(el => observer.observe(el));
/* =====================
   HERO PARALLAX (MOUSE)
===================== */
/* =====================
   HERO PARALLAX (FIXED)
===================== */
const heroImg = document.getElementById("heroImage");

if (heroImg) {
  document.addEventListener("mousemove", e => {
    const x = (window.innerWidth / 2 - e.clientX) / 30;
    const y = (window.innerHeight / 2 - e.clientY) / 30;

    heroImg.style.setProperty("--rotateY", `${x}deg`);
    heroImg.style.setProperty("--rotateX", `${y}deg`);
  });

  window.addEventListener("scroll", () => {
    const scrollY = Math.min(window.scrollY * 0.03, 20);
    heroImg.style.setProperty("--scrollY", `${scrollY}px`);
  });
}


/* =====================
   TYPING EFFECT (HOME)
===================== */
const typingEl = document.getElementById("typingText");

if (typingEl) {
  const words = [
    "Flutter Developer",
    "Mobile App Developer",
    "Web App Developer"
  ];

  let wordIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  function typeEffect() {
    const current = words[wordIndex];
    typingEl.textContent = current.slice(0, charIndex);

    if (!isDeleting && charIndex < current.length) {
      charIndex++;
    } else if (isDeleting && charIndex > 0) {
      charIndex--;
    } else {
      isDeleting = !isDeleting;
      if (!isDeleting) {
        wordIndex = (wordIndex + 1) % words.length;
      }
    }

    setTimeout(typeEffect, isDeleting ? 50 : 100);
  }

  typeEffect();
}



/* =====================
   TECH ORBIT MOUSE REACT
===================== */
const orbit = document.querySelector(".tech-orbit");

if (orbit) {
  document.addEventListener("mousemove", e => {
    const x = (window.innerWidth / 2 - e.clientX) / 60;
    const y = (window.innerHeight / 2 - e.clientY) / 60;

    orbit.style.transform =
      `rotate(${x}deg) translate(${x}px, ${y}px)`;
  });
}
const counters = document.querySelectorAll('.count');

const runCounter = counter => {
  const target = +counter.dataset.count;
  let current = 0;
  const step = target / 60;

  const update = () => {
    current += step;
    if (current < target) {
      counter.innerText = Math.ceil(current);
      requestAnimationFrame(update);
    } else {
      counter.innerText = target + '+';
    }
  };

  update();
};

const counterObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      runCounter(entry.target);
      counterObserver.unobserve(entry.target);
    }
  });
}, { threshold: .6 });

counters.forEach(c => counterObserver.observe(c));


/* =====================
   SCROLL REVEAL
===================== */
const animated = document.querySelectorAll('[data-animate]');

const observerr = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const delay = entry.target.dataset.delay || 0;
      setTimeout(() => {
        entry.target.classList.add('active');
      }, delay);
      observerr.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });

animated.forEach(el => observerr.observe(el));
