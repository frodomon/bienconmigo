<?php
  function add_theme_menu_item()
  {
    add_menu_page("Dohko Theme Options", "Dohko Theme Options", "manage_options", "dohko-theme-options", "dohko_settings_page", null, 99);
    add_submenu_page("dohko-theme-options", "Dohko Settings", "Dohko Settings", "manage_options", "dohko-theme-options");
    add_submenu_page("dohko-theme-options", "Header Theme Options", "Header Options", "manage_options", "dohko-header-options", "dohko_header_options_page");
    add_submenu_page("dohko-theme-options", "Footer Theme Options", "Footer Options", "manage_options", "dohko-footer-options", "dohko_footer_options_page");
    add_submenu_page("dohko-theme-options", "Health Coaching Options", "Health Coaching Options", "manage_options", "dohko-health-coaching", "dohko_health_coaching_options_page");
    add_submenu_page("dohko-theme-options", "Social Profile Options", "Social Profile", "manage_options", "dohko-social-profile", "dohko_social_profile_page");
    add_submenu_page("dohko-theme-options", "Testimonials Options", "Testimonials Options", "manage_options", "dohko-testimonials-options", "dohko_testimonials_options_page");
    add_submenu_page("dohko-theme-options", "Contact Options", "Contact Options", "manage_options", "dohko-contact-options", "dohko_contact_options_page");
    add_submenu_page("dohko-theme-options", "Home-About Options", "Home-About Options", "manage_options", "dohko-home-about-options", "dohko_home_about_options_page");
    add_submenu_page("dohko-theme-options", "About Us Options", "About Us Options", "manage_options", "dohko-about-us-options", "dohko_about_us_options_page");
    add_submenu_page("dohko-theme-options", "Product Options", "Product Options", "manage_options", "dohko-product-options", "dohko_product_options_page");
    add_submenu_page("dohko-theme-options", "Appointment Options", "Appointment Options", "manage_options", "dohko-appointment-options", "dohko_appointment_options_page");
    add_submenu_page("dohko-theme-options", "Footer Theme Options", "Footer Options", "manage_options", "dohko-footer-options", "dohko_footer_options_page");

  
    add_action( 'admin_init', 'dohko_register_settings' );
  }

  add_action("admin_menu", "add_theme_menu_item");

  function dohko_register_settings() {
    //register our settings
    register_setting( 'dohko-settings-social', 'dohko_facebook' );
    register_setting( 'dohko-settings-social', 'dohko_youtube' );
    register_setting( 'dohko-settings-social', 'dohko_instagram' );
    register_setting( 'dohko-settings-social', 'dohko_googleplus' );
    register_setting( 'dohko-settings-social', 'dohko_twitter' );
    register_setting( 'dohko-settings-social', 'dohko_rss' );
    register_setting( 'dohko-settings-header', 'dohko_logo' );
    register_setting( 'dohko-settings-footer', 'dohko_analytics' );
    register_setting( 'dohko-settings-footer', 'dohko_trademark_text' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_infographic' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_video' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_what_p1' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_what_p2' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_what_p3' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_what_p4' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_work_p1' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_work_p2' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_work_p3' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_work_p4' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_become_p1' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_become_p2' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_become_p3' );
    register_setting( 'dohko-settings-health-coaching', 'dohko_hc_become_p4' );
    register_setting( 'dohko-settings-contact', 'dohko_address_line_1' );
    register_setting( 'dohko-settings-contact', 'dohko_address_line_2' );
    register_setting( 'dohko-settings-contact', 'dohko_address_line_3' );
    register_setting( 'dohko-settings-contact', 'dohko_telephone' );
    register_setting( 'dohko-settings-contact', 'dohko_mobile' );
    register_setting( 'dohko-settings-contact', 'dohko_whatsapp' );
    register_setting( 'dohko-settings-contact', 'dohko_email' );
    register_setting( 'dohko-settings-contact', 'dohko_working_hours_1' );
    register_setting( 'dohko-settings-contact', 'dohko_working_days_1' );
    register_setting( 'dohko-settings-contact', 'dohko_working_hours_2' );
    register_setting( 'dohko-settings-contact', 'dohko_working_days_2' );
    register_setting( 'dohko-settings-contact', 'dohko_working_hours_3' );
    register_setting( 'dohko-settings-contact', 'dohko_working_days_3' );
    register_setting( 'dohko-settings-contact', 'dohko_cf_message' );
    register_setting( 'dohko-settings-appointment', 'dohko_appointment_message_p1' );
    register_setting( 'dohko-settings-appointment', 'dohko_appointment_message_p2' );
    register_setting( 'dohko-settings-appointment', 'dohko_appointment_message_p3' );
    register_setting( 'dohko-settings-appointment', 'dohko_appointment_message_p4' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p1' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p2' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p3' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p4' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p5' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p6' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p7' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p8' );
    register_setting( 'dohko-settings-about-us', 'dohko_mission' );
    register_setting( 'dohko-settings-about-us', 'dohko_vision' );
    register_setting( 'dohko-settings-home-about', 'dohko_msg_p1' );
    register_setting( 'dohko-settings-home-about', 'dohko_msg_p2' );
    register_setting( 'dohko-settings-home-about', 'dohko_msg_p3' );
    register_setting( 'dohko-settings-home-about', 'dohko_msg_p4' );
    register_setting( 'dohko-settings-products', 'dohko_cf_txt_msg_product' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t1' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t2' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t3' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t4' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t5' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t6' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t7' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t8' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t9' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t10' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t1_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t2_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t3_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t4_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t5_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t6_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t7_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t8_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t9_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_t10_a' );
    register_setting( 'dohko-settings-testimonials', 'dohko_video_testi' );
  }

  function dohko_header_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Header Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-header' ); ?>
        <div valign="top">
          <div scope="row">Logo:</th>
            <input type="file" name="dohko_logo" value="<?php print get_option('dohko_logo'); ?>" /><br/>
            *Upload using the Media Uploader and paste the URL here.
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

  function dohko_home_about_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Home About Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-home-about' ); ?>
        <div valign="top">
          <div scope="row">Description Text P1:</th>
            <textarea name="dohko_msg_p1" style="width:100%; height:100px;"><?php print get_option('dohko_msg_p1'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Description Text P2:</th>
            <textarea name="dohko_msg_p2" style="width:100%; height:100px;"><?php print get_option('dohko_msg_p2'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Description Text P3:</th>
            <textarea name="dohko_msg_p3" style="width:100%; height:100px;"><?php print get_option('dohko_msg_p3'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Description Text P4:</th>
            <textarea name="dohko_msg_p4" style="width:100%; height:100px;"><?php print get_option('dohko_msg_p4'); ?></textarea>
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

  function dohko_testimonials_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Testimonials Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-testimonials' ); ?>
        <div valign="top">
          <div scope="row">Testimonial 1:</th>
            <textarea name="dohko_t1" style="width:100%; height:100px;"><?php print get_option('dohko_t1'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 1:</th>
            <textarea name="dohko_t1_a" style="width:100%;"><?php print get_option('dohko_t1_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 2:</th>
            <textarea name="dohko_t2" style="width:100%; height:100px;"><?php print get_option('dohko_t2'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 2:</th>
            <textarea name="dohko_t2_a" style="width:100%;"><?php print get_option('dohko_t2_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 3:</th>
            <textarea name="dohko_t3" style="width:100%; height:100px;"><?php print get_option('dohko_t3'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 3:</th>
            <textarea name="dohko_t3_a" style="width:100%;"><?php print get_option('dohko_t3_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 4:</th>
            <textarea name="dohko_t4" style="width:100%; height:100px;"><?php print get_option('dohko_t4'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 4:</th>
            <textarea name="dohko_t4_a" style="width:100%;"><?php print get_option('dohko_t4_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 5:</th>
            <textarea name="dohko_t5" style="width:100%; height:100px;"><?php print get_option('dohko_t5'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 5:</th>
            <textarea name="dohko_t5_a" style="width:100%;"><?php print get_option('dohko_t5_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 6:</th>
            <textarea name="dohko_t6" style="width:100%; height:100px;"><?php print get_option('dohko_t6'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 6:</th>
            <textarea name="dohko_t6_a" style="width:100%;"><?php print get_option('dohko_t6_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 7:</th>
            <textarea name="dohko_t7" style="width:100%; height:100px;"><?php print get_option('dohko_t7'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 7:</th>
            <textarea name="dohko_t7_a" style="width:100%;"><?php print get_option('dohko_t7_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 8:</th>
            <textarea name="dohko_t8" style="width:100%; height:100px;"><?php print get_option('dohko_t8'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 8:</th>
            <textarea name="dohko_t8_a" style="width:100%;"><?php print get_option('dohko_t8_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 9:</th>
            <textarea name="dohko_t9" style="width:100%; height:100px;"><?php print get_option('dohko_t9'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 9:</th>
            <textarea name="dohko_t9_a" style="width:100%;"><?php print get_option('dohko_t9_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial 10:</th>
            <textarea name="dohko_t10" style="width:100%; height:100px;"><?php print get_option('dohko_t10'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Testimonial Author 10:</th>
            <textarea name="dohko_t10_a" style="width:100%;"><?php print get_option('dohko_t10_a'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Video Testimonial:</th>
              <input type="text" name="dohko_video_testi" style="width:100%;" value="<?php print get_option('dohko_video_testi'); ?>" />
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

  function dohko_appointment_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Appointment Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-appointment' ); ?>
        <div valign="top">
          <div scope="row">Appointment Text P1:</th>
            <textarea name="dohko_appointment_message_p1" style="width:100%; height:100px;"><?php print get_option('dohko_appointment_message_p1'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Appointment Text P2:</th>
            <textarea name="dohko_appointment_message_p2" style="width:100%; height:100px;"><?php print get_option('dohko_appointment_message_p2'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Appointment Text P3:</th>
            <textarea name="dohko_appointment_message_p3" style="width:100%; height:100px;"><?php print get_option('dohko_appointment_message_p3'); ?></textarea>
          </div>
        </div>
        <div valign="top">
          <div scope="row">Appointment Text P4:</th>
            <textarea name="dohko_appointment_message_p4" style="width:100%; height:100px;"><?php print get_option('dohko_appointment_message_p4'); ?></textarea>
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

   function dohko_product_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Product Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-products' ); ?>
        <div valign="top">
          <div scope="row">Contact Form Text Message:</th>
            <textarea name="dohko_cf_txt_msg_product" style="width:100%; height:100px;"><?php print get_option('dohko_cf_txt_msg_product'); ?></textarea>
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }



  function dohko_social_profile_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Theme Settings</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-social' ); ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Facebook Link:</th>
            <td>
              <input type="text" name="dohko_facebook" value="<?php print get_option('dohko_facebook'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Youtube Link:</th>
            <td>
              <input type="text" name="dohko_youtube" value="<?php print get_option('dohko_youtube'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Instagram Link:</th>
            <td>
              <input type="text" name="dohko_instagram" value="<?php print get_option('dohko_instagram'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Google+ Link:</th>
            <td>
              <input type="text" name="dohko_googleplus" value="<?php print get_option('dohko_googleplus'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Twitter Link:</th>
            <td>
              <input type="text" name="dohko_twitter" value="<?php print get_option('dohko_twitter'); ?>" />
            </td>
          </tr>
        </table>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

  function dohko_settings_page() {
  } 
  function dohko_health_coaching_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Health Coaching Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-health-coaching' ); ?>
        <table class="form-table">
          <tr>
            <th scope="row">Infographic:</th>
            <td>
              <textarea name="dohko_infographic" style="width:100%; height:100px;"><?php print get_option('dohko_infographic'); ?></textarea>
            </td>
          </tr> 
          <tr>
            <th scope="row">Video:</th>
            <td>
              <input type="text" name="dohko_video" value="<?php print get_option('dohko_video'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Que es Paragraph Nro 1:</th>
            <td>
              <textarea name="dohko_hc_what_p1" style="width:100%; height:100px;"><?php print get_option('dohko_hc_what_p1'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Que es Paragraph Nro 2:</th>
            <td>
              <textarea name="dohko_hc_what_p2" style="width:100%; height:100px;"><?php print get_option('dohko_hc_what_p2'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Que es Paragraph Nro 3:</th>
            <td>
              <textarea name="dohko_hc_what_p3" style="width:100%; height:100px;"><?php print get_option('dohko_hc_what_p3'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Que es Paragraph Nro 4:</th>
            <td>
              <textarea name="dohko_hc_what_p4" style="width:100%; height:100px;"><?php print get_option('dohko_hc_what_p4'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Trabaja Conmigo Paragraph Nro 1:</th>
            <td>
              <textarea name="dohko_hc_work_p1" style="width:100%; height:100px;"><?php print get_option('dohko_hc_work_p1'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Trabaja Conmigo Paragraph Nro 2:</th>
            <td>
              <textarea name="dohko_hc_work_p2" style="width:100%; height:100px;"><?php print get_option('dohko_hc_work_p2'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Trabaja Conmigo Paragraph Nro 3:</th>
            <td>
              <textarea name="dohko_hc_work_p3" style="width:100%; height:100px;"><?php print get_option('dohko_hc_work_p3'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Trabaja Conmigo Paragraph Nro 4:</th>
            <td>
              <textarea name="dohko_hc_work_p4" style="width:100%; height:100px;"><?php print get_option('dohko_hc_work_p4'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Health Coach Paragraph Nro 1:</th>
            <td>
              <textarea name="dohko_hc_become_p1" style="width:100%; height:100px;"><?php print get_option('dohko_hc_become_p1'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Health Coach Paragraph Nro 2:</th>
            <td>
              <textarea name="dohko_hc_become_p2" style="width:100%; height:100px;"><?php print get_option('dohko_hc_become_p2'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Health Coach Paragraph Nro 3:</th>
            <td>
              <textarea name="dohko_hc_become_p3" style="width:100%; height:100px;"><?php print get_option('dohko_hc_become_p3'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Health Coach Paragraph Nro 4:</th>
            <td>
              <textarea name="dohko_hc_become_p4" style="width:100%; height:100px;"><?php print get_option('dohko_hc_become_p4'); ?></textarea>
            </td>
          </tr> 
        </table>
         <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }
  function dohko_footer_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Footer Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-footer' ); ?>
        <table class="form-table">
          <tr>
            <th scope="row">Google Analytics Code:</th>
            <td>
              <textarea name="dohko_analytics"><?php print get_option('dohko_analytics'); ?></textarea>
            </td>
          </tr> 
          <tr>
            <th scope="row">Trademark Text:</th>
            <td>
              <textarea name="dohko_trademark_text"><?php print get_option('dohko_trademark_text'); ?></textarea>
            </td>
          </tr> 
        </table>
         <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    <div>
  <?php }
  function dohko_about_us_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko About Us Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-about-us' ); ?>
        <table class="form-table">
          <tr>
            <th scope="row">Bien Conmigo Paragraph Nro 1:</th>
            <td>
              <textarea name="dohko_about_p1" style="width:100%; height:100px;"><?php print get_option('dohko_about_p1'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Bien Conmigo Paragraph Nro 2:</th>
            <td>
              <textarea name="dohko_about_p2" style="width:100%; height:100px;"><?php print get_option('dohko_about_p2'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Bien Conmigo Paragraph Nro 3:</th>
            <td>
              <textarea name="dohko_about_p3" style="width:100%; height:100px;"><?php print get_option('dohko_about_p3'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Bien Conmigo Paragraph Nro 4:</th>
            <td>
              <textarea name="dohko_about_p4" style="width:100%; height:100px;"><?php print get_option('dohko_about_p4'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Astrid Paragraph Nro 1:</th>
            <td>
              <textarea name="dohko_about_p5" style="width:100%; height:100px;"><?php print get_option('dohko_about_p5'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Astrid Paragraph Nro 2:</th>
            <td>
              <textarea name="dohko_about_p6" style="width:100%; height:100px;"><?php print get_option('dohko_about_p6'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Astrid Paragraph Nro 3:</th>
            <td>
              <textarea name="dohko_about_p7" style="width:100%; height:100px;"><?php print get_option('dohko_about_p7'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Astrid Paragraph Nro 4:</th>
            <td>
              <textarea name="dohko_about_p8" style="width:100%; height:100px;"><?php print get_option('dohko_about_p8'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Mission:</th>
            <td>
              <textarea name="dohko_mission" style="width:100%; height:100px;"><?php print get_option('dohko_mission'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Vision:</th>
            <td>
              <textarea name="dohko_vision" style="width:100%; height:100px;"><?php print get_option('dohko_vision'); ?></textarea>
            </td>
          </tr>
        </table>
         <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    <div>
  <?php }
  function dohko_contact_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Contact Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-contact' ); ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Address Line 1:</th>
            <td>
              <input type="text" name="dohko_address_line_1" value="<?php print get_option('dohko_address_line_1'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Address Line 2:</th>
            <td>
              <input type="text" name="dohko_address_line_2" value="<?php print get_option('dohko_address_line_2'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Address Line 3:</th>
            <td>
              <input type="text" name="dohko_address_line_3" value="<?php print get_option('dohko_address_line_3'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Telephone:</th>
            <td>
              <input type="text" name="dohko_telephone" value="<?php print get_option('dohko_telephone'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Mobile:</th>
            <td>
              <input type="text" name="dohko_mobile" value="<?php print get_option('dohko_mobile'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Whatsapp:</th>
            <td>
              <input type="text" name="dohko_whatsapp" value="<?php print get_option('dohko_whatsapp'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Days 1:</th>
            <td>
              <input type="text" name="dohko_working_days_1" value="<?php print get_option('dohko_working_days_1'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Hours 1:</th>
            <td>
              <input type="text" name="dohko_working_hours_1" value="<?php print get_option('dohko_working_hours_1'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Days 2:</th>
            <td>
              <input type="text" name="dohko_working_days_2" value="<?php print get_option('dohko_working_days_2'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Hours 2:</th>
            <td>
              <input type="text" name="dohko_working_hours_2" value="<?php print get_option('dohko_working_hours_2'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Days 3:</th>
            <td>
              <input type="text" name="dohko_working_days_3" value="<?php print get_option('dohko_working_days_3'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Hours 3:</th>
            <td>
              <input type="text" name="dohko_working_hours_3" value="<?php print get_option('dohko_working_hours_3'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">e-mail:</th>
            <td>
              <input type="text" name="dohko_email" value="<?php print get_option('dohko_email'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Contact Form Mesaage:</th>
            <td>
              <textarea name="dohko_cf_message" style="width:100%; height:100px;"><?php print get_option('dohko_cf_message'); ?></textarea>
            </td>
          </tr> 
        </table>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
<?php }
?>