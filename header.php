<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- TOPBAR -->
<div class="topbar">
  🚗 <strong>Auto Accident? Treatment is 100% FREE</strong> — Billed directly to your insurance. No out-of-pocket cost.
  <a href="<?php echo esc_url( home_url('/#contact') ); ?>">Get Help Now →</a>
</div>

<!-- NAV -->
<nav id="site-nav">
  <div class="nav-inner">
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="nav-logo">
      <?php echo esc_html( get_option('oac_business_name','Oregon Accident') ); ?><span>Chiro</span>
    </a>

    <ul class="nav-menu">
      <li>
        <a href="#">Services <span class="arrow">▾</span></a>
        <div class="dropdown">
          <?php
          $services = get_posts(['post_type'=>'oac_service','posts_per_page'=>10,'orderby'=>'menu_order','order'=>'ASC']);
          $svc_icons = ['🔄','🦴','💪','🧠','🏃','📋'];
          foreach($services as $i => $s):
            $icon = $svc_icons[$i % count($svc_icons)];
          ?>
            <a href="<?php echo esc_url(get_permalink($s)); ?>">
              <span class="icon"><?php echo $icon; ?></span>
              <?php echo esc_html($s->post_title); ?>
            </a>
          <?php endforeach;
          if(empty($services)): ?>
            <a href="<?php echo esc_url(home_url('/services/whiplash-treatment')); ?>"><span class="icon">🔄</span> Whiplash Treatment</a>
            <a href="<?php echo esc_url(home_url('/services/back-spine-injuries')); ?>"><span class="icon">🦴</span> Back &amp; Spine Injuries</a>
            <a href="<?php echo esc_url(home_url('/services/soft-tissue-therapy')); ?>"><span class="icon">💪</span> Soft Tissue Therapy</a>
            <a href="<?php echo esc_url(home_url('/services/post-concussion-care')); ?>"><span class="icon">🧠</span> Post-Concussion Care</a>
            <a href="<?php echo esc_url(home_url('/services/rehabilitation')); ?>"><span class="icon">🏃</span> Rehabilitation</a>
            <a href="<?php echo esc_url(home_url('/services/medical-documentation')); ?>"><span class="icon">📋</span> Medical Documentation</a>
          <?php endif; ?>
        </div>
      </li>
      <li>
        <a href="#">Areas Served <span class="arrow">▾</span></a>
        <div class="dropdown">
          <?php
          $cities = get_posts(['post_type'=>'oac_city','posts_per_page'=>10,'orderby'=>'menu_order','order'=>'ASC']);
          foreach($cities as $city): ?>
            <a href="<?php echo esc_url(get_permalink($city)); ?>">
              <span class="icon">📍</span> <?php echo esc_html($city->post_title); ?>
            </a>
          <?php endforeach;
          if(empty($cities)): ?>
            <a href="<?php echo esc_url(home_url('/areas/portland')); ?>"><span class="icon">📍</span> Portland, OR</a>
            <a href="<?php echo esc_url(home_url('/areas/hillsboro')); ?>"><span class="icon">📍</span> Hillsboro, OR</a>
            <a href="<?php echo esc_url(home_url('/areas/beaverton')); ?>"><span class="icon">📍</span> Beaverton, OR</a>
            <a href="<?php echo esc_url(home_url('/areas/sherwood')); ?>"><span class="icon">📍</span> Sherwood, OR</a>
            <a href="<?php echo esc_url(home_url('/areas/salem')); ?>"><span class="icon">📍</span> Salem, OR</a>
            <a href="<?php echo esc_url(home_url('/areas/lake-oswego')); ?>"><span class="icon">📍</span> Lake Oswego, OR</a>
          <?php endif; ?>
        </div>
      </li>
      <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
      <li><a href="<?php echo esc_url(home_url('/#faq')); ?>">FAQ</a></li>
    </ul>

    <a href="tel:<?php echo esc_attr(oac_phone_raw()); ?>" class="nav-phone" data-phone>
      📞 <?php echo esc_html(oac_phone()); ?>
    </a>
    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-red btn-sm nav-cta">
      Free Consultation
    </a>
    <div class="hamburger" onclick="openMobileNav()">
      <span></span><span></span><span></span>
    </div>
  </div>
</nav>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobileNav">
  <button class="mobile-close" onclick="closeMobileNav()">✕</button>
  <a href="<?php echo esc_url(home_url('/')); ?>">🏠 Home</a>
  <div class="mobile-group-label">Services</div>
  <a href="<?php echo esc_url(home_url('/services/whiplash-treatment')); ?>">🔄 Whiplash Treatment</a>
  <a href="<?php echo esc_url(home_url('/services/back-spine-injuries')); ?>">🦴 Back &amp; Spine Injuries</a>
  <a href="<?php echo esc_url(home_url('/services/soft-tissue-therapy')); ?>">💪 Soft Tissue Therapy</a>
  <a href="<?php echo esc_url(home_url('/services/post-concussion-care')); ?>">🧠 Post-Concussion Care</a>
  <a href="<?php echo esc_url(home_url('/services/rehabilitation')); ?>">🏃 Rehabilitation</a>
  <a href="<?php echo esc_url(home_url('/services/medical-documentation')); ?>">📋 Medical Documentation</a>
  <div class="mobile-group-label">Areas Served</div>
  <a href="<?php echo esc_url(home_url('/areas/portland')); ?>">📍 Portland</a>
  <a href="<?php echo esc_url(home_url('/areas/hillsboro')); ?>">📍 Hillsboro</a>
  <a href="<?php echo esc_url(home_url('/areas/beaverton')); ?>">📍 Beaverton</a>
  <a href="<?php echo esc_url(home_url('/areas/sherwood')); ?>">📍 Sherwood</a>
  <a href="<?php echo esc_url(home_url('/areas/salem')); ?>">📍 Salem</a>
  <a href="<?php echo esc_url(home_url('/areas/lake-oswego')); ?>">📍 Lake Oswego</a>
  <div class="mobile-group-label">More</div>
  <a href="<?php echo esc_url(home_url('/blog')); ?>">📝 Blog</a>
  <a href="<?php echo esc_url(home_url('/#faq')); ?>">❓ FAQ</a>
  <a href="<?php echo esc_url(home_url('/#contact')); ?>" style="background:var(--accent);color:white;text-align:center;margin-top:12px;border-radius:8px;">
    Free Consultation →
  </a>
</div>
