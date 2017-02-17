<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 13:45
 */
namespace Blog\Mapper;

use Blog\Model\PostInterface;

interface PostMapperInterface{

    public function find($id);

    public function findAll();
}