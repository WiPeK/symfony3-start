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
    public function getMenuAction()
    {
        $menu = $this->getDoctrine()
            ->getRepository('PortfolioBundle:Menu')
            ->findAll();
    	return array(
    		'logo' => array(
    			'url' => 'bundles/portfolio/img/logo.png',
    			'alt' => 'Logo portfolio'
    		),
    		'menuData' => $menu
    	);
    }

    /**
    * @Template("PortfolioBundle::top.html.twig")
    */
    public function getTopAction()
    {
        $top = $this->getDoctrine()
            ->getRepository('PortfolioBundle:Top')
            ->find(1);
        $menu = $this->getDoctrine()
            ->getRepository('PortfolioBundle:Menu')
            ->findAll();
		return array(
            'topData' => $top,
    		'menuData' => $menu
    	);
    }

    /**
    * @Template("PortfolioBundle::offer.html.twig")
    */
    public function getOfferAction()
    {
        $offer = $this->getDoctrine()
            ->getRepository('PortfolioBundle:Offer')
            ->findAll();
		return array(
            'offerData' => $offer
        );
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
    public function getProjectsAction()
    {
		$projects = $this->getDoctrine()
            ->getRepository('PortfolioBundle:Projects')
            ->findAll();
        return array(
            'projectsData' => $projects
        );
    }

    /**
    * @Template("PortfolioBundle::about.html.twig")
    */
    public function getAboutsAction()
    {
		$about = $this->getDoctrine()
            ->getRepository('PortfolioBundle:About')
            ->find(1);
        return array(
            'aboutData' => $about
        );
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