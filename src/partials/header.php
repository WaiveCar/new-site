<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/images/favicon/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="/images/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/images/favicon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/images/favicon/manifest.json">
  <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#021207">
  <link rel="shortcut icon" href="/images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#021207">
  <meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#021207">
  <meta name="apple-mobile-web-app-title" content="Waive">
  <meta name="author" content="Waive">
  <meta name="description" content="The free electric car sharing program. Join the Waive!" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@WaiveCar" />
  <meta name="twitter:title" content="We Waive the Fee, You Drive for Free!" />
  <meta name="twitter:description" content="The free electric car sharing program. Join the Waive!" />
  <meta name="twitter:image:src" content="https://waivecar.com/images/site/twit-image.jpg" />
  <meta name="twitter:site" content="@WaiveCar" />
  <meta name="twitter:url" content="https://waivecar.com" />
  <meta name="twitter:app:name:iphone" content="WaiveCar" />
  <meta name="twitter:app:id:iphone" content="1051144802" />
  <meta name="twitter:app:name:googleplay" content="WaiveCar" />
  <meta name="twitter:app:id:googleplay" content="com.waivecardrive.app" />
  <meta property="og:title" content="We Waive the Fee, You Drive for Free!" />
  <meta property="og:description" content="The free electric car sharing program. Join the Waive!" />
  <meta property="og:image" content="https://waivecar.com/images/site/fb-image.jpg" />
  <meta property="og:site_name" content="Waive" />
  <meta property="og:type" content="product" />
  <meta property="og:url" content="https://waivecar.com" />
  <meta property="fb:app_id" content="1022704731082512" />
  
<? if (isset($PAGEFULLTITLE)) { ?>
  <title><?= $PAGEFULLTITLE ?></title>
<? } else { ?>
  <title><?= $PAGETITLE ?> | Waive</title>
<? } ?>
  <link rel="stylesheet" href="css/styles.css">
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
  <div class="page-wrapper page-wrapper--no-download">
    <header class="header">
      <div class="header__wrapper header__wrapper--inner">
        
        <a class="h-logo" title='WaveCar' href="index.html">
          <svg title="WaveCar" class="h-logo__icon">
            <use xlink:href="#logo"></use>
          </svg>
        </a>
        
        <nav class="h-menu">
        <?
          $header = [
            [ 'index.html', 'Waive Work' ],
            [ 'waive-car.html', 'Waive Car' ],
            [ "how-it-works.html", 'How it Works' ],
            [ "faq", 'FAQ' ],
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
          <a class="h-menu__login" href="https://lb.waivecar.com/login">Login</a>
        </nav>
  
        <button class="h-hamburger" id="hamburger" type="button" aria-label="Open menu">
          <svg class="h-hamburger__icon">
            <use xlink:href="#icon-hamburger"></use>
          </svg>
        </button>
      
      </div>
    </header>
