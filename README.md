# LaravelAddons
simple addons from my old framework

## How to install
```sh
composer require mafuth/laravel-addons
```

## How to use:
```PHP
  <?php
  use Mafuth\LaravelAddons\html;

  include('vendor/autoload.php');

  $html = new html();
  echo $html->minify("Your html goes here");
  echo $html->encode("Your html goes here");
```

```php
  <?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Mafuth\LaravelAddons\html;

  class testController extends Controller
  {
      public function index(){
          $html = new html();
          return $html->minify(view('index'));
      }
  }

```
