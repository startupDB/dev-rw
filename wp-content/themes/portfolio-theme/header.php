<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon/apple-touch-icon-152x152.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png">
        <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Materialize core CSS -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/materialize.css" rel="stylesheet" type="text/css">
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="grey">
