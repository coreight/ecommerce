<?php

namespace App\Builder;

use App\Builder\BuilderInterface;

class Manager
{

    public function build(BuilderInterface $builder) {

        $builder->createProduct();
        $builder->enable();
        $builder->addCategorie();
        $builder->addImages();

        return $builder->getProduct();


    }



}