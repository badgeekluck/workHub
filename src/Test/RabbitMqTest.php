<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 2.02.2020
 * Time: 20:53
 */

namespace WorkHub\Test;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RabbitMqTest extends AbstractController
{
    /**
     * @Route("/createUser")
     * @Method("POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function postCreateUser(Request $request)
    {
        $message = ["Type"=>"VerificationEmail","Firstname"=>$request->get('firstname'),"Lastname"=>$request->get('lastname'),"Email"=>$request->get('email')];
        $rabbitMessage = json_encode($message);

        $this->get('old_sound_rabbit_mq.emailing_producer')->setContentType('application/json');
        $this->get('old_sound_rabbit_mq.emailing_producer')->publish($rabbitMessage);

        return new JsonResponse(array('Status' => 'OK'));

    }
}
