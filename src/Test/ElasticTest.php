<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 1.02.2020
 * Time: 23:01
 */

namespace WorkHub\Test;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use WorkHub\Service\ElasticClient;

class ElasticTest
{
    /**
     * @Route("/elastic/", name="elastic_test")
     */
    public function ElasticTest()
    {
        $elasticTest = new ElasticClient();

        $response = $elasticTest->search();

        return new JsonResponse($response);
    }
}
