<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 15:38
 */

namespace App\Social\GooglePlus;


class GooglePlusUser implements UserInterface
{
    protected $email;
    protected $age;


    public function connect()
    {
        return array(
            "email" => $this->email,
            "age" => $this->age
        );
    }

    public function getPhotos()
    {
        return array(
            "http://blog.hkmania.com/wp-content/uploads/2011/07/choudenshi-bioman-red-one-v2-350x262.jpg",
            "http://blog.hkmania.com/wp-content/uploads/2011/07/choudenshi-bioman-green-two-v2-350x262.jpg",
            "http://blog.hkmania.com/wp-content/uploads/2011/07/Choudenshi-bioman-blue-three-v2-350x262.jpg",
            "http://blog.hkmania.com/wp-content/uploads/2011/07/Choudenshi-bioman-yellow-four-v2-350x262.jpg"
        );
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