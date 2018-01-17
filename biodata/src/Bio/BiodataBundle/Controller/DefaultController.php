<?php

namespace Bio\BiodataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BioBiodataBundle:Default:index.html.twig');
    }
}
