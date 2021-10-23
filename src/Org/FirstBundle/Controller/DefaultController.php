<?php

namespace Org\FirstBundle\Controller;

use Org\Service\MyRegularService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $regularService = $this->get('my.regular.service');
        $bundleService = $this->get('my.bundle.service');
        $regularServiceAsClassName = $this->get(MyRegularService::class);

        return $this->render('FirstBundle:Default:index.html.twig');
    }
}
