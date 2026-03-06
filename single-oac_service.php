<?php get_header();
$phone     = oac_phone();
$phone_raw = oac_phone_raw();
$svc_name  = get_the_title();
$icon      = get_post_meta(get_the_ID(),'_oac_icon',true) ?: '🏥';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span>›</span><span>Services</span>
      <span>›</span><span><?php echo esc_html($svc_name); ?></span>
    </div>
    <div class="page-hero-badges">
      <span class="badge badge-green">✓ 100% FREE After Car Accident</span>
      <span class="badge">⚡ Same-Day Treatment</span>
      <span class="badge"><?php echo esc_html($icon); ?> Specialists</span>
    </div>
    <h1><?php echo esc_html($icon); ?> <?php the_title(); ?> in <em>Portland, Oregon</em></h1>
    <p><?php echo esc_html(get_the_excerpt() ?: 'Specialized auto accident care — fully covered by your Oregon auto insurance. You pay $0. Same-day appointments available.'); ?></p>
    <div class="page-hero-actions">
      <a href="#contact" class="btn btn-red btn-lg">Free Evaluation →</a>
      <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline btn-lg">📞 <?php echo esc_html($phone); ?></a>
    </div>
  </div>
</section>

<!-- Warning banner -->
<section style="background:#fffbeb;border-bottom:2px solid #fde68a;padding:24px 0;">
  <div class="container">
    <div style="display:flex;align-items:center;gap:16px;flex-wrap:wrap;">
      <span style="font-size:2rem;">⚠️</span>
      <div>
        <strong style="color:#92400e;">Don't Wait — Injuries Worsen Without Treatment</strong>
        <p style="color:#78350f;font-size:0.9rem;margin-top:4px;">Get evaluated today — it's completely <strong>free</strong> and same-day appointments are available.</p>
      </div>
      <a href="#contact" class="btn btn-red" style="margin-left:auto;">Book Now — FREE</a>
    </div>
  </div>
</section>

<!-- SERVICE CONTENT + FORM -->
<section style="background:var(--off-white);padding:80px 0;" id="contact">
  <div class="container">
    <div style="display:grid;grid-template-columns:1.2fr 1fr;gap:64px;align-items:start;">
      <div>
        <div class="tag">About This Treatment</div>
        <h2 class="section-title"><?php the_title(); ?></h2>
        <div style="font-size:0.97rem;line-height:1.8;color:var(--gray-dark);" class="entry-content">
          <?php the_content(); ?>
        </div>

        <!-- Insurance callout -->
        <div style="background:linear-gradient(135deg,#ecfdf5,#d1fae5);border-radius:14px;padding:22px 24px;margin-top:32px;border:1px solid #a7f3d0;">
          <strong style="color:#065f46;font-size:1rem;">✅ This Treatment is 100% FREE After a Car Accident</strong>
          <p style="color:#064e3b;font-size:0.9rem;margin-top:8px;line-height:1.6;">Oregon PIP law requires your auto insurer to cover <?php the_title(); ?> after an accident. We bill your insurance directly — State Farm, Allstate, Progressive, GEICO, Farmers, USAA, and all others.</p>
        </div>
      </div>

      <?php get_template_part('template-parts/form', null, ['form_id' => 'svc_'.get_the_ID()]); ?>
    </div>
  </div>
</section>

<!-- Related cities -->
<section style="background:white;padding:60px 0;">
  <div class="container">
    <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:900;color:var(--navy);margin-bottom:28px;">Service Available Throughout Oregon</h3>
    <div style="display:flex;flex-wrap:wrap;gap:10px;">
      <?php
      $cities = get_posts(['post_type'=>'oac_city','posts_per_page'=>10,'orderby'=>'menu_order']);
      foreach($cities as $city):
      ?>
        <a href="<?php echo esc_url(get_permalink($city)); ?>" style="background:#eff6ff;color:var(--blue);font-size:0.85rem;font-weight:600;padding:8px 18px;border-radius:100px;text-decoration:none;">📍 <?php echo esc_html($city->post_title); ?></a>
      <?php endforeach;
      if(empty($cities)):
        $defaults = ['Portland','Hillsboro','Beaverton','Sherwood','Salem','Lake Oswego'];
        foreach($defaults as $c): ?>
          <a href="<?php echo esc_url(home_url('/areas/'.strtolower($c))); ?>" style="background:#eff6ff;color:var(--blue);font-size:0.85rem;font-weight:600;padding:8px 18px;border-radius:100px;text-decoration:none;">📍 <?php echo esc_html($c); ?></a>
        <?php endforeach;
      endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
