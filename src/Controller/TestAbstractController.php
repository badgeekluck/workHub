<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 12.03.2020
 * Time: 22:02
 */

namespace WorkHub\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WorkHub\Service\TestAbstractClass;


class TestAbstractController extends TestAbstractClass
{
    /**
     * @Route("/test", name="test_abstract_class")
     */
    public function testYazdir()
    {
        return new Response('test abstract function');
    }
}
