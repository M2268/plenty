<?php

namespace plentyTest\Providers;
use Plenty\Plugin\ServiceProvider;

class plentyTestServiceProvider extends ServiceProvider{

    public function  register(){
        $this->getAplication()->register(plentyTestServiceProvider::class);
    }
}