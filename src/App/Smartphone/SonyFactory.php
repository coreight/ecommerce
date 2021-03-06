<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 09:41
 */

namespace App\Smartphone;


class SonyFactory extends AbstractFactoryMethod
{

    public function createSmartphone($coque, $color, $capacity, $weight)
    {
        switch($capacity) {
            case 16:
                return new XperiaZ2($coque, $color, $capacity, $weight);
                break;
            case 32:
                return new XperiaZ3($coque, $color, $capacity, $weight);
                break;
            default:
                throw new \Exception("Capacité impossible");
                break;
        }
    }

}