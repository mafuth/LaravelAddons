<?php
use Mafuth\LaravelAddons\html;

include('vendor/autoload.php');

$html = new html();
echo $html->minify();
echo $html->encode();