<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 09:38
 */

namespace App\Smartphone;


interface SmartphoneInterface
{
    public function setColor($color);
    public function setCapacity($capacity);
    public function setWeight($weight);
}