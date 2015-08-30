<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 15:43
 */

namespace App\Social\Facebook;


class FbUserAdapter implements UserInterface
{
    protected $fbuser;

    function __construct(UserInterface $user)
    {
        $this->fbuser = $user;
    }

    public function getEmail()
    {
        $this->fbuser->getEmail();
    }

    public function setEmail($email)
    {
        $this->fbuser->setEmail($email);
    }

    public function getAge()
    {
        $this->fbuser->getAge();
    }

    public function setAge($age)
    {
        $this->fbuser->setAge($age);
    }

    public function getImages()
    {
        $images = $this->fbuser->getPhotos();

        foreach ($images as $image) {
            $tab[] = new Images($image);
        }
        return $tab;

    }


}