<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/15
 * Time: 15:24
 */

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Blog\Service\PostServiceInterface;
use Zend\View\Helper\ViewModel;

class ListController extends AbstractActionController
{

    protected $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function indexAction()
    {
        return new ViewModel(array(
            'posts'=>$this->postService->findAllPosts()
        ));
    }
}