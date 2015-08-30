<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 15:43
 */

namespace App\Social\GooglePlus;


class GooglePlusUserAdapter implements UserInterface
{
    protected $gplususer;

    function __construct(UserInterface $user)
    {
        $this->gplususer = $user;
    }

    public function getEmail()
    {
        $this->gplususer->getEmail();
    }

    public function setEmail($email)
    {
        $this->gplususer->setEmail($email);
    }

    public function getAge()
    {
        $this->gplususer->getAge();
    }

    public function setAge($age)
    {
        $this->gplususer->setAge($age);
    }

    public function getImages()
    {
        $images = $this->gplususer->getPhotos();

        foreach ($images as $image) {
            $tab[] = new Images($image);
        }
        return $tab;

    }


}