<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage betinhouston
 */

get_header();
?>
  <secton class="login_custom" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="custom_frm">
            <?php echo do_shortcode('[contact-form-7 id="8" title="Enquiry Form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </secton>
<?php
get_footer();
