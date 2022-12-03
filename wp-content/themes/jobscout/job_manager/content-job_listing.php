<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
$job_salary   = get_post_meta( get_the_ID(), '_job_salary', true );
$job_featured = get_post_meta( get_the_ID(), '_featured', true );
$company_name = get_post_meta( get_the_ID(), '_company_name', true );
$created_at = $post->post_date;
$job_overview = get_the_excerpt($post);


?>
<style>
	a {
    color: black;
    text-decoration: none;
    -webkit-transition: all ease 0.35s;
    -moz-transition: all ease 0.35s;
    transition: all ease 0.35s;
}
</style>
<article style="margin-right:21px"
 <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">

	<div class="header-infor" style="display:flex">
		<div class="logo">
			<figure class="company-logo" style="border: 1px solid gray;">
				<?php the_company_logo( 'thumbnail' ); ?>
			</figure>
		</div>
		<div class="infor-job" style="padding-left:20px">
			<h2 class="entry-title" style="text-transform: uppercase; font-size:17px">
				<a href="<?php the_job_permalink(); ?>"><?php wpjm_the_job_title(); ?></a>
			</h2>
			<div class="job-created-at" style="font-size: 13px;padding-top: 7px;padding-bottom: 3px;">
            	Created
            	<?php echo the_time('M d, Y',$created_at) ?>
        	</div>
			<div class="address-company" style="display:flex; background:#eee; font-size:13px; padding-top:3px;padding-bottom:3px;">
				<div class="category-job" style="padding-right:5px;padding-left:5px">
					<?php
						if ( get_option( 'job_manager_enable_types' ) ) {
							$types = wpjm_get_the_job_types();
							if ( ! empty( $types ) ) : foreach ( $types as $jobtype ) : ?>
								<div style="text-align:center;color:black !important" class=" <?php echo esc_attr( sanitize_title( $jobtype->slug ) ); ?>"><?php echo esc_html( $jobtype->name ); ?></div>
							<?php endforeach; endif;
						}
						do_action( 'job_listing_meta_end' );
					?>
				</div>
				|
				<div class="name-cp">
					<?php if( $company_name ){ ?>
					<div class="company-name" style="text-align:center;color:black;margin-top:0;padding-right:5px;padding-left:5px">
						<?php the_company_name(); ?>
					</div>
					<?php } ?>
				</div>
				|
				<div class="address">
					<div class="company-address" style="text-align:center;color:black;padding-right:5px;padding-left:5px">
					<?php the_job_location( true ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<?php if( $job_featured ){ ?>
		<div class="featured-label"><?php esc_html_e( 'Featured', 'jobscout' ); ?></div>
	<?php } ?>
    <div class="job-overview" style="padding-top:21px" >
		<ul style="margin-left: 0px;">
			<?php 
			$settings = explode('.', $job_overview);
			foreach($settings as $item){
				echo "<li>$item</li>";
			}
			?>
		</ul>
    </div>

</article>