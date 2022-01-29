<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/style.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css?<?= time(); ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title><?= !$this->uri->segment(1) ? '' : ucwords(str_replace('-', ' ', $this->uri->segment(1))) . ' |'; ?> UC LAB</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">