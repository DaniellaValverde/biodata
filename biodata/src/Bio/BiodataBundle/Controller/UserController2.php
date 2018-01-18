<?php

namespace Bio\BiodataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('BioBiodataBundle:User:index.html.twig', array(
            // ...
        ));
    }

}
