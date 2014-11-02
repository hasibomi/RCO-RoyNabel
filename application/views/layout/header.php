<?php
$title = 'RCO';
if ($this->uri->uri_string() == 'home') {
    $title = 'RCO';
} else if ($this->uri->uri_string() == '') {
    $tilte = 'RCO';
} else if ($this->uri->uri_string() == 'home/products') {
    $title = 'Products | RCO';
} else if ($this->uri->uri_string() == 'home/support') {
    $title = 'Support | RCO';
} else if ($this->uri->uri_string() == 'home/mobileoffice') {
    $title = 'Mobile Office | RCO > Products';
} else if ($this->uri->uri_string() == 'home/csveditor') {
    $title = 'CSV Editor | RCO > Products';
} else if ($this->uri->uri_string() == 'home/label') {
    $title = 'Labels | RCO > Products';
} else if ($this->uri->uri_string() == 'home/scan') {
    $title = 'Scan | RCO > Products';
} else if ($this->uri->uri_string() == 'home/publish') {
    $title = 'Publish | RCO > Products';
} else if ($this->uri->uri_string() == 'home/contact') {
    $title = 'Contact | RCO';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.css" rel="stylesheet">
    
    <!-- Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/jquery.fancybox.css">

    <!-- Icon for title-->
    <link rel="icon" href="<?php echo base_url(); ?>public/images/icon.png" type="image/png">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url(); ?>public/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>