		</div>
		<?php if ( getFlash("success") != null ): ?>
			<script>
				noty({
					text: '<?php echo getFlash("success") ?>',
					layout: 'center',
					type: 'success',
					modal: true
				})
			</script>
			<?php unsetFlash() ?>
		<?php endif ?>
	</body>
</html>