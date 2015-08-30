<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 11:01
 */

namespace App\Decorator;


class RenderInBootstrapIcon extends AbstractDecorator
{

    public function renderProduct()
    {

    }


    public function bootstrap()
    {
        $output = $this->wrapped->renderProduct();
        foreach($output as $item) {
            return '<p><span class="glyphicon  glyphicon-asterisk" aria-hidden="true"></span> ' . $item.'</p>';
        }
    }


}