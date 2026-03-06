<?php
/**
 * Reusable Lead Form
 * Usage: get_template_part('template-parts/form', null, ['form_id' => 'contact'])
 */
$form_id = $args['form_id'] ?? 'contact';
?>
<div class="form-wrap" id="<?php echo esc_attr($form_id); ?>Wrap">
  <div class="form-title">Get Free Consultation</div>
  <p class="form-sub">We'll call you within 1 hour during business hours. 100% confidential.</p>

  <div class="form-row">
    <div class="form-group">
      <label>First Name *</label>
      <input type="text" id="<?php echo esc_attr($form_id); ?>_fname" placeholder="John">
    </div>
    <div class="form-group">
      <label>Last Name *</label>
      <input type="text" id="<?php echo esc_attr($form_id); ?>_lname" placeholder="Smith">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group">
      <label>Phone *</label>
      <input type="tel" id="<?php echo esc_attr($form_id); ?>_phone" placeholder="(503) 000-0000">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" id="<?php echo esc_attr($form_id); ?>_email" placeholder="you@email.com">
    </div>
  </div>
  <div class="form-group">
    <label>Accident Date *</label>
    <input type="date" id="<?php echo esc_attr($form_id); ?>_date">
  </div>
  <div class="form-group">
    <label>Your City *</label>
    <select id="<?php echo esc_attr($form_id); ?>_city">
      <option value="">Select city</option>
      <option>Portland</option>
      <option>Hillsboro</option>
      <option>Beaverton</option>
      <option>Sherwood</option>
      <option>Salem</option>
      <option>Lake Oswego</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label>Symptoms (optional)</label>
    <textarea id="<?php echo esc_attr($form_id); ?>_msg" placeholder="Neck pain, back pain, headaches..."></textarea>
  </div>

  <button class="form-submit" onclick="submitForm('<?php echo esc_attr($form_id); ?>')">
    Request Free Consultation — $0 Cost →
  </button>
  <p class="form-note">🔒 Confidential &bull; No spam &bull; No cost to you</p>

  <div class="success-box" id="<?php echo esc_attr($form_id); ?>Success" style="display:none;">
    <div class="ico">✅</div>
    <h4>We'll call you within 1 hour!</h4>
    <p>A specialist will review your case and schedule your free consultation. Treatment is 100% covered by your insurance.</p>
  </div>
</div>
