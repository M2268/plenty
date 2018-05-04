<?php

namespace  plentyTest\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class TestController extends Controller{
    public function test(Twig $twig):string{
        return $twig->render('plentyTest::content/test');
    }
}