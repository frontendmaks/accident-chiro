<?php
$phone     = oac_phone();
$phone_raw = oac_phone_raw();
$email     = oac_email();
$name      = oac_name();
?>

<!-- FREE TREATMENT BANNER -->
<div class="free-banner">
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
</div>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer-logo"><?php echo esc_html($name); ?><span style="color:var(--accent)">Chiro</span></div>
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
          <?php
          $services = get_posts(['post_type'=>'oac_service','posts_per_page'=>8,'orderby'=>'menu_order']);
          foreach($services as $s): ?>
            <li><a href="<?php echo esc_url(get_permalink($s)); ?>"><?php echo esc_html($s->post_title); ?></a></li>
          <?php endforeach;
          if(empty($services)): ?>
            <li><a href="<?php echo esc_url(home_url('/services/whiplash-treatment')); ?>">Whiplash Treatment</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/back-spine-injuries')); ?>">Back &amp; Spine Injuries</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/soft-tissue-therapy')); ?>">Soft Tissue Therapy</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/post-concussion-care')); ?>">Post-Concussion Care</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/rehabilitation')); ?>">Rehabilitation</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/medical-documentation')); ?>">Medical Documentation</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <div>
        <h4>Areas We Serve</h4>
        <ul class="footer-links">
          <?php
          $cities = get_posts(['post_type'=>'oac_city','posts_per_page'=>8,'orderby'=>'menu_order']);
          foreach($cities as $city): ?>
            <li><a href="<?php echo esc_url(get_permalink($city)); ?>"><?php echo esc_html($city->post_title); ?>, OR</a></li>
          <?php endforeach;
          if(empty($cities)): ?>
            <li><a href="<?php echo esc_url(home_url('/areas/portland')); ?>">Portland, OR</a></li>
            <li><a href="<?php echo esc_url(home_url('/areas/hillsboro')); ?>">Hillsboro, OR</a></li>
            <li><a href="<?php echo esc_url(home_url('/areas/beaverton')); ?>">Beaverton, OR</a></li>
            <li><a href="<?php echo esc_url(home_url('/areas/sherwood')); ?>">Sherwood, OR</a></li>
            <li><a href="<?php echo esc_url(home_url('/areas/salem')); ?>">Salem, OR</a></li>
            <li><a href="<?php echo esc_url(home_url('/areas/lake-oswego')); ?>">Lake Oswego, OR</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <div>
        <h4>Contact</h4>
        <ul class="footer-links">
          <li><a href="tel:<?php echo esc_attr($phone_raw); ?>" data-phone>📞 <?php echo esc_html($phone); ?></a></li>
          <li><a href="mailto:<?php echo esc_attr($email); ?>">✉ <?php echo esc_html($email); ?></a></li>
          <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Free Consultation</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
          <li><a href="<?php echo esc_url(home_url('/#faq')); ?>">FAQ</a></li>
        </ul>
        <div style="margin-top:20px;background:rgba(255,255,255,0.07);border-radius:10px;padding:14px 16px;">
          <div style="font-size:0.78rem;color:rgba(255,255,255,0.5);margin-bottom:4px;">Hours</div>
          <div style="font-size:0.85rem;color:white;">Mon–Fri: 8am – 6pm</div>
          <div style="font-size:0.85rem;color:white;">Saturday: 9am – 2pm</div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© <?php echo date('Y'); ?> <?php echo esc_html($name); ?>. All rights reserved.</span>
      <span>Portland, Oregon</span>
    </div>
    <div class="footer-disclaimer">
      The information on this website is for general informational purposes only and does not constitute medical advice. Results may vary. Insurance coverage depends on your specific policy.
    </div>
  </div>
</footer>

<!-- STICKY MOBILE CALL BAR -->
<div class="sticky-bar">
  <a href="tel:<?php echo esc_attr($phone_raw); ?>">
    📞 Call Free — <span data-phone><?php echo esc_html($phone); ?></span> — No Cost to You
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
