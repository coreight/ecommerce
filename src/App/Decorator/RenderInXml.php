<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 11:01
 */

namespace App\Decorator;


class RenderInXml extends AbstractDecorator
{
    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();

        // do some fancy conversion to xml from array ...

        $doc = new \DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }

}