(function () {
  "use strict";

  var reduce = window.matchMedia &&
               window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ---------------------------------------------------------------
     1. SCROLL REVEAL  — elements with class .reveal
     --------------------------------------------------------------- */
  function initReveal() {
    var els = document.querySelectorAll(".reveal");
    if (!els.length) return;
    if (reduce || !("IntersectionObserver" in window)) {
      els.forEach(function (el) { el.classList.add("is-visible"); });
      return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("is-visible");
          io.unobserve(e.target);            // animate once
        }
      });
    }, { threshold: 0.15, rootMargin: "0px 0px -8% 0px" });
    els.forEach(function (el) { io.observe(el); });
  }

  /* ---------------------------------------------------------------
     2. COUNT-UP  — <span class="stat-num" data-count="60" data-suffix="%">0</span>
        (use only if NOT using Elementor's Counter widget)
     --------------------------------------------------------------- */
  function animateCount(el) {
    var target  = parseFloat(el.getAttribute("data-count")) || 0;
    var prefix  = el.getAttribute("data-prefix") || "";
    var suffix  = el.getAttribute("data-suffix") || "";
    var decimals= (el.getAttribute("data-decimals") | 0);
    var dur     = 1800, start = null;
    if (reduce) { el.textContent = prefix + target.toFixed(decimals) + suffix; return; }
    function step(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);            // easeOutCubic
      var val = (target * eased).toFixed(decimals);
      el.textContent = prefix + Number(val).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }
  function initCounters() {
    var nums = document.querySelectorAll("[data-count]");
    if (!nums.length || !("IntersectionObserver" in window)) {
      nums.forEach(animateCount); return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { animateCount(e.target); io.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    nums.forEach(function (el) { io.observe(el); });
  }

  /* ---------------------------------------------------------------
     3. MIND-MAP line-draw trigger (Elector) — element with class .ehub
        (the SVG draw CSS lives inside mindmap-widget.html)
     --------------------------------------------------------------- */
  function initMindmap() {
    var hub = document.querySelector(".ehub");
    if (!hub) return;
    if (reduce || !("IntersectionObserver" in window)) {
      hub.classList.add("is-drawn"); return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add("is-drawn"); io.unobserve(e.target); }
      });
    }, { threshold: 0.35 });
    io.observe(hub);
  }

  /* ---------------------------------------------------------------
     4. READING PROGRESS BAR (blog detail) — add <body class="single-post">
        or change the selector below to your article wrapper.
     --------------------------------------------------------------- */
  function initProgress() {
    var article = document.querySelector(".article, .single-post .elementor-widget-theme-post-content");
    if (!article) return;
    var bar = document.createElement("div");
    bar.id = "fx-progress";
    document.body.appendChild(bar);
    function update() {
      var rect = article.getBoundingClientRect();
      var total = article.offsetHeight - window.innerHeight;
      var scrolled = Math.min(Math.max(-rect.top, 0), total);
      bar.style.width = (total > 0 ? (scrolled / total) * 100 : 0) + "%";
    }
    window.addEventListener("scroll", update, { passive: true });
    update();
  }

  /* ---------------------------------------------------------------
     init
     --------------------------------------------------------------- */
  function init() {
    initReveal();
    initCounters();
    initMindmap();
    initProgress();
  }
  if (document.readyState !== "loading") init();
  else document.addEventListener("DOMContentLoaded", init);
})();
