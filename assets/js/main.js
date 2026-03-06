/* Oregon Accident Chiro — main.js */
(function () {
  'use strict';

  // ── Mobile Nav ───────────────────────────────────────────────
  window.openMobileNav  = function () {
    document.getElementById('mobileNav')?.classList.add('open');
    document.body.style.overflow = 'hidden';
  };
  window.closeMobileNav = function () {
    document.getElementById('mobileNav')?.classList.remove('open');
    document.body.style.overflow = '';
  };

  // ── FAQ Accordion ─────────────────────────────────────────────
  window.toggleFaq = function (el) {
    const item   = el.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  };

  // ── Lead Form (AJAX to WordPress) ───────────────────────────
  window.submitForm = function (formId) {
    const get = id => document.getElementById(formId + '_' + id)?.value?.trim() || '';
    const fname = get('fname'), phone = get('phone'), city = get('city'), date = get('date');

    if (!fname || !phone || !city || !date) {
      alert('Please fill in all required fields.');
      return;
    }

    const btn = document.querySelector(`#${formId}Wrap .form-submit`);
    if (btn) { btn.disabled = true; btn.textContent = 'Sending…'; }

    const body = new FormData();
    body.append('action', 'oac_lead');
    body.append('nonce',  (window.OAC || {}).nonce || '');
    body.append('fname', fname);
    body.append('lname', get('lname'));
    body.append('phone', phone);
    body.append('email', get('email'));
    body.append('city',  city);
    body.append('date',  date);
    body.append('msg',   get('msg'));

    const ajaxUrl = (window.OAC || {}).ajaxurl || '/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, { method: 'POST', body })
      .then(r => r.json())
      .then(() => {
        const wrap    = document.getElementById(formId + 'Wrap');
        const success = document.getElementById(formId + 'Success');
        if (wrap)    wrap.querySelector('.form-submit').style.display = 'none';
        if (success) { success.style.display = 'block'; success.scrollIntoView({ behavior: 'smooth', block: 'center' }); }
      })
      .catch(() => {
        if (btn) { btn.disabled = false; btn.textContent = 'Request Free Consultation →'; }
        alert('Something went wrong. Please call us directly at ' + ((window.OAC || {}).phone || '(503) 555-0100'));
      });
  };

  // ── Scroll Animations ─────────────────────────────────────────
  function initAnimations() {
    const obs = new IntersectionObserver(entries => {
      entries.forEach((e, i) => {
        if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), i * 80);
      });
    }, { threshold: 0.08 });
    document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
  }

  // ── Replace phone numbers dynamically (for CallRail swap) ────
  function injectPhone() {
    if (!window.OAC) return;
    const display = window.OAC.phone;
    const raw     = window.OAC.phone_raw;
    if (!display || !raw) return;
    document.querySelectorAll('[data-phone]').forEach(el => { el.textContent = display; });
    document.querySelectorAll('a[href^="tel:"]').forEach(a  => { a.href = 'tel:' + raw; });
  }

  document.addEventListener('DOMContentLoaded', () => {
    initAnimations();
    injectPhone();
  });
})();
