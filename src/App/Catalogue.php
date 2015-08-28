<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 26/08/15
 * Time: 11:52
 */

namespace App;

/**
 * Classe abstraite, ne pourra pas créer d'objet
 * Class Catalogue
 * @package App
 */
abstract class Catalogue
{
    /**
     * @var
     */
    protected $name;
    protected $marque;
    protected $ndd;

    /* #################### SETTERS & GETTERS #################### */

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getNdd()
    {
        return $this->ndd;
    }

    /**
     * @param mixed $ndd
     */
    public function setNdd($ndd)
    {
        $this->ndd = $ndd;
    }

    /* #################### METHODES #################### */

    public abstract function __toString();


}
