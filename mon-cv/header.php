<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo ('title'); ?> </title>

    <?php wp_head (); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?> /assets/css/main.css">

</head>
<body <?php body_class (); ?> >
    
