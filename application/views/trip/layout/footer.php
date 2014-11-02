    <!-- JavaScript -->
    <script src="<?= base_url(); ?>public/js/jquery-1.10.2.js"></script>
    <script src="<?= base_url(); ?>public/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>public/js/modern-business.js"></script>
    
    <!-- Fancybox JS -->
    <script src="<?= base_url(); ?>public/js/jquery.fancybox.js" type="text/javascript"></script>
    
    <script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox-thumb").fancybox({
				prevEffect	: 'none',
				nextEffect	: 'none',
				helpers	: {
					thumbs	: {
						width	: 50,
						height	: 50
					}
				}
			});
		});
	</script>
    
</body>

</html>