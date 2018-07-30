<?php

namespace Survey\CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SurveyCarBundle:Default:index.html.twig');
    }
}
