<?php
$menu = '';
$products = '';
$support = '';
$contact = '';
$cart = '';

if ($this->uri->uri_string() == 'home') {
    $menu = 'active';
} else if ($this->uri->uri_string() == 'member/home/products') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'member/home/support') {
    $support = 'active';
} else if ($this->uri->uri_string() == 'member/home/contact') {
    $contact = 'active';
} else if ($this->uri->uri_string() == 'member/home/mobileoffice') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'member/home/csveditor') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'member/home/label') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'member/home/scan') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'member/home/publish') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'member/home/cart') {
    $cart = 'active';
}
?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('member/'); ?>">RCO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <form target="paypal" class="navbar-right" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="royn@rco.com">
                    <input type="hidden" name="display" value="1">
                    <input type="image" class="navbar-btn btn" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
                
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo $products; ?>"><a href="<?php echo site_url('member/home/products'); ?>">Products</a>
                    </li>
                    <li class="<?php echo $support; ?>"><a href="<?php echo site_url('member/home/support'); ?>">Support</a>
                    </li>
                    <li class="<?php echo $contact; ?>"><a href="<?php echo site_url('member/home/contact'); ?>">Contact</a>
                    </li>
                    <li><a href="<?php echo site_url('member/home/logout') ?>">Logout</a></li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>