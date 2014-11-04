    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>public/js/modern-business.js"></script>
    
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
</body>

</html>