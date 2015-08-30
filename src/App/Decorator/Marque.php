<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 12:11
 */

namespace App\Decorator;


class Marque implements RendererInterface

{
    protected $title;


    public function __construct($title)
    {
        $this->title = $title;

    }


    public function renderProduct() {

        return array($this->title);
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }



}