<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>›</span><span>Blog</span></div>
    <div class="tag" style="background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.8);margin-bottom:18px;">Resources & Guides</div>
    <h1>Car Accident Recovery Blog</h1>
    <p>Expert guides for Oregon accident victims — insurance, recovery, Oregon law, and what to do after a crash.</p>
  </div>
</section>

<section style="background:var(--off-white);padding:80px 0;">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
      <?php
      $emojis = ['🚗','💰','🔄','⏰','🛡️','🏥','🦴','🧠','💪'];
      $colors = ['linear-gradient(135deg,#fef2f2,#fee2e2)','linear-gradient(135deg,#ecfdf5,#d1fae5)','linear-gradient(135deg,#eff6ff,#dbeafe)','linear-gradient(135deg,#fffbeb,#fef3c7)'];
      $i = 0;
      if(have_posts()): while(have_posts()): the_post();
        $cats = get_the_category();
        $cat  = $cats ? $cats[0]->name : 'Guide';
        $emoji = $emojis[$i % count($emojis)];
        $color = $colors[$i % count($colors)];
        $words = str_word_count(strip_tags(get_the_content()));
        $read  = max(1, ceil($words/200));
      ?>
        <a href="<?php the_permalink(); ?>" class="blog-card fade-up" style="background:white;border-radius:14px;overflow:hidden;border:1px solid var(--border);text-decoration:none;color:var(--text);display:block;transition:all 0.3s;">
          <div style="height:160px;background:<?php echo $color; ?>;display:flex;align-items:center;justify-content:center;font-size:3.5rem;"><?php echo $emoji; ?></div>
          <div style="padding:20px;">
            <span style="font-size:0.72rem;font-weight:700;color:var(--blue);background:#eff6ff;padding:3px 10px;border-radius:100px;display:inline-block;margin-bottom:8px;"><?php echo esc_html($cat); ?></span>
            <h3 style="font-weight:700;font-size:0.95rem;color:var(--navy);margin-bottom:8px;line-height:1.4;"><?php the_title(); ?></h3>
            <p style="font-size:0.83rem;color:var(--gray);line-height:1.6;"><?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 16); ?></p>
            <div style="display:flex;gap:10px;margin-top:12px;font-size:0.76rem;color:var(--gray);">
              <span><?php the_date('M j, Y'); ?></span><span>•</span><span><?php echo $read; ?> min read</span>
            </div>
          </div>
        </a>
      <?php $i++; endwhile;
      else: ?>
        <div style="grid-column:1/-1;text-align:center;padding:60px;color:var(--gray);">
          <div style="font-size:3rem;margin-bottom:16px;">📝</div>
          <h3 style="color:var(--navy);margin-bottom:8px;">No posts yet</h3>
          <p>Add your first blog post from the WordPress admin: Posts → Add New</p>
        </div>
      <?php endif; ?>
    </div>

    <?php if(function_exists('the_posts_pagination')): ?>
      <div style="margin-top:48px;text-align:center;">
        <?php the_posts_pagination(['mid_size'=>2,'prev_text'=>'← Newer','next_text'=>'Older →']); ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section style="background:white;padding:60px 0;">
  <div class="container">
    <div class="cta-block">
      <h2>Had a Car Accident? Get Free Treatment Today</h2>
      <p>Oregon law covers your chiropractic care — you pay $0. Same-day appointments available.</p>
      <div class="btns">
        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-red btn-lg">Free Consultation →</a>
        <a href="tel:<?php echo esc_attr(oac_phone_raw()); ?>" class="btn btn-outline btn-lg">📞 <?php echo esc_html(oac_phone()); ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
