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
    private $settingsData;
    private $em;

    public function dispatchUrl()
    {
        $this->em = $this->getDoctrine()->getManager();
        $settings = $this->em
           ->getRepository('PortfolioBundle:Settings')
           ->find(1);
        $this->settingsData = $settings;
    }

	/**
    * @Route("/", name="homepage")
    * @Template("PortfolioBundle:Home:home.html.twig")
    */
    public function indexAction()
    {
        $this->dispatchUrl();
        return array(
            'settingsData' => $this->settingsData
        );
    }

	/**
    * @Template("PortfolioBundle::menu.html.twig")
    */
    public function getMenuAction()
    {
        $this->dispatchUrl();
        $menu = $this->em
            ->getRepository('PortfolioBundle:Menu')
            ->findAll();
    	return array(
    		'logo' => array(
    			'url' => 'bundles/portfolio/img/logo.png',
    			'alt' => 'Logo portfolio'
    		),
    		'menuData' => $menu,
            'settingsData' => $this->settingsData
    	);
    }

    /**
    * @Template("PortfolioBundle::top.html.twig")
    */
    public function getTopAction()
    {
        $this->dispatchUrl();
        $top = $this->em
            ->getRepository('PortfolioBundle:Top')
            ->find(1);
        $menu = $this->getDoctrine()
            ->getRepository('PortfolioBundle:Menu')
            ->findAll();
		return array(
            'topData' => $top,
    		'menuData' => $menu,
            'settingsData' => $this->settingsData
    	);
    }

    /**
    * @Template("PortfolioBundle::offer.html.twig")
    */
    public function getOfferAction()
    {
        $this->dispatchUrl();
        $offer = $this->em
            ->getRepository('PortfolioBundle:Offer')
            ->findAll();
		return array(
            'offerData' => $offer,
            'settingsData' => $this->settingsData
        );
    }

    /**
    * @Template("PortfolioBundle::cv.html.twig")
    */
    public function getCvAction()
    {
        $this->dispatchUrl();
        $qb = $this->em->createQueryBuilder();

        $qb->select(array('c', 'p'))
            ->from('PortfolioBundle:CvCategories', 'c')
            ->join('c.properties', 'p');
        $query = $qb->getQuery();

        return array(
            'cvData' => $query->getResult(),
            'settingsData' => $this->settingsData
        );
    }

    /**
    * @Template("PortfolioBundle::projects.html.twig")
    */
    public function getProjectsAction()
    {
        $this->dispatchUrl();
		$projects = $this->em
            ->getRepository('PortfolioBundle:Projects')
            ->findAll();
        return array(
            'projectsData' => $projects,
            'settingsData' => $this->settingsData
        );
    }

    /**
    * @Template("PortfolioBundle::about.html.twig")
    */
    public function getAboutsAction()
    {
        $this->dispatchUrl();
		$about = $this->em
            ->getRepository('PortfolioBundle:About')
            ->find(1);
        return array(
            'aboutData' => $about,
            'settingsData' => $this->settingsData
        );
    }

    /**
    * @Template("PortfolioBundle::contact.html.twig")
    */
    public function contactAction(Request $Request)
    {
        $this->dispatchUrl();
        $Request = $this->get('request_stack')->getMasterRequest();
        $Contact = new Contact();
        $contactForm = $this->createForm(ContactType::class, $Contact);

        $contactForm->handleRequest($Request);

        if($contactForm->isValid())
        {

            $Contact->setSendDate(new \DateTime());

            $saveToDB = $this->em;
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
            'msg' => isset($msg) ? $msg : NULL,
            'settingsData' => $this->settingsData
        );
    }

    /**
    * @Template("PortfolioBundle::footer.html.twig")
    */
    public function getFooterAction()
    {
        $this->dispatchUrl();
        return array(
            'settingsData' => $this->settingsData
        );
    }

}