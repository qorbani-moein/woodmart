<div class="woodmart-row woodmart-one-column">
	<div class="woodmart-column woodmart-stretch-column">
		<div class="woodmart-column-inner">
			<div class="wd-box xts-dashboard">
				<div class="woodmart-box-header">
					<h2>مجوز قالب فعال شده است</h2>
					<span class="woodmart-box-label <?php if ( woodmart_is_license_activated() ): ?>woodmart-label-success<?php else: ?>woodmart-label-warning<?php endif; ?>">
						<?php if ( woodmart_is_license_activated() ): ?>
							<?php esc_html_e('Activated', 'woodmart'); ?>
						<?php else: ?>
							<?php esc_html_e('Optional', 'woodmart'); ?>
						<?php endif ?>
					</span>
				</div>
				<div class="woodmart-box-content">
					<?php WOODMART_Registry()->license->form(); ?>
				</div>
				<?php if ( ! woodmart_get_opt( 'white_label' ) ) : ?>
					<div class="woodmart-box-footer">
						<p>
							<strong> نکته : </strong>این قالب توسط سایت لرن دی ال تهیه و بومی سازی شده است.<br/>
							اگر قالب وودمارت را از سایتی غیر از سایت لرن دی ال تهیه کرده باشید،به صورت غیرقانونی به دست شما رسیده است..<br>
							لطفا به وب سایت <a href="http://unko.ir/0mdKP" target="_blank">لرن دی ال</a> مراجعه کنید و این مورد را گزارش کنید.
						</p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>