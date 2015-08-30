<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 16:27
 */

namespace App\Social\Facebook;


class User implements UserInterface
{
    protected $email;
    protected $age;
    protected $images;


    public function getImages() {
        return $this->images;
    }

    public function addImages(Images $image)
    {
        $this->images[] = $image;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }



}