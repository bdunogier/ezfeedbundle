<?php

namespace BD\Bundle\EzFeedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BDBDEzFeedBundle:Default:index.html.twig', array('name' => $name));
    }
}
