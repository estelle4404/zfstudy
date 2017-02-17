<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 10:54
 */
namespace Blog\Service;

use Blog\Mapper\PostMapperInterface;

class PostService implements PostServiceInterface{

    protected $postMapper;

    public function __construct(PostMapperInterface $postMapper)
    {
        $this->postMapper = $postMapper;
    }

    public function findAllPosts()
    {
        return $this->postMapper->findAll();
    }

    public function findPost($id)
    {
        return $this->postMapper->find($id);
    }
}