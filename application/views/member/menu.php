<?php
$menu = '';
$products = '';
$support = '';
$contact = '';
if ($this->uri->uri_string() == 'home') {
    $menu = 'active';
} else if ($this->uri->uri_string() == 'home/products') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'home/support') {
    $support = 'active';
} else if ($this->uri->uri_string() == 'home/contact') {
    $contact = 'active';
} else if ($this->uri->uri_string() == 'home/mobileoffice') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'home/csveditor') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'home/label') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'home/scan') {
    $products = 'active';
} else if ($this->uri->uri_string() == 'home/publish') {
    $products = 'active';
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
                <a class="navbar-brand" href="<?php echo site_url('home/'); ?>">RCO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo $products; ?>"><a href="<?php echo site_url('home/products'); ?>">Products</a>
                    </li>
                    <li class="<?php echo $support; ?>"><a href="<?php echo site_url('home/support'); ?>">Support</a>
                    </li>
                    <li class="<?php echo $contact; ?>"><a href="<?php echo site_url('home/contact'); ?>">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login/login_page'); ?>">Login</a>
                    </li>
                    <li><a href="<?php echo site_url('login/register'); ?>">Register</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>