// Shared components for Oregon Accident Chiro site
// Include this script on every page: <script src="../components.js"></script>

function getBasePath() {
  const depth = window.location.pathname.split('/').filter(Boolean).length;
  // depth 0 = root, 1 = cities/services/blog folder, 2 = actual page inside folder
  if (depth === 0) return './';
  if (depth === 1) return './';
  return '../';
}

function renderTopbar() {
  return `<div class="topbar">
    🚗 <strong>Auto Accident? Treatment is 100% FREE</strong> — Billed directly to your insurance. No out-of-pocket cost. <a href="#contact">Get Help Now →</a>
  </div>`;
}

function renderNav(base) {
  return `<nav>
    <div class="nav-inner">
      <a href="${base}index" class="nav-logo">Oregon Accident<span>Chiro</span></a>
      <ul class="nav-menu">
        <li>
          <a href="#">Services <span class="arrow">▾</span></a>
          <div class="dropdown">
            <a href="${base}services/whiplash"><span class="icon">🔄</span> Whiplash Treatment</a>
            <a href="${base}services/back-pain"><span class="icon">🦴</span> Back & Spine Injuries</a>
            <a href="${base}services/soft-tissue"><span class="icon">💪</span> Soft Tissue Therapy</a>
            <a href="${base}services/concussion"><span class="icon">🧠</span> Post-Concussion Care</a>
            <a href="${base}services/rehabilitation"><span class="icon">🏃</span> Rehabilitation</a>
            <a href="${base}services/documentation"><span class="icon">📋</span> Medical Documentation</a>
          </div>
        </li>
        <li>
          <a href="#">Areas Served <span class="arrow">▾</span></a>
          <div class="dropdown">
            <a href="${base}cities/portland"><span class="icon">📍</span> Portland, OR</a>
            <a href="${base}cities/hillsboro"><span class="icon">📍</span> Hillsboro, OR</a>
            <a href="${base}cities/beaverton"><span class="icon">📍</span> Beaverton, OR</a>
            <a href="${base}cities/sherwood"><span class="icon">📍</span> Sherwood, OR</a>
            <a href="${base}cities/salem"><span class="icon">📍</span> Salem, OR</a>
            <a href="${base}cities/lake-oswego"><span class="icon">📍</span> Lake Oswego, OR</a>
          </div>
        </li>
        <li><a href="${base}blog/index">Blog</a></li>
        <li><a href="${base}#faq">FAQ</a></li>
      </ul>
      <a href="tel:+15035550100" class="nav-phone">📞 (503) 555-0100</a>
      <a href="${base}#contact" class="btn btn-red btn-sm nav-cta">Free Consultation</a>
      <div class="hamburger" onclick="openMobileNav()">
        <span></span><span></span><span></span>
      </div>
    </div>
  </nav>
  <div class="mobile-nav" id="mobileNav">
    <button class="mobile-close" onclick="closeMobileNav()">✕</button>
    <a href="${base}index">🏠 Home</a>
    <div class="mobile-group-label">Services</div>
    <a href="${base}services/whiplash">🔄 Whiplash Treatment</a>
    <a href="${base}services/back-pain">🦴 Back & Spine Injuries</a>
    <a href="${base}services/soft-tissue">💪 Soft Tissue Therapy</a>
    <a href="${base}services/concussion">🧠 Post-Concussion Care</a>
    <a href="${base}services/rehabilitation">🏃 Rehabilitation</a>
    <a href="${base}services/documentation">📋 Medical Documentation</a>
    <div class="mobile-group-label">Areas Served</div>
    <a href="${base}cities/portland">📍 Portland</a>
    <a href="${base}cities/hillsboro">📍 Hillsboro</a>
    <a href="${base}cities/beaverton">📍 Beaverton</a>
    <a href="${base}cities/sherwood">📍 Sherwood</a>
    <a href="${base}cities/salem">📍 Salem</a>
    <a href="${base}cities/lake-oswego">📍 Lake Oswego</a>
    <div class="mobile-group-label">More</div>
    <a href="${base}blog/index">📝 Blog</a>
    <a href="${base}#faq">❓ FAQ</a>
    <a href="${base}#contact" style="background:var(--accent);color:white;text-align:center;margin-top:12px;border-radius:8px;">Free Consultation →</a>
  </div>`;
}

function renderFreeBanner() {
  return `<div class="free-banner">
    <div class="free-banner-inner">
      <div class="free-banner-text">
        <h3>🚗 Accident Treatment is 100% FREE for You</h3>
        <p>Oregon PIP law covers chiropractic care. We bill your auto insurance directly — you pay $0 out of pocket.</p>
      </div>
      <div class="free-banner-logos">
        <span class="insurer-badge">State Farm</span>
        <span class="insurer-badge">Allstate</span>
        <span class="insurer-badge">Progressive</span>
        <span class="insurer-badge">GEICO</span>
        <span class="insurer-badge">Farmers</span>
        <span class="insurer-badge">USAA</span>
      </div>
    </div>
  </div>`;
}

function renderFooter(base) {
  return `<footer>
    <div class="container">
      <div class="footer-grid">
        <div>
          <div class="footer-logo">Oregon Accident<span>Chiro</span></div>
          <p class="footer-desc">Portland's trusted auto accident chiropractic specialists. Treatment covered by your auto insurance — no out-of-pocket cost. Serving all of Oregon.</p>
          <div class="footer-badges">
            <span class="footer-badge">✅ Insurance Accepted</span>
            <span class="footer-badge">⭐ 4.9 Rating</span>
            <span class="footer-badge">💰 $0 Cost</span>
          </div>
        </div>
        <div>
          <h4>Services</h4>
          <ul class="footer-links">
            <li><a href="${base}services/whiplash">Whiplash Treatment</a></li>
            <li><a href="${base}services/back-pain">Back & Spine Injuries</a></li>
            <li><a href="${base}services/soft-tissue">Soft Tissue Therapy</a></li>
            <li><a href="${base}services/concussion">Post-Concussion Care</a></li>
            <li><a href="${base}services/rehabilitation">Rehabilitation</a></li>
            <li><a href="${base}services/documentation">Medical Documentation</a></li>
          </ul>
        </div>
        <div>
          <h4>Areas We Serve</h4>
          <ul class="footer-links">
            <li><a href="${base}cities/portland">Portland, OR</a></li>
            <li><a href="${base}cities/hillsboro">Hillsboro, OR</a></li>
            <li><a href="${base}cities/beaverton">Beaverton, OR</a></li>
            <li><a href="${base}cities/sherwood">Sherwood, OR</a></li>
            <li><a href="${base}cities/salem">Salem, OR</a></li>
            <li><a href="${base}cities/lake-oswego">Lake Oswego, OR</a></li>
          </ul>
        </div>
        <div>
          <h4>Contact</h4>
          <ul class="footer-links">
            <li><a href="tel:+15035550100">📞 (503) 555-0100</a></li>
            <li><a href="mailto:info@oregonaccidentchiro.com">✉ info@oregonaccidentchiro.com</a></li>
            <li><a href="${base}#contact">Free Consultation</a></li>
            <li><a href="${base}blog/index">Blog</a></li>
            <li><a href="${base}#faq">FAQ</a></li>
          </ul>
          <div style="margin-top:20px;background:rgba(255,255,255,0.07);border-radius:10px;padding:14px 16px;">
            <div style="font-size:0.78rem;color:rgba(255,255,255,0.5);margin-bottom:4px;">Hours</div>
            <div style="font-size:0.85rem;color:white;">Mon–Fri: 8am – 6pm</div>
            <div style="font-size:0.85rem;color:white;">Saturday: 9am – 2pm</div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2025 Oregon Accident Chiropractic. All rights reserved.</span>
        <span>Portland, Oregon</span>
      </div>
      <div class="footer-disclaimer">
        The information on this website is for general informational purposes only and does not constitute medical advice. Results may vary. Insurance coverage depends on your specific policy. Oregon Accident Chiropractic is a lead generation website connecting patients with licensed chiropractic providers in Oregon.
      </div>
    </div>
  </footer>
  <div class="sticky-bar"><a href="tel:+15035550100">📞 Call Free — (503) 555-0100 — No Cost to You</a></div>`;
}

function renderForm(formId) {
  return `<div class="form-wrap" id="${formId}Wrap">
    <div class="form-title">Get Free Consultation</div>
    <p class="form-sub">We'll call you within 1 hour during business hours. 100% confidential.</p>
    <div class="form-row">
      <div class="form-group"><label>First Name *</label><input type="text" id="${formId}_fname" placeholder="John" /></div>
      <div class="form-group"><label>Last Name *</label><input type="text" id="${formId}_lname" placeholder="Smith" /></div>
    </div>
    <div class="form-row">
      <div class="form-group"><label>Phone *</label><input type="tel" id="${formId}_phone" placeholder="(503) 000-0000" /></div>
      <div class="form-group"><label>Email</label><input type="email" id="${formId}_email" placeholder="you@email.com" /></div>
    </div>
    <div class="form-group"><label>Accident Date *</label><input type="date" id="${formId}_date" /></div>
    <div class="form-group"><label>Your City *</label>
      <select id="${formId}_city">
        <option value="">Select city</option>
        <option>Portland</option><option>Hillsboro</option><option>Beaverton</option>
        <option>Sherwood</option><option>Salem</option><option>Lake Oswego</option><option>Other</option>
      </select>
    </div>
    <div class="form-group"><label>Symptoms (optional)</label><textarea id="${formId}_msg" placeholder="Neck pain, back pain, headaches..."></textarea></div>
    <button class="form-submit" onclick="submitForm('${formId}')">Request Free Consultation — $0 Cost →</button>
    <p class="form-note">🔒 Confidential • No spam • No cost to you</p>
    <div class="success-box" id="${formId}Success">
      <div class="ico">✅</div>
      <h4>We'll call you within 1 hour!</h4>
      <p>A specialist will review your case and schedule your free consultation. Remember — treatment is 100% covered by your insurance.</p>
    </div>
  </div>`;
}

function renderFaq(items) {
  return items.map(item => `
    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">${item.q}<span class="faq-toggle-btn">+</span></div>
      <div class="faq-a"><div class="faq-a-inner">${item.a}</div></div>
    </div>`).join('');
}

function renderReviews(reviews) {
  const colors = ['#1a56db','#e8472a','#059669','#7c3aed','#d97706'];
  return reviews.map((r, i) => `
    <div class="review-card fade-up">
      <div class="review-stars">★★★★★</div>
      <p class="review-text">"${r.text}"</p>
      <div class="review-author">
        <div class="review-avatar" style="background:${colors[i % colors.length]}">${r.initials}</div>
        <div><div class="review-name">${r.name}</div><div class="review-loc">${r.loc}</div></div>
      </div>
    </div>`).join('');
}

// Shared JS functions
function openMobileNav() { document.getElementById('mobileNav').classList.add('open'); document.body.style.overflow='hidden'; }
function closeMobileNav() { document.getElementById('mobileNav').classList.remove('open'); document.body.style.overflow=''; }
function toggleFaq(el) {
  const item = el.parentElement;
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}
function submitForm(id) {
  const fname = document.getElementById(id+'_fname')?.value;
  const phone = document.getElementById(id+'_phone')?.value;
  const city = document.getElementById(id+'_city')?.value;
  const date = document.getElementById(id+'_date')?.value;
  if (!fname || !phone || !city || !date) { alert('Please fill in all required fields.'); return; }
  document.getElementById(id+'Wrap').querySelector('.form-submit').style.display='none';
  document.getElementById(id+'Success').style.display='block';
  document.getElementById(id+'Success').scrollIntoView({behavior:'smooth',block:'center'});
}
function initAnimations() {
  const obs = new IntersectionObserver(entries => {
    entries.forEach((e,i) => { if(e.isIntersecting) { setTimeout(()=>e.target.classList.add('visible'), i*80); } });
  }, {threshold: 0.08});
  document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
}
document.addEventListener('DOMContentLoaded', initAnimations);

// ── Emergency Services Block ──────────────────────────────────
function renderEmergencyServices() {
  return `
  <section style="background:var(--navy);padding:80px 0;">
    <div class="container">
      <div class="tag" style="background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.8);">Complete Accident Support</div>
      <div class="section-title" style="color:white;">We Help With More Than Just Your Injuries</div>
      <div class="section-sub" style="color:rgba(255,255,255,0.7);">After a crash, you need a team. We coordinate with trusted Oregon professionals to handle every aspect of your recovery — medical, legal, and logistical.</div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:52px;">
        <div style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:16px;padding:32px 28px;">
          <div style="font-size:2.5rem;margin-bottom:16px;">⚖️</div>
          <h3 style="font-family:'Playfair Display',serif;font-weight:900;color:white;font-size:1.15rem;margin-bottom:12px;">Personal Injury Attorneys</h3>
          <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;line-height:1.7;margin-bottom:20px;">Accident wasn't your fault? Our network of Oregon PI attorneys works on contingency — you pay nothing unless they win. We provide the medical documentation they need to build a strong case.</p>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:8px;">
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Free case evaluation within 24 hrs</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> No fee unless you win</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Oregon-licensed, accident specialists</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> We coordinate records directly</li>
          </ul>
        </div>
        <div style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:16px;padding:32px 28px;">
          <div style="font-size:2.5rem;margin-bottom:16px;">🚛</div>
          <h3 style="font-family:'Playfair Display',serif;font-weight:900;color:white;font-size:1.15rem;margin-bottom:12px;">24/7 Tow & Recovery</h3>
          <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;line-height:1.7;margin-bottom:20px;">Stranded on I-5, I-84, or anywhere in Oregon? Our partner tow companies operate around the clock and work directly with all major insurance carriers — no upfront payment needed.</p>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:8px;">
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> 24/7 dispatch — 30 min avg arrival</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Covered by your auto insurance</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Flatbed & standard tow available</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> All Oregon highways & streets</li>
          </ul>
        </div>
        <div style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:16px;padding:32px 28px;">
          <div style="font-size:2.5rem;margin-bottom:16px;">🚗</div>
          <h3 style="font-family:'Playfair Display',serif;font-weight:900;color:white;font-size:1.15rem;margin-bottom:12px;">Rental Car Coordination</h3>
          <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;line-height:1.7;margin-bottom:20px;">Your car is in the shop — you still need to get to work and to your treatment appointments. We help you navigate rental car coverage with your insurance so you're never left stranded.</p>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:8px;">
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Same-day rental arrangements</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Insurance billing coordination</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Partner locations across Oregon</li>
            <li style="color:rgba(255,255,255,0.85);font-size:0.83rem;display:flex;gap:10px;align-items:center;"><span style="color:#6ee7b7;">✓</span> Enterprise, Hertz, Budget partners</li>
          </ul>
        </div>
      </div>
      <div style="margin-top:32px;background:rgba(234,179,8,0.12);border:1px solid rgba(234,179,8,0.3);border-radius:14px;padding:24px 28px;display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
        <span style="font-size:2rem;">💡</span>
        <div>
          <strong style="color:#fde68a;font-size:0.95rem;">One call connects you to everything</strong>
          <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;margin-top:4px;">Call us and we coordinate the entire process — chiro care, tow, attorney referral, rental car. You focus on recovering. We handle the chaos.</p>
        </div>
        <a href="#contact" class="btn btn-red" style="margin-left:auto;">Get Help Now →</a>
      </div>
    </div>
  </section>`;
}

// ── Photo gallery component ───────────────────────────────────
function renderPhotoSection(photos) {
  // photos = [{url, alt, caption}]
  const cols = photos.length === 2 ? 'repeat(2,1fr)' : photos.length === 4 ? 'repeat(2,1fr)' : 'repeat(3,1fr)';
  return `<div style="display:grid;grid-template-columns:${cols};gap:16px;margin-top:36px;">
    ${photos.map(p => `
      <div style="border-radius:14px;overflow:hidden;position:relative;">
        <img src="${p.url}" alt="${p.alt}" loading="lazy" style="width:100%;height:240px;object-fit:cover;display:block;">
        ${p.caption ? `<div style="position:absolute;bottom:0;left:0;right:0;background:linear-gradient(transparent,rgba(0,0,0,0.7));padding:16px 14px 12px;color:white;font-size:0.78rem;font-weight:600;">${p.caption}</div>` : ''}
      </div>`).join('')}
  </div>`;
}
