<?php

namespace PortfolioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use PortfolioBundle\Form\Type\ContactType;
//use PortfolioBundle\Entity\Contact;

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
	    			'path' => '#oferta',
	    			'name' => '#Oferta'
	    		),
	    		array(
	    			'path' => '#cv',
	    			'name' => '#CV'
	    		),
	    		array(
	    			'path' => '#projects',
	    			'name' => '#Projekty'
	    		),
	    		array(
	    			'path' => '#about',
	    			'name' => '#O mnie'
	    		),
	    		array(
	    			'path' => '#contact-form',
	    			'name' => '#Kontakt'
	    		),
	    	)	
    	);
    }

    /**
    * @Template("PortfolioBundle::top.html.twig")
    */
    static public function getTopAction()
    {
		return array(
    		'menu' => array(
    			array(
	    			'path' => '#oferta',
	    			'name' => '#Oferta'
	    		),
	    		array(
	    			'path' => '#cv',
	    			'name' => '#CV'
	    		),
	    		array(
	    			'path' => '#projects',
	    			'name' => '#Projekty'
	    		),
	    		array(
	    			'path' => '#about',
	    			'name' => '#O mnie'
	    		),
	    		array(
	    			'path' => '#contact-form',
	    			'name' => '#Kontakt'
	    		),
	    	)	
    	);
    }

    /**
    * @Template("PortfolioBundle::offer.html.twig")
    */
    static public function getOfferAction()
    {
		return array();
    }

    /**
    * @Template("PortfolioBundle::cv.html.twig")
    */
    static public function getCvAction()
    {
		return array();
    }

    /**
    * @Template("PortfolioBundle::projects.html.twig")
    */
    static public function getProjectsAction()
    {
		return array();
    }

    /**
    * @Template("PortfolioBundle::about.html.twig")
    */
    static public function getAboutsAction()
    {
		return array();
    }

    /**
    * @Template("PortfolioBundle::contact.html.twig")
    */
    public function contactAction(Request $Request)
    {
        //$contact = new Contact();
        $contactForm = $this->createForm(ContactType::class);

        $contactForm->handleRequest($Request);

        if($contactForm->isValid())
        {
            $formData = $contactForm->getData();
        }

        return array(
            'form' => $contactForm->createView(),
            'formData' => isset($formData) ? $formData : NULL
        );
    }

    /**
    * @Template("PortfolioBundle::footer.html.twig")
    */
    public function getFooterAction()
    {
		return array();
    }

}