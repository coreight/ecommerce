<?php

namespace App;

use App\Interfaces\CRUDInterface;
use App\Commercials\Promotion;

class Administrator extends User implements CRUDInterface
{
    /**
     * Surcharge de la méthode GET de la classe User
     * @return string
     */
    public function getFirstname()
    {
        return "ADMIN : ".$this->firstname;
    }

    /**
     * Les administrateurs peuvent administrer les users
     * @param User $user
     * @return string
     */
    public function administre(User $user) {
        return $this->getFirstname()." ".$this->lastname." a administré l'utilisateur ".$user->firstname." ".$user->lastname;
    }

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function create($type, $crud)
    {
        return $type->createCommercial($crud);

    }

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function read(CRUDInterface $crud)
    {

    }

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function update(CRUDInterface $crud)
    {

    }
    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function delete(CRUDInterface $crud)
    {

    }
}