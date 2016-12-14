<?php

namespace PortfolioBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PortfolioBundle\Form\Type\ContactType;
use PortfolioBundle\Entity\Contact;

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
    public function getCvAction()
    {
		$em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();

        $qb->select(array('c', 'p'))
            ->from('PortfolioBundle:CvCategories', 'c')
            ->join('c.properties', 'p');
        $query = $qb->getQuery();

        return array(
            'cvData' => $query->getResult()
        );
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
        $Request = $this->get('request_stack')->getMasterRequest();
        $Contact = new Contact();
        $contactForm = $this->createForm(ContactType::class, $Contact);

        $contactForm->handleRequest($Request);

        if($contactForm->isValid())
        {

            $Contact->setSendDate(new \DateTime());

            $saveToDB = $this->getDoctrine()->getManager();
            $saveToDB->persist($Contact);
            $saveToDB->flush();

            $message = \Swift_Message::newInstance()
                        ->setSubject($Contact->getSubject())
                        ->setFrom($Contact->getEmail())
                        ->setTo('wipekxxx@gmail.com')
                        ->setBody($Contact->getMessage());

            $this->get('mailer')->send($message);

            $msg = 'Wiadomość została wysłana.';
        }

        return array(
            'form' => $contactForm->createView(),
            'msg' => isset($msg) ? $msg : NULL
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