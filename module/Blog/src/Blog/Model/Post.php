<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 11:00
 */
namespace Blog\Model;

class Post implements PostInterface{

    protected $id;
    protected $title;
    protected $text;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text){
        $this->text = $text;
    }
}