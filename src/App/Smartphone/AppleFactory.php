<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 09:41
 */

namespace App\Smartphone;


class AppleFactory extends AbstractFactoryMethod
{

    public function createSmartphone($coque, $color, $capacity, $weight)
    {
        switch($capacity) {
            case 16:
                return new Iphone4S ($coque, $color, $capacity, $weight);
                break;
            case 32:
                return new Iphone5S ($coque, $color, $capacity, $weight);
                break;
            default:
                throw new \Exception("Capacité impossible");
                break;
        }
    }

}