<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 10:50
 */
namespace Blog\Service;

use Blog\Model\PostInterface;

interface PostServiceInterface{

    public function findAllPosts();
    public function findPost($id);
}