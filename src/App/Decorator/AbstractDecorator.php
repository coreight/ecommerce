<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 11:00
 */

namespace App\Decorator;


abstract class AbstractDecorator implements RendererInterface
{
    protected $wrapped;

    public function __construct(RendererInterface $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    /**
     * @return RendererInterface
     */
    public function getWrapped()
    {
        return $this->wrapped;
    }

    /**
     * @param RendererInterface $wrapped
     */
    public function setWrapped($wrapped)
    {
        $this->wrapped = $wrapped;
    }




}