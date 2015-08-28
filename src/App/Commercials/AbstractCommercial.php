<?php

namespace App\Commercials;


class AbstractCommercial
{
    protected $nom;
    protected $etat;
    protected $criticite;
    protected $dateFin;
    protected $natureReduc;
    protected $montantReduc;
    protected $dateActivation;

    /* #################### SETTERS & GETTERS #################### */

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getCriticite()
    {
        return $this->criticite;
    }

    /**
     * @param mixed $criticite
     */
    public function setCriticite($criticite)
    {
        $this->criticite = $criticite;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getNatureReduc()
    {
        return $this->natureReduc;
    }

    /**
     * @param mixed $natureReduc
     */
    public function setNatureReduc($natureReduc)
    {
        $this->natureReduc = $natureReduc;
    }

    /**
     * @return mixed
     */
    public function getMontantReduc()
    {
        return $this->montantReduc;
    }

    /**
     * @param mixed $montantReduc
     */
    public function setMontantReduc($montantReduc)
    {
        $this->montantReduc = $montantReduc;
    }

    /**
     * @return mixed
     */
    public function getDateActivation()
    {
        return $this->dateActivation;
    }

    /**
     * @param mixed $dateActivation
     */
    public function setDateActivation($dateActivation)
    {
        $this->dateActivation = $dateActivation;
    }



}