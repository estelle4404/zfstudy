<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/15
 * Time: 15:11
 */
return array(
    'service_manager'=>array(
        'invokables'=>array(
            'Blog\Service\PostServiceInterface'=>'Blog\Service\PostService',
        ),
    ),
    'view_manager'=>array(
        'template_path_stack'=>array(
            __DIR__.'/../view'
        )
    ),
    'controllers'=>array(
        'factories'=>array(
            'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory'
        ),
    ),
    'router'=>array(
        'routes'=>array(
            'post'=>array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=>array(
                    'route'=>'/blog',
                    'defaults'=>array(
                        'controller'=>'Blog\Controller\List',
                        'action'=>'index'
                    )
                )
            )
        )
    ),
);