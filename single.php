<?php get_header();
$phone     = oac_phone();
$phone_raw = oac_phone_raw();
$cats      = get_the_category();
$cat_name  = $cats ? $cats[0]->name : 'Guide';
$words     = str_word_count(strip_tags(get_the_content()));
$read_time = max(1, ceil($words / 200));
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span>›</span>
      <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a>
      <span>›</span>
      <span><?php the_title(); ?></span>
    </div>
    <div class="page-hero-badges">
      <span class="badge"><?php echo esc_html($cat_name); ?></span>
      <span class="badge">📅 <?php the_date('F j, Y'); ?></span>
      <span class="badge">⏱ <?php echo $read_time; ?> min read</span>
    </div>
    <h1><?php the_title(); ?></h1>
    <p><?php echo esc_html(wp_trim_words(get_the_excerpt() ?: get_the_content(), 25)); ?></p>
  </div>
</section>

<section style="background:var(--off-white);padding:80px 0;">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 320px;gap:64px;align-items:start;">

      <!-- Article -->
      <article style="background:white;border-radius:16px;padding:44px;border:1px solid var(--border);">
        <div style="font-size:0.97rem;line-height:1.85;color:var(--gray-dark);" class="entry-content article-body">
          <?php the_content(); ?>
        </div>

        <!-- Author / share -->
        <div style="margin-top:40px;padding-top:28px;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;">
          <div style="display:flex;align-items:center;gap:12px;">
            <div style="width:44px;height:44px;background:var(--navy);border-radius:50%;display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-family:'Playfair Display',serif;">OA</div>
            <div><div style="font-weight:700;font-size:0.9rem;color:var(--navy);">Oregon Accident Chiro Team</div><div style="font-size:0.78rem;color:var(--gray);">Auto Accident Specialists · Portland, OR</div></div>
          </div>
          <div style="background:#ecfdf5;border-radius:100px;padding:8px 18px;font-size:0.82rem;font-weight:700;color:#065f46;">✅ Treatment is FREE After an Accident</div>
        </div>
      </article>

      <!-- Sidebar -->
      <aside style="position:sticky;top:90px;display:flex;flex-direction:column;gap:20px;">
        <div style="background:linear-gradient(135deg,#ecfdf5,#d1fae5);border-radius:14px;padding:22px;border:1px solid #a7f3d0;">
          <h4 style="font-weight:700;color:#065f46;margin-bottom:8px;">✅ Treatment is FREE</h4>
          <p style="font-size:0.88rem;color:#064e3b;line-height:1.6;">Oregon PIP law covers chiropractic care after any accident. You pay $0 — we bill your insurance directly.</p>
        </div>
        <div style="background:var(--navy);border-radius:16px;padding:28px;color:white;">
          <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:900;margin-bottom:10px;">Injured in an Accident?</h3>
          <p style="font-size:0.87rem;color:rgba(255,255,255,0.75);margin-bottom:20px;line-height:1.6;">Get same-day chiropractic care — completely covered by your auto insurance.</p>
          <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-red" style="width:100%;justify-content:center;display:flex;">Free Consultation →</a>
          <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="display:block;text-align:center;margin-top:12px;color:rgba(255,255,255,0.75);font-size:0.9rem;text-decoration:none;" data-phone>📞 <?php echo esc_html($phone); ?></a>
        </div>
        <div style="background:white;border-radius:14px;padding:22px;border:1px solid var(--border);">
          <h4 style="font-weight:700;color:var(--navy);margin-bottom:14px;font-size:0.92rem;">Related Articles</h4>
          <?php
          $related = get_posts(['numberposts'=>4,'post__not_in'=>[get_the_ID()],'post_status'=>'publish']);
          foreach($related as $r): ?>
            <a href="<?php echo esc_url(get_permalink($r)); ?>" style="display:block;padding:10px 0;border-bottom:1px solid var(--border);text-decoration:none;font-size:0.85rem;color:var(--blue);font-weight:500;"><?php echo esc_html($r->post_title); ?> →</a>
          <?php endforeach; ?>
        </div>
      </aside>
    </div>
  </div>
</section>

<section style="background:white;padding:60px 0;">
  <div class="container">
    <div class="cta-block">
      <h2>Injured in a Car Accident? Get FREE Care Today</h2>
      <p>Treatment is covered by your Oregon auto insurance. Same-day appointments available. You pay $0.</p>
      <div class="btns">
        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-red btn-lg">Free Consultation →</a>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline btn-lg">📞 Call Now</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
