<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 10:58
 */
namespace Blog\Model;

interface PostInterface{

    public function getId();

    public function getTitle();

    public function getText();
}