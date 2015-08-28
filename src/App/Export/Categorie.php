<?php


namespace App\Export;

use App\Export\VenteInterface;

abstract class Categorie implements VenteInterface
{
    protected $title;
    protected $description;
    protected $visible;
    /**
     * Constructor
     * @param $title
     */
    public function __construct($title = "", $description){
        $this->title = $title;
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return mixed
     */
    public function getVisible()
    {
        return $this->visible;
    }
    /**
     * @param mixed $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }
}