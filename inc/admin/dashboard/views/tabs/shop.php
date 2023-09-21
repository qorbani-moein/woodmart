<div class="woodmart-main-import-area woodmart-row woodmart-two-columns <?php echo esc_attr( WOODMART_Registry()->import->get_imported_versions_css_classes() ); ?>">
	<div class="woodmart-column import-shop-options">
		<div class="woodmart-column-inner">
			<div class="wd-box">
				<div class="woodmart-box-header">
					<h2>گزینه های صفحه فروشگاه</h2>
					<span class="woodmart-box-label woodmart-label-success"><?php esc_html_e('Optional', 'woodmart'); ?></span>
				</div>
				<div class="woodmart-box-content">
					<?php WOODMART_Registry()->import->shops_import_screen(); ?>
				</div>
				<div class="woodmart-box-footer">
					<p>Set up <strong>صفحه فروشگاه</strong> نمونه تنظیمات از نسخه ی نمایشی ما. این ممکن است جایگزین برخی از تنظیمات قالب شما شود.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="woodmart-column import-single-products">
		<div class="woodmart-column-inner">
			<div class="wd-box">
				<div class="woodmart-box-header">
					<h2>صفحه آرایی محصولات تکی</h2>
					<span class="woodmart-box-label woodmart-label-success"><?php esc_html_e('Optional', 'woodmart'); ?></span>
				</div>
				<div class="woodmart-box-content">
					<?php WOODMART_Registry()->import->products_import_screen(); ?>
				</div>
				<div class="woodmart-box-footer">
					<p>برپایی<strong>صفحه محصول</strong> نمونه تنظیمات از نسخه ی نمایشی ما. این ممکن است جایگزین برخی از تنظیمات قالب شما شود.</p>
				</div>
			</div>
		</div>
	</div>
</div>