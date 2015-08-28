<?php


namespace App\Interfaces;

use App\Commercials\Promotion;

/**
 * Interface CRUDInterface
 * @package App\Interfaces
 */
interface CRUDInterface {

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function create($type, $crud);

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function read(CRUDInterface $crud);

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function update(CRUDInterface $crud);

    /**
     * @param CRUDInterface $crud
     * @return mixed
     */
    public function delete(CRUDInterface $crud);



} 