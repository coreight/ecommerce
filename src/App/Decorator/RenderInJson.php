<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 11:01
 */

namespace App\Decorator;


class RenderInJson extends AbstractDecorator
{


    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();

        return json_encode($output);
    }

}