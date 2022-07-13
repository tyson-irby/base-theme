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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <?php wp_head(); ?>

</head>
