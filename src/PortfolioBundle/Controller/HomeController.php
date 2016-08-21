<?php

namespace PortfolioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
	/**
    * @Route("/", name="homepage")
    * @Template("PortfolioBundle:Home:home.html.twig")
    */
    public function indexAction()
    {
        return array();
    }

	/**
    * @Template("PortfolioBundle::menu.html.twig")
    */
    static public function getMenuAction()
    {
    	return array(
    		'logo' => array(
    			'url' => 'bundles/portfolio/img/logo.png',
    			'alt' => 'Logo portfolio'
    		),
    		'menu' => array(
	    		array(
	    			'path' => '#cv',
	    			'name' => 'CV'
	    		),
	    		array(
	    			'path' => '#projects',
	    			'name' => 'Projekty'
	    		),
	    		array(
	    			'path' => '#about',
	    			'name' => 'O mnie'
	    		),
	    		array(
	    			'path' => '#contact',
	    			'name' => 'Kontakt'
	    		),
	    	)	
    	);
    }

    /**
    * @Template("PortfolioBundle::carousel.html.twig")
    */
    static public function getCarouselAction()
    {
    	return array(
    		//todo
    	);
    }
}
