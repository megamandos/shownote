<?php

namespace ShowNote\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShowNoteCommonBundle:Default:index.html.twig');
    }
}
