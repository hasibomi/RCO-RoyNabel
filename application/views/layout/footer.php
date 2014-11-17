
    <div class="jumbotron footer-jumbotron">
        <div class="container">
            <ul class="footer">
                <li class="first"><a href="<?= site_url('home/contact')?>">Contact Us</a></li>
                <li><a href="<?= site_url('home/support'); ?>">Support</a></li>
                <li class="copy">Copy right &copy; 2014 RCO</li>
            </ul>
        </div>
    </div> <!-- /.jumbotron -->

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