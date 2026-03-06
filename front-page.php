<?php get_header(); ?>

<?php
$phone     = oac_phone();
$phone_raw = oac_phone_raw();
?>

<!-- ═══ HERO ═══════════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-eyebrow">
      <span class="free-badge">$0 OUT-OF-POCKET — INSURANCE COVERED</span>
      <span class="badge">📍 Portland, Oregon</span>
    </div>
    <h1>Car Accident Chiropractor in <em>Portland, Oregon</em></h1>
    <p class="hero-sub">Injured in an auto accident? Get specialized chiropractic care — billed directly to your insurance. You pay absolutely nothing. Same-day appointments available.</p>

    <div class="hero-free-box">
      <div class="hero-free-box-title">✅ Your Treatment is 100% FREE</div>
      <p>Oregon's PIP law requires auto insurance to cover chiropractic care after an accident. <strong>We handle all paperwork and bill insurance directly.</strong> Most patients pay $0 — regardless of who was at fault.</p>
    </div>

    <div class="hero-actions">
      <a href="#contact" class="btn btn-red btn-lg">Get Free Consultation →</a>
      <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline btn-lg">📞 Call Now</a>
    </div>
    <div class="hero-phone-row">
      <div>
        <div class="hero-phone-label">Available Mon–Fri 8am–6pm, Sat 9am–2pm</div>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" data-phone><?php echo esc_html($phone); ?></a>
      </div>
    </div>
  </div>

  <div class="hero-right">
    <div class="hero-cards">
      <div class="hero-card"><div class="hero-card-icon">💰</div><div class="hero-card-val">$0</div><div class="hero-card-label">Out-of-pocket cost for most patients</div></div>
      <div class="hero-card"><div class="hero-card-icon">⭐</div><div class="hero-card-val">4.9<span>★</span></div><div class="hero-card-label">Average Google Rating from 127 reviews</div></div>
      <div class="hero-card"><div class="hero-card-icon">⚡</div><div class="hero-card-val">Same<span> Day</span></div><div class="hero-card-label">Appointments for accident victims</div></div>
      <div class="hero-card"><div class="hero-card-icon">🏥</div><div class="hero-card-val">500<span>+</span></div><div class="hero-card-label">Accident patients treated in Oregon</div></div>
    </div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar">
  <div class="container">
    <div class="trust-inner">
      <div class="trust-item"><span class="trust-item-icon">✅</span> 100% Insurance Covered</div>
      <span class="trust-sep">|</span>
      <div class="trust-item"><span class="trust-item-icon">⚡</span> Same-Day Appointments</div>
      <span class="trust-sep">|</span>
      <div class="trust-item"><span class="trust-item-icon">📋</span> Free Case Review</div>
      <span class="trust-sep">|</span>
      <div class="trust-item"><span class="trust-item-icon">🏆</span> Oregon-Licensed Specialists</div>
      <span class="trust-sep">|</span>
      <div class="trust-item"><span class="trust-item-icon">📞</span> We Handle All Paperwork</div>
    </div>
  </div>
</div>

<!-- ═══ WHY US ══════════════════════════════════════════════════ -->
<section style="background:white;padding:90px 0;">
  <div class="container">
    <div class="tag">Why Choose Us</div>
    <div class="section-title">Portland's #1 Auto Accident Chiropractic Specialists</div>
    <div class="section-sub">We treat only auto accident injuries — experts who know exactly what your body went through.</div>
    <div class="why-grid">
      <div class="why-cards">
        <div class="why-card fade-up">
          <div class="why-icon">💰</div>
          <div><h3>100% Free — Covered by Your Insurance</h3><p>Oregon PIP law requires your auto insurance to pay for chiropractic care. We verify your coverage and bill insurance directly. <strong>You pay $0.</strong></p></div>
        </div>
        <div class="why-card fade-up">
          <div class="why-icon">🎯</div>
          <div><h3>Auto Accident Specialists — Not General Chiro</h3><p>We treat only motor vehicle accident injuries. We understand crash biomechanics, whiplash mechanics, and the specific soft tissue patterns caused by impact.</p></div>
        </div>
        <div class="why-card fade-up">
          <div class="why-icon">⚡</div>
          <div><h3>Same-Day Appointments After an Accident</h3><p>We reserve slots specifically for accident victims. Call today — we'll see you today. Timing matters for both your health and your claim.</p></div>
        </div>
        <div class="why-card fade-up">
          <div class="why-icon">📄</div>
          <div><h3>Medical Records That Support Your Claim</h3><p>Our detailed documentation is used by Oregon personal injury attorneys. We work with PI lawyers throughout Oregon regularly.</p></div>
        </div>
      </div>
      <div class="why-highlight">
        <h3>Don't Wait — Accident Injuries Get Worse Without Treatment</h3>
        <p>Adrenaline after a crash masks pain. Many patients feel fine for 24–72 hours — then wake up unable to move.</p>
        <ul class="check-list">
          <li>Whiplash symptoms appear 24–72 hours after accident</li>
          <li>Untreated injuries lead to chronic pain and long-term damage</li>
          <li>Insurance claims are stronger when treatment starts immediately</li>
          <li>Oregon law allows 2 years to file, but start treatment now</li>
          <li>Treatment is FREE — there's no reason to delay</li>
        </ul>
        <a href="#contact" class="btn btn-red btn-lg">Book Free Consultation →</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ SERVICES ════════════════════════════════════════════════ -->
<section id="services" style="background:var(--off-white);padding:90px 0;">
  <div class="container">
    <div class="tag">What We Treat</div>
    <div class="section-title">Comprehensive Auto Injury Care</div>
    <div class="section-sub">Every treatment is 100% covered by your auto insurance — no copays, no deductibles, no out-of-pocket costs.</div>
    <div class="services-grid mt-56">
      <?php
      $services = get_posts(['post_type'=>'oac_service','posts_per_page'=>6,'orderby'=>'menu_order']);
      $svc_icons = ['🔄','🦴','🧠','💪','🏃','📋'];
      foreach($services as $i => $s):
        $icon = get_post_meta($s->ID,'_oac_icon',true) ?: $svc_icons[$i % count($svc_icons)];
      ?>
        <div class="service-card fade-up">
          <div class="svc-icon"><?php echo esc_html($icon); ?></div>
          <div class="svc-free">✓ Insurance Covered</div>
          <h3><?php echo esc_html($s->post_title); ?></h3>
          <p><?php echo esc_html($s->post_excerpt ?: wp_trim_words($s->post_content,20)); ?></p>
          <a href="<?php echo esc_url(get_permalink($s)); ?>" class="svc-link">Learn more →</a>
        </div>
      <?php endforeach;

      // Fallback if no posts yet
      if(empty($services)):
        $defaults = [
          ['🔄','Whiplash Treatment','Targeted spinal manipulation and soft tissue therapy to restore neck mobility and eliminate pain from sudden impact.','/services/whiplash-treatment'],
          ['🦴','Back &amp; Spine Injuries','Herniated discs, lumbar sprains, and spinal misalignment. Adjustments and decompression therapy to relieve pressure.','/services/back-spine-injuries'],
          ['🧠','Post-Concussion Care','Headaches and cognitive symptoms after an accident. We treat cervicogenic headaches and neck-related concussion symptoms.','/services/post-concussion-care'],
          ['💪','Soft Tissue Therapy','Muscle tears, sprains, and strains from impact. Manual therapy to heal damaged tissue and prevent chronic pain.','/services/soft-tissue-therapy'],
          ['🏃','Rehabilitation Exercises','Customized therapeutic exercise programs to rebuild strength and function after your accident.','/services/rehabilitation'],
          ['📋','Medical Documentation','Detailed injury records for your insurance claim and legal proceedings. We work with Oregon PI attorneys.','/services/medical-documentation'],
        ];
        foreach($defaults as [$icon,$title,$desc,$link]):
      ?>
        <div class="service-card fade-up">
          <div class="svc-icon"><?php echo $icon; ?></div>
          <div class="svc-free">✓ Insurance Covered</div>
          <h3><?php echo $title; ?></h3>
          <p><?php echo $desc; ?></p>
          <a href="<?php echo esc_url(home_url($link)); ?>" class="svc-link">Learn more →</a>
        </div>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>

<!-- ═══ CITIES ══════════════════════════════════════════════════ -->
<section id="areas" style="background:white;padding:90px 0;">
  <div class="container">
    <div class="tag">Service Areas</div>
    <div class="section-title">Serving Portland Metro &amp; All of Oregon</div>
    <div class="section-sub">We serve auto accident patients across the greater Portland area — all with $0 out-of-pocket cost.</div>
    <div class="cities-grid mt-48">
      <?php
      $cities = get_posts(['post_type'=>'oac_city','posts_per_page'=>6,'orderby'=>'menu_order']);
      foreach($cities as $city):
        $county = get_post_meta($city->ID,'_oac_county',true) ?: 'Oregon';
      ?>
        <a href="<?php echo esc_url(get_permalink($city)); ?>" class="city-card fade-up">
          <div class="city-header">
            <span class="city-name">📍 <?php echo esc_html($city->post_title); ?>, OR</span>
            <span class="city-arrow">→</span>
          </div>
          <div class="city-detail"><?php echo esc_html(wp_trim_words($city->post_excerpt ?: $city->post_content, 18)); ?></div>
          <span class="city-tag"><?php echo esc_html($county); ?></span>
        </a>
      <?php endforeach;

      if(empty($cities)):
        $default_cities = [
          ['Portland','All Portland neighborhoods — NE, SE, NW, Downtown, East Portland.','Primary Location'],
          ['Hillsboro','Hillsboro, North Plains, and surrounding Washington County.','Washington County'],
          ['Beaverton','Beaverton, Aloha, Cedar Hills, and Cedar Mill.','Washington County'],
          ['Sherwood','Sherwood, Tualatin, and Wilsonville. South Washington County.','South Metro'],
          ['Salem','Oregon\'s capital and Marion County. Serving all Salem neighborhoods.','Willamette Valley'],
          ['Lake Oswego','Lake Oswego, Tigard, and West Linn along I-5 corridor.','South Portland'],
        ];
        foreach($default_cities as [$name,$desc,$tag]):
      ?>
        <a href="<?php echo esc_url(home_url('/areas/'.strtolower(str_replace(' ','-',$name)))); ?>" class="city-card fade-up">
          <div class="city-header"><span class="city-name">📍 <?php echo esc_html($name); ?>, OR</span><span class="city-arrow">→</span></div>
          <div class="city-detail"><?php echo esc_html($desc); ?></div>
          <span class="city-tag"><?php echo esc_html($tag); ?></span>
        </a>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>

<!-- ═══ RECENT BLOG POSTS ═══════════════════════════════════════ -->
<section style="background:var(--gray-light);padding:90px 0;">
  <div class="container">
    <div class="tag">Resources</div>
    <div class="section-title">Auto Accident Recovery Blog</div>
    <div class="section-sub">Expert guidance on recovery, insurance, and Oregon law for accident victims.</div>
    <div class="blog-grid mt-48">
      <?php
      $posts = get_posts(['numberposts'=>3,'post_status'=>'publish']);
      $post_emojis = ['🚗','💰','🔄','⏰','🛡️','🏥'];
      $post_colors = [
        'linear-gradient(135deg,#fef2f2,#fee2e2)',
        'linear-gradient(135deg,#ecfdf5,#d1fae5)',
        'linear-gradient(135deg,#eff6ff,#dbeafe)',
        'linear-gradient(135deg,#fffbeb,#fef3c7)',
      ];
      foreach($posts as $i => $post):
        $emoji = $post_emojis[$i % count($post_emojis)];
        $color = $post_colors[$i % count($post_colors)];
        $cat   = get_the_category($post->ID);
        $cat_name = $cat ? $cat[0]->name : 'Guide';
      ?>
        <a href="<?php echo esc_url(get_permalink($post)); ?>" class="blog-card fade-up">
          <div class="blog-thumb" style="background:<?php echo $color; ?>;height:180px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;"><?php echo $emoji; ?></div>
          <div class="blog-content">
            <span class="blog-tag"><?php echo esc_html($cat_name); ?></span>
            <h3><?php echo esc_html($post->post_title); ?></h3>
            <p><?php echo esc_html(wp_trim_words($post->post_excerpt ?: $post->post_content, 18)); ?></p>
            <div class="blog-meta">
              <span><?php echo get_the_date('M j, Y', $post->ID); ?></span>
              <span>•</span>
              <span><?php echo ceil(str_word_count(strip_tags($post->post_content))/200); ?> min read</span>
            </div>
          </div>
        </a>
      <?php endforeach;

      if(empty($posts)): ?>
        <a href="#" class="blog-card fade-up"><div class="blog-thumb" style="background:linear-gradient(135deg,#fef2f2,#fee2e2);height:180px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;">🚗</div><div class="blog-content"><span class="blog-tag">Must Read</span><h3>What to Do Immediately After a Car Accident in Oregon</h3><p>Step-by-step guide for the first 72 hours after a crash.</p></div></a>
        <a href="#" class="blog-card fade-up"><div class="blog-thumb" style="background:linear-gradient(135deg,#ecfdf5,#d1fae5);height:180px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;">💰</div><div class="blog-content"><span class="blog-tag">Insurance</span><h3>Is Chiropractic Care Really Free After a Car Accident?</h3><p>How Oregon's PIP law works and why most patients pay $0.</p></div></a>
        <a href="#" class="blog-card fade-up"><div class="blog-thumb" style="background:linear-gradient(135deg,#eff6ff,#dbeafe);height:180px;display:flex;align-items:center;justify-content:center;font-size:3.5rem;">🔄</div><div class="blog-content"><span class="blog-tag">Injury Guide</span><h3>Whiplash Symptoms: Why Pain Appears Days After the Accident</h3><p>The science of delayed whiplash symptoms and when to act.</p></div></a>
      <?php endif; ?>
    </div>
    <div style="text-align:center;margin-top:36px;">
      <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-outline-navy">View All Articles →</a>
    </div>
  </div>
</section>

<!-- ═══ FAQ ══════════════════════════════════════════════════════ -->
<section id="faq" style="background:white;padding:90px 0;">
  <div class="container">
    <div class="tag">FAQ</div>
    <div class="section-title">Common Questions About Free Accident Treatment</div>
    <div class="faq-layout">
      <div>
        <?php
        $faqs = [
          ['Is chiropractic treatment really free after a car accident in Oregon?','Yes. Oregon requires all auto policies to include Personal Injury Protection (PIP) which covers chiropractic care regardless of fault. We verify your coverage before the first visit and bill your insurance directly. The vast majority of our patients pay $0 out of pocket.'],
          ['How soon after an accident should I see a chiropractor?','Within 72 hours is ideal. Adrenaline from the accident masks pain for hours or days — many patients feel fine the day of the crash, then wake up in agony. Early treatment also protects your insurance claim by creating documentation close to the accident date.'],
          ['What if the accident wasn\'t my fault?','Even if someone else caused the accident, your own PIP coverage pays for treatment first. You don\'t need to wait for fault to be determined — get treatment immediately.'],
          ['Do I need a referral or police report to be treated?','No referral needed. A police report is helpful but not required. You only need your auto insurance information. We\'ll contact your insurance company directly and handle the rest.'],
          ['How long does treatment take?','Minor whiplash typically resolves in 6–8 weeks. More complex injuries involving disc damage may require 3–6 months. We create a personalized plan and monitor your progress at every visit.'],
          ['Can chiropractic records help my personal injury case?','Absolutely. Our detailed records documenting injury severity, treatment received, and recovery progress are essential evidence for insurance adjusters and Oregon personal injury attorneys.'],
        ];
        foreach($faqs as [$q,$a]): ?>
          <div class="faq-item">
            <div class="faq-q" onclick="toggleFaq(this)"><?php echo esc_html($q); ?><span class="faq-toggle-btn">+</span></div>
            <div class="faq-a"><div class="faq-a-inner"><?php echo esc_html($a); ?></div></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="cta-block">
        <h2>Still Have Questions?</h2>
        <p>Our specialists are happy to answer any questions about your case, your insurance coverage, and what treatment options are available — at no charge.</p>
        <div class="btns">
          <a href="#contact" class="btn btn-red btn-lg">Free Consultation →</a>
          <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline btn-lg">📞 Call Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CONTACT FORM ═════════════════════════════════════════════ -->
<section id="contact" style="background:var(--off-white);padding:90px 0;">
  <div class="container">
    <div class="tag">Get Help Today</div>
    <div class="section-title">Request Your Free Consultation</div>
    <div class="contact-layout">
      <div class="contact-info">
        <h3>We're Here to Help You Recover — At No Cost to You</h3>
        <p>Call us or fill out the form. We'll review your case, verify your insurance, and schedule your first appointment. Most patients are seen within 24 hours.</p>
        <div class="contact-items">
          <div class="contact-item"><div class="ci-icon">📞</div><div class="ci-text"><strong>Phone</strong><span><a href="tel:<?php echo esc_attr($phone_raw); ?>" data-phone><?php echo esc_html($phone); ?></a></span></div></div>
          <div class="contact-item"><div class="ci-icon">✉️</div><div class="ci-text"><strong>Email</strong><span><a href="mailto:<?php echo esc_attr(oac_email()); ?>"><?php echo esc_html(oac_email()); ?></a></span></div></div>
          <div class="contact-item"><div class="ci-icon">🕐</div><div class="ci-text"><strong>Hours</strong><span>Mon–Fri: 8:00am – 6:00pm<br>Saturday: 9:00am – 2:00pm</span></div></div>
          <div class="contact-item"><div class="ci-icon">💰</div><div class="ci-text"><strong>Cost to You</strong><span style="color:var(--green);font-weight:700;">$0 — Covered by Auto Insurance</span></div></div>
        </div>
      </div>
      <?php get_template_part('template-parts/form', null, ['form_id' => 'homepage']); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
