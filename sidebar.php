<div id="sidebar"
<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div>