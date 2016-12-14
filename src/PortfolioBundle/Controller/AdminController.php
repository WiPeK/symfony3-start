<?php

namespace PortfolioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

	/**
    * @Route("/admin/", name="admin-dashboard")
    * @Template("PortfolioBundle:Admin:dashboard.html.twig")
    */
    public function indexAction()
    {
        return array();
    }
}