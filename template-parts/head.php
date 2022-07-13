<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>
    <?php wp_title(''); ?>
  </title>
  <?= get_template_part('template-parts/favicon');  ?>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <script>
    document.getElementsByTagName("html")[0].className += " js";
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5b704d19ed.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>

</head>