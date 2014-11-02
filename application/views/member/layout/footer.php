	<div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; RCO 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>public/js/modern-business.js"></script>
    
    <!-- Custom JS -->
    <script src="<?= base_url(); ?>public/js/delete_cart.js"></script>
    <script src="<?php echo base_url(); ?>public/js/cart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/settings.js"></script>
    
    <!-- Fancybox JS -->
    <script src="<?php echo base_url(); ?>public/js/jquery.fancybox.js" type="text/javascript"></script>
    
    <script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				'transitionIn' : 'elastic',
				'transitionOut' : 'elastic',
				'width' : '70%',
				'height' : '70%',						
				helpers :  {   
					media: {}
		        }
			});
		});
	</script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#submit").click( function(e) {
            if ($("#amount").val() == "") {
                e.preventDefault();
                alert('Invalid');
            }
        });
    });
    </script>    
</body>

</html>