<?php
/**
 * Activation template.
 *
 * @package woodmart
 */

?>

<div class="xts-wizard-content-inner">
	<?php WOODMART_Registry()->license->form(); ?>

	<p class="xts-wizard-note">
		<?php
		echo wp_kses(
			'<strong>نکته :</strong> برای دریافت نسخه جدید قالب وودمارت به سایت <a href="https://learndl.ir/woodmart-themes/" target="_blank">لرن دی ال</a> مراجعه کنید.',
			woodmart_get_allowed_html()
		);
		?>
	</p>
</div>

<div class="xts-wizard-footer">
	<?php $this->get_prev_button( 'welcome' ); ?>

	<div>
		<?php if ( woodmart_is_license_activated() ) : ?>
			<?php $this->get_next_button( 'child-theme' ); ?>
		<?php else : ?>
			<?php $this->get_skip_button( 'child-theme' ); ?>
		<?php endif; ?>
	</div>
</div>