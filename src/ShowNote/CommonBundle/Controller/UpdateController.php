<?php

namespace ShowNote\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ShowNote\CommonBundle\Entity\TheTvDb;

class UpdateController extends Controller
{
    public function updateAction(Request $request)
    {
        if($this->container->getParameter('kernel.environment') != 'dev' && $request->getClientIp() !== '127.0.0.1')
        {
            return new Response('No.', Response::HTTP_UNAUTHORIZED);
        }

        $tvdb = new TheTvDb;


        return new Response('ok');
    }
}
