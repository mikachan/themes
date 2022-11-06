<?php
/**
 * Title: Footer
 * Slug: kaze/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
		<!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">
        <?php
            /* Translators: Theme name. */
            $theme_name = '<strong>' . esc_html__( 'Kaze', 'kaze' ) . '</strong>';
            /* Translators: WordPress link. */
            $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'kaze' ) ) . '" rel="nofollow">WordPress</a>';
            $tailwind_link = 'and <a href="' . esc_url( __( 'https://tailwindcss.com', 'kaze' ) ) . '" rel="nofollow">TailwindCSS</a>';
            
            printf(
                esc_html__( '%1$s: Designed with %2$s %3$s', 'kaze' ),
                $theme_name,
                $wordpress_link,
                $tailwind_link
            );
        ?>
        </p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
