# LaravelAddons
simple addons from my old framework

How to use:
```PHP
  <?php
  use Mafuth\LaravelAddons\html;

  include('vendor/autoload.php');

  $html = new html();
  echo $html->minify("Your html goes here");
  echo $html->encode("Your html goes here");
```
