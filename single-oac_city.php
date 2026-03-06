<?php get_header();
$phone     = oac_phone();
$phone_raw = oac_phone_raw();
$city_name = get_the_title();
$county    = get_post_meta(get_the_ID(),'_oac_county',true) ?: 'Oregon';
$roads     = get_post_meta(get_the_ID(),'_oac_roads',true) ?: 'major highways and roads';
$hoods     = get_post_meta(get_the_ID(),'_oac_neighborhoods',true) ?: '';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span>›</span><span>Areas Served</span>
      <span>›</span><span><?php echo esc_html($city_name); ?></span>
    </div>
    <div class="page-hero-badges">
      <span class="badge badge-green">✓ $0 Out-of-Pocket</span>
      <span class="badge">⚡ Same-Day Appointments</span>
      <span class="badge">📍 <?php echo esc_html($city_name); ?>, Oregon</span>
    </div>
    <h1>Car Accident Chiropractor in <em><?php echo esc_html($city_name); ?>, OR</em></h1>
    <p>Auto accident chiropractic specialists serving <?php echo esc_html($city_name); ?>. Injured in a crash? We treat your injuries and bill your insurance directly — you pay nothing.</p>
    <div class="page-hero-actions">
      <a href="#contact" class="btn btn-red btn-lg">Free Consultation →</a>
      <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline btn-lg">📞 <?php echo esc_html($phone); ?></a>
    </div>
  </div>
</section>

<!-- FREE INSURANCE HIGHLIGHT -->
<div style="background:linear-gradient(135deg,var(--green),#047857);padding:28px 0;">
  <div class="container" style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
    <span style="font-size:2rem;">✅</span>
    <div>
      <strong style="color:white;font-size:1rem;">Treatment in <?php echo esc_html($city_name); ?> is 100% FREE After a Car Accident</strong>
      <p style="color:rgba(255,255,255,0.85);font-size:0.9rem;margin-top:4px;">Oregon PIP law covers chiropractic care. We bill State Farm, Allstate, Progressive, GEICO, Farmers &amp; all insurers directly.</p>
    </div>
    <a href="#contact" class="btn btn-red" style="margin-left:auto;">Book Now — FREE</a>
  </div>
</div>

<!-- CITY CONTENT -->
<section style="background:white;padding:80px 0;">
  <div class="container">
    <div style="display:grid;grid-template-columns:1.1fr 1fr;gap:64px;align-items:start;">
      <div>
        <div class="tag"><?php echo esc_html($city_name); ?> Auto Accident Care</div>
        <h2 class="section-title">Why <?php echo esc_html($city_name); ?> Accident Victims Choose Us</h2>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div style="color:var(--gray);line-height:1.75;font-size:0.97rem;" class="entry-content">
            <?php the_content(); ?>
          </div>
        <?php endwhile; else: ?>
          <p style="color:var(--gray);line-height:1.7;margin-bottom:24px;"><?php echo esc_html($city_name); ?> sees thousands of auto accidents each year on <?php echo esc_html($roads); ?>. Many victims don't realize they qualify for <strong>free chiropractic care</strong> under Oregon law.</p>
          <div style="display:flex;flex-direction:column;gap:16px;margin-bottom:32px;">
            <div style="display:flex;gap:14px;align-items:flex-start;"><span style="color:var(--green);font-size:1.3rem;margin-top:2px;">✓</span><div><strong style="color:var(--navy);">Oregon PIP Coverage</strong><p style="font-size:0.88rem;color:var(--gray);margin-top:4px;">Oregon law requires your auto insurer to pay for chiropractic care — no fault determination needed. Your treatment starts immediately.</p></div></div>
            <div style="display:flex;gap:14px;align-items:flex-start;"><span style="color:var(--green);font-size:1.3rem;margin-top:2px;">✓</span><div><strong style="color:var(--navy);">Same-Day Appointments</strong><p style="font-size:0.88rem;color:var(--gray);margin-top:4px;">We keep appointment slots open for accident victims in <?php echo esc_html($city_name); ?>. Call today — come in today.</p></div></div>
            <div style="display:flex;gap:14px;align-items:flex-start;"><span style="color:var(--green);font-size:1.3rem;margin-top:2px;">✓</span><div><strong style="color:var(--navy);">PI Attorney Network</strong><p style="font-size:0.88rem;color:var(--gray);margin-top:4px;">We work with Oregon personal injury attorneys. Our documentation has helped patients win fair settlements.</p></div></div>
          </div>
        <?php endif; ?>

        <?php if($hoods): ?>
          <h3 style="font-weight:700;color:var(--navy);margin-bottom:14px;"><?php echo esc_html($city_name); ?> Neighborhoods We Serve</h3>
          <div style="display:flex;flex-wrap:wrap;gap:8px;">
            <?php foreach(explode(',', $hoods) as $hood): ?>
              <span style="background:#eff6ff;color:var(--blue);font-size:0.8rem;font-weight:600;padding:5px 14px;border-radius:100px;"><?php echo esc_html(trim($hood)); ?></span>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <div id="contact">
        <?php get_template_part('template-parts/form', null, ['form_id' => 'city_'.get_the_ID()]); ?>
      </div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES CTA -->
<section style="background:var(--off-white);padding:60px 0;">
  <div class="container">
    <div class="section-title" style="text-align:center;margin-bottom:36px;">Treatments Available in <?php echo esc_html($city_name); ?></div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;">
      <?php
      $svcs = [['🔄','Whiplash','/services/whiplash-treatment'],['🦴','Back & Spine','/services/back-spine-injuries'],['💪','Soft Tissue','/services/soft-tissue-therapy'],['🧠','Post-Concussion','/services/post-concussion-care'],['🏃','Rehabilitation','/services/rehabilitation'],['📋','Documentation','/services/medical-documentation']];
      foreach($svcs as [$icon,$title,$url]):
      ?>
        <a href="<?php echo esc_url(home_url($url)); ?>" style="background:white;border:1px solid var(--border);border-radius:12px;padding:20px;text-decoration:none;display:flex;align-items:center;gap:12px;font-weight:600;color:var(--navy);transition:all 0.2s;" onmouseover="this.style.borderColor='#3b82f6';this.style.boxShadow='0 4px 16px rgba(26,86,219,0.1)'" onmouseout="this.style.borderColor='var(--border)';this.style.boxShadow='none'">
          <span style="font-size:1.5rem;"><?php echo $icon; ?></span>
          <?php echo esc_html($title); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
