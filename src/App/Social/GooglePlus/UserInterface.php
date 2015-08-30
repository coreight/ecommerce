<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 15:38
 */

namespace App\Social\GooglePlus;


interface UserInterface
{
    public function getEmail();
    public function setEmail($email);

    public function getAge();
    public function setAge($age);
}