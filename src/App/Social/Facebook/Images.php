<?php
/**
 * Created by PhpStorm.
 * User: wal08
 * Date: 28/08/15
 * Time: 16:42
 */

namespace App\Social\Facebook;

/**
 * Class Images
 * @package App\Facebook
 */
class Images
{
    protected $path;

    function __construct($path)
    {
       $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }



}