<?php

namespace App;

use App\Interfaces\CRUDInterface;
use App\Commercials\CommercialFactory;


class Salesman extends User /* implements CRUDInterface*/
{

    /**
     * @param $crud
     * @return mixed
     */
    public function create($crud)
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
