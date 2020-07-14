<?php
/**
 * Template Name:styelguide
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					
						
<article class="post-43 page type-page status-publish hentry" id="post-43">

	<header class="entry-header">

		<h1 class="entry-title">Styleguide</h1>
	</header><!-- .entry-header -->

	
	<div class="entry-content">

		<h1>H1 – Montserrat Bold/700 48px 50LH #3e3b3b</h1>
<h2>H2 – Montserrat Medium/500 40px 46LH Repair &amp; #3e3b3b</h2>
<h3>H3 – Montserrat Regular/400 36px 41LH #3e3b3b</h3>
<h4>H4 – Montserrat Bold/700 36px 41LH #FFFFFF</h4>
<h4 class="h4-alt">H4-alt – Montserrat Bold/700 36px 41LH #3e3b3b</h4>
<h5>H5 – Montserrat Light /300 24px 28LH #FFFFFF</h5>
<h5 class="h5-alt">H5-Alt – Montserrat Light /300 24px 28LH #3e3b3b</h5>
<h6>H6 – OPEN SANS REGULAR/400 20PX 30 LH #3E3B3B UPPERCASE</h6>
<p>Body –  Open Sans Regular/400 20px 30LH #3e3b3b</p>
<p class="p-alt">Body-alt –  Open Sans Regular/400 20px 30LH #FFFFFF</p>
<p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
<hr>
<p>Buttons – Montserrat Regular/400 15px 18LH #bf4122 &amp; #FFFFFF</p>
<p><button class="btn btn-warning">Send Request</button></p>
<p><button class="btn btn-primary">Learn More</button></p>
<p><button class="btn btn-secondary">Get Details</button></p>
<hr>
<ul>
<li>abcd</li>
<li>abcd</li>
<li>abcd</li>
<li>abcd</li>
</ul>
<ol>
<li>abcd</li>
<li>abcd</li>
<li>abcd</li>
<li>abcd</li>
</ol>

		
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<span class="edit-link"><a class="post-edit-link" href="https://bluecorona.fullstackondemand.com/bc-midwest/wp-admin/post.php?post=43&amp;action=edit">Edit</a></span>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

						
					
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div>

<?php get_footer(); ?>
