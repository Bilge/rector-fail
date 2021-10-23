<?php

namespace Org\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $service = $this->get('my.service');

        return $this->render('FirstBundle:Default:index.html.twig');
    }
}
