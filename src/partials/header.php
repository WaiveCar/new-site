<!doctype html>
<html lang="en">
<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Title -->
  <title><?= $PAGETITLE ?> | WaiveCar</title>
  
  <!-- Styles -->
  <link rel="stylesheet" href="css/styles.css">
  
  <!-- SVG sprite loading -->
  <script>
    var ajax = new XMLHttpRequest();

    ajax.open('GET', 'img/sprites.svg', true);

    ajax.send();

    ajax.onload = function(e) {

      var div = document.createElement('div');

      div.innerHTML = ajax.responseText;

      document.body.insertBefore(div, document.body.childNodes[0]);

    };
  </script>
</head>

<body>
  
  <!-- Wrapper for "Sticky footer" -->
  <div class="page-wrapper page-wrapper--no-download">
    
    <!-- ==========================
      HEADER
    =========================== -->
    <header class="header">
      <div class="header__wrapper header__wrapper--inner">
        
        <!-- Logo -->
        <a class="h-logo" href="index.html">
          <svg class="h-logo__icon">
            <use xlink:href="#logo"></use>
          </svg>
        </a>
        
        <!-- Menu -->
        <nav class="h-menu">
        <?
          $header = [
            [ 'waive-work.html', 'Waive Work' ],
            [ "how-it-works.html", 'How it Works' ],
            [ "faq.html", 'FAQ' ],
            [ 'about.html', 'About us' ]
          ];
          foreach($header as $row) {
            list($path, $text) = $row;
            if ($PAGETITLE === $text) {
              $class = "h-menu__item h-menu__item--active";
              $href = "#";
            } else {
              $class = "h-menu__item";
              $href = $path;
            }

            ?>  
            <span class="<?= $class ?>">
              <a class="h-menu__link" href="<?= $href ?>"><?= $text ?></a>
            </span>
          <? } ?>
          <a class="h-menu__login" href="https://www.waivecar.com/login">Login</a>
        </nav>
  
        <!-- Hamburger -->
        <button class="h-hamburger" id="hamburger" type="button" aria-label="Open menu">
          <svg class="h-hamburger__icon">
            <use xlink:href="#icon-hamburger"></use>
          </svg>
        </button>
      
      </div>
    </header>
