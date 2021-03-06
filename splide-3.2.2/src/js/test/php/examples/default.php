<?php
require_once '../parts.php';
require_once '../settings.php';

$settings = get_settings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Default</title>

  <link rel="stylesheet" href="../../../../../dist/css/themes/splide-<?php echo $settings['theme'] ?>.min.css">
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <script type="text/javascript" src="../../../../../dist/js/splide.js"></script>

  <script>
    document.addEventListener( 'DOMContentLoaded', function () {
      var splide = new Splide( '#splide01', {
        type   : 'slide',
        perPage: 3,
        perMove: 2,
        rewind: true,
        padding: {
          right: 0,
          left: 40,
        },
        noDrag: 'button',
        breakpoints: {
          1000: {
            destroy: true,
          },
        },
      } );

      splide.on( 'moved', () => {
        console.log( 'moved' );
      } );

      splide.on( 'visible', Slide => {
        console.log( 'visible', Slide.index );
      } );

      splide.on( 'hidden', Slide => {
        console.log( 'hidden', Slide.index );
      } );

      splide.on( 'click', () => {
        console.log( 'click' );
      } );

      splide.mount();
    } );
  </script>

  <style>
    body {
      margin: 50em 0;
    }
  </style>
</head>
<body>

<?php render(); ?>

<pre></pre>

</body>
</html>
