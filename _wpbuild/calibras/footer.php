<?php
/**
 * Shared footer
 */
$base = get_template_directory_uri() . '/assets/images/';
?>
	<!-- ===== FOOTER ===== -->
	<footer class="site-footer">
		<div class="container footer-grid">
			<div class="footer-brand">
				<img src="<?php echo esc_url( $base ); ?>home/footer_logo.jpg" alt="Calibras" class="footer-logo" />
				<p>Manufacturing AI — built in Europe. Sovereign tech stack, on-premise
					option, and a data model made by manufacturers, for manufacturers.</p>
				<div class="socials">
					<a href="#" aria-label="X"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.66l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
					<a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 0 1-1.38-.9 3.7 3.7 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zm0 1.62c-3.15 0-3.5.01-4.74.07-1.14.05-1.76.24-2.17.4-.55.21-.94.47-1.35.88-.41.41-.67.8-.88 1.35-.16.41-.35 1.03-.4 2.17-.06 1.24-.07 1.59-.07 4.74s.01 3.5.07 4.74c.05 1.14.24 1.76.4 2.17.21.55.47.94.88 1.35.41.41.8.67 1.35.88.41.16 1.03.35 2.17.4 1.24.06 1.59.07 4.74.07s3.5-.01 4.74-.07c1.14-.05 1.76-.24 2.17-.4.55-.21.94-.47 1.35-.88.41-.41.67-.8.88-1.35.16-.41.35-1.03.4-2.17.06-1.24.07-1.59.07-4.74s-.01-3.5-.07-4.74c-.05-1.14-.24-1.76-.4-2.17a3.6 3.6 0 0 0-.88-1.35 3.6 3.6 0 0 0-1.35-.88c-.41-.16-1.03-.35-2.17-.4-1.24-.06-1.59-.07-4.74-.07zm0 2.76a5.3 5.3 0 1 1 0 10.6 5.3 5.3 0 0 1 0-10.6zm0 1.62a3.68 3.68 0 1 0 0 7.36 3.68 3.68 0 0 0 0-7.36zm5.5-1.18a1.24 1.24 0 1 1-2.48 0 1.24 1.24 0 0 1 2.48 0z"/></svg></a>
					<a href="#" aria-label="Discord"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.37a19.8 19.8 0 0 0-4.885-1.515.07.07 0 0 0-.078.035c-.21.375-.444.864-.608 1.25a18.3 18.3 0 0 0-5.487 0 12.6 12.6 0 0 0-.617-1.25.07.07 0 0 0-.078-.035A19.7 19.7 0 0 0 3.677 4.37a.06.06 0 0 0-.03.025C.533 9.046-.32 13.58.099 18.057a.08.08 0 0 0 .031.054 19.9 19.9 0 0 0 5.993 3.03.08.08 0 0 0 .084-.028c.462-.63.873-1.295 1.226-1.994a.076.076 0 0 0-.041-.106 13.1 13.1 0 0 1-1.872-.892.077.077 0 0 1-.008-.128c.126-.094.252-.192.372-.291a.07.07 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.061 0a.07.07 0 0 1 .078.009c.12.099.246.198.373.292a.077.077 0 0 1-.006.127c-.598.349-1.22.645-1.873.891a.076.076 0 0 0-.04.107c.36.698.772 1.362 1.225 1.993a.077.077 0 0 0 .084.028 19.8 19.8 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.06.06 0 0 0-.031-.025zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.42 0-1.333.955-2.42 2.157-2.42 1.21 0 2.176 1.096 2.157 2.42 0 1.335-.955 2.42-2.157 2.42zm7.975 0c-1.183 0-2.157-1.085-2.157-2.42 0-1.333.955-2.42 2.157-2.42 1.21 0 2.176 1.096 2.157 2.42 0 1.335-.946 2.42-2.157 2.42z"/></svg></a>
					<a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.02 3.02 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.02 3.02 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.02 3.02 0 0 0 2.121 2.136c1.872.505 9.377.505 9.377.505s7.505 0 9.377-.505a3.02 3.02 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.546 15.568V8.432L15.818 12z"/></svg></a>
				</div>
			</div>
			<div class="footer-watermark-col">
				<img src="<?php echo esc_url( $base ); ?>home/footer.jpg" alt="Calibras CAD" class="footer-watermark" />
			</div>
			<div class="footer-col">
				<h4><i class="sq"></i> Product</h4>
				<a href="<?php echo esc_url( home_url( '/elector/' ) ); ?>">Elector Platform</a>
				<a href="#">Demo Access</a>
				<a href="#">Pricing Review</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Book Now</a>
				<a href="#">Privacy Note</a>
			</div>
			<div class="footer-col">
				<h4><i class="sq"></i> Company</h4>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a>
				<a href="<?php echo esc_url( home_url( '/elector/' ) ); ?>">Elector</a>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<span>Manufacturing AI built in Europe © <?php echo esc_html( date( 'Y' ) ); ?> Calibras. All rights reserved.</span>
			</div>
		</div>
	</footer>

</div><!-- .page -->
<?php wp_footer(); ?>
</body>
</html>
