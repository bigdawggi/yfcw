	<div id="footer" class="row">
		<div class="col-sm-12">
			<div id="copyright">
			<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.'), '&copy;', date('Y'), esc_html(get_bloginfo('name')) ); ?>
			</div>
		</div><!-- /col -->
	</div><!-- #footer -->

</div> <!-- / end site wrapper -->

<?php if(is_production()) { ?>
<script src="<?php echo _s_revved_asset('js/vendor.min.js'); ?>"></script>
<script src="<?php echo _s_revved_asset('js/application.min.js'); ?>"></script>
<?php } else { ?>
<script src="<?php echo _s_revved_asset('js/vendor.js'); ?>"></script>
<script src="<?php echo _s_revved_asset('js/application.js'); ?>"></script>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>