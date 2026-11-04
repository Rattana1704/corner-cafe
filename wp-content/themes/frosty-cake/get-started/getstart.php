<?php
/**
 * Admin functions.
 *
 * @package Frosty Cake
 */

define('FROSTY_CAKE_SUPPORT',__('https://wordpress.org/support/theme/frosty-cake/','frosty-cake'));
define('FROSTY_CAKE_REVIEW',__('https://wordpress.org/support/theme/frosty-cake/reviews/#new-post','frosty-cake'));
define('FROSTY_CAKE_DOC_URL',__('https://preview.wpradiant.net/tutorial/frosty-cake/','frosty-cake'));
define('FROSTY_CAKE_BUY_NOW',__('https://www.wpradiant.net/products/cake-wordpress-theme','frosty-cake'));
define('FROSTY_CAKE_LIVE_DEMO',__('https://preview.wpradiant.net/frosty-cake/','frosty-cake'));
define('FROSTY_CAKE_PRO_DOC',__('https://preview.wpradiant.net/tutorial/frosty-cake-pro/','frosty-cake'));


/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function frosty_cake_admin_menu_page() {

	$frosty_cake_theme = wp_get_theme( get_template() );

	add_theme_page(
		$frosty_cake_theme->display( 'Name' ),
		$frosty_cake_theme->display( 'Name' ),
		'manage_options',
		'frosty-cake',
		'frosty_cake_do_admin_page'
	);

}
add_action( 'admin_menu', 'frosty_cake_admin_menu_page' );

function frosty_cake_admin_theme_style() {
	wp_enqueue_style('frosty-cake-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
	wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'frosty_cake_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function frosty_cake_do_admin_page() {

	$frosty_cake_theme = wp_get_theme( get_template() );
	?>
	<div class="frosty-cake-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $frosty_cake_theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( FROSTY_CAKE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'frosty-cake' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( FROSTY_CAKE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'frosty-cake' ); ?></a>
				</span>
         <span>
					<a class="button btn-bundle" href="<?php echo esc_url( FROSTY_CAKE_BUY_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Buy Bundle', 'frosty-cake' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( FROSTY_CAKE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'frosty-cake' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $frosty_cake_theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
        <p>
			    <a class="button button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e( 'Visit Site', 'frosty-cake' ); ?></a>
			    <a class="button button-primary" id="form-button" href="<?php echo esc_url( 'https://forms.gle/RhBK4jcPYRm1z38N6' ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Free Theme Installation Support', 'frosty-cake' ); ?></a>
		    </p>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $frosty_cake_theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $frosty_cake_theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->

  <nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'frosty-cake' ); ?>">
    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'frosty-cake' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'frosty-cake' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'frosty-cake' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'frosty-cake', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'frosty-cake' ); ?></a>

    <a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'frosty-cake', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'frosty-cake' ); ?></a>
  </nav>

    <?php
      frosty_cake_main_screen();

      frosty_cake_changelog_screen();

      frosty_cake_free_vs_pro();
} 
/**
 * Output the main about screen.
 */
function frosty_cake_main_screen() {
  if ( isset( $_GET['page'] ) && 'frosty-cake' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
  ?>
    
<div class="four-col">

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Free Theme Directives', 'frosty-cake' ); ?></h3>

		<p>
			<?php esc_html_e( 'This article will walk you through the different phases of setting up and handling your WordPress website.', 'frosty-cake' ); ?>
		</p>

		<p>
			<a class="button green button-primary" href="<?php echo esc_url( FROSTY_CAKE_DOC_URL ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation', 'frosty-cake' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'frosty-cake' ); ?></h3>

		<p>
			<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'frosty-cake' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'frosty-cake' ); ?></a>
		</p>

	</div><!-- .col -->

	<div class="col">

		<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'frosty-cake' ); ?></h3>
		<p>
			<?php esc_html_e( 'We would love to hear your feedback.', 'frosty-cake' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( FROSTY_CAKE_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'frosty-cake' ); ?></a>
		</p>

	</div><!-- .col -->


	<div class="col">

		<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'frosty-cake' ); ?></h3>

		<p>
			<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'frosty-cake' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( FROSTY_CAKE_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'frosty-cake' ); ?></a>
		</p>

	</div><!-- .col -->
<div class="col">

		<h3><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Live Demo', 'frosty-cake' ); ?></h3>

		<p>
			<?php esc_html_e( 'Preview the live demo to explore the homepage, inner pages, and overall design flow before setup.', 'frosty-cake' ); ?>
		</p>

		<p>
			<a class="button button-primary" href="<?php echo esc_url( FROSTY_CAKE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Live Demo', 'frosty-cake' ); ?></a>
		</p>

	</div><!-- .col -->

	<?php $theme_slug = get_stylesheet(); ?>

	<div class="col">
			<h3>
				<i class="dashicons dashicons-admin-links"></i>
				<?php esc_html_e( 'Quick Link', 'frosty-cake' ); ?>
			</h3>

			<div class="frosty-cake-card-body">
				<div class="frosty-cake-card-btn-grp">

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//header&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Header', 'frosty-cake' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//footer&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Footer', 'frosty-cake' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . $theme_slug . '//sidebar&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Sidebar', 'frosty-cake' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'All Template Parts', 'frosty-cake' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . $theme_slug . '//front-page&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Frontpage', 'frosty-cake' ); ?>
					</a>

					<a class="button button-hero btn-col"
					   href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . $theme_slug . '//archive&canvas=edit' ) ); ?>"
					   target="_blank">
						<?php esc_html_e( 'Edit Archive Page', 'frosty-cake' ); ?>
					</a>         

				</div>
			</div>
	</div>
</div>
</div><!-- .four-col -->
  <?php
  }
}

/**
 * Output the changelog screen.
 */
function frosty_cake_changelog_screen() {
  if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
    global $wp_filesystem;
    ?>
    <div class="wrap about-wrap">
      <p class="about-description"><?php esc_html_e( 'Want to know whats been happening with the latest changes?', 'frosty-cake' ); ?></p>
      <?php
        // Get the path to the readme.txt file.
        $readme_file = get_template_directory() . '/README.txt';

        // Check if the readme file exists and is readable.
        if ( file_exists( $readme_file ) && is_readable( $readme_file ) ) {
          $changelog = file_get_contents( $readme_file );
          $changelog_list = frosty_cake_parse_changelog( $changelog );
          echo wp_kses_post( $changelog_list );
        } else {
          echo '<p>Changelog file does not exist or is not readable.</p>';
        }
      ?>
    </div>
    <?php
  }
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function frosty_cake_parse_changelog( $content ) {
  // Explode content with '== ' to separate main content into an array of headings.
  $content = explode( '== ', $content );

  $changelog_isolated = '';

  // Find the part that starts with 'Changelog ==', i.e., isolate changelog.
  foreach ( $content as $key => $value ) {
    if ( strpos( $value, 'Changelog ==' ) === 0 ) {
      $changelog_isolated = str_replace( 'Changelog ==', '', $value );
    }
  }

  // Explode $changelog_isolated to manipulate it and add HTML elements.
  $changelog_array = explode( '- ', $changelog_isolated );

  // Prepare the HTML structure.
  $changelog = '<pre class="changelog">';
  foreach ( $changelog_array as $value ) {
    // Add opening and closing div and span, only the first span element will have the heading class.
    $value = '<div class="block"><span class="heading">- ' . esc_html( $value ) . '</span></div>';
    // Append the value to the changelog.
    $changelog .= $value;
  }
  $changelog .= '</pre>';

  return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function frosty_cake_free_vs_pro() {
  if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
  ?>
    <div class="wrap about-wrap">

      <h3 class="about-description"><?php esc_html_e( 'Compare Free Vs Pro', 'frosty-cake' ); ?></h3>
      <div class="vs-theme-table">
        <table>
          <thead>
            <tr><th class="head" scope="col"><?php esc_html_e( 'Theme Features', 'frosty-cake' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'frosty-cake' ); ?></th>
              <th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'frosty-cake' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><span><?php esc_html_e( 'Responsive Design', 'frosty-cake' ); ?></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Painless Setup', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Color Options', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-saved"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium site demo', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Block Layout', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Premium Patterns', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Multiple Fonts', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Slider Block', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Listing Block', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Filter Block', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Gallery Block', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td headers="features" class="feature"><?php esc_html_e( 'Post Carousel Block', 'frosty-cake' ); ?></td>
              <td><span class="dashicons dashicons-no-alt"></span></td>
              <td><span class="dashicons dashicons-saved"></span></td>
            </tr>
            <tr class="odd" scope="row">
              <td class="feature feature--empty"></td>
              <td class="feature feature--empty"></td>
              <td headers="comp-2" class="td-btn-2"><a target="_blank" href="<?php echo esc_url( FROSTY_CAKE_BUY_NOW ); ?>" class="sidebar-button single-btn" target="_blank"><?php esc_html_e( 'Buy It Now', 'frosty-cake' ); ?></a>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  <?php
  }
}