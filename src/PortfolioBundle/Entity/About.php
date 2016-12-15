<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="about")
 */
class About
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $idAbout;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutHead;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutDescribe;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutQuote;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutKnowTitle;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutKnowContent;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutToKnowTitle;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $aboutToKnowContent;

    /**
     * Get idAbout
     *
     * @return integer
     */
    public function getIdAbout()
    {
        return $this->idAbout;
    }

    /**
     * Set aboutHead
     *
     * @param string $aboutHead
     *
     * @return About
     */
    public function setAboutHead($aboutHead)
    {
        $this->aboutHead = $aboutHead;

        return $this;
    }

    /**
     * Get aboutHead
     *
     * @return string
     */
    public function getAboutHead()
    {
        return $this->aboutHead;
    }

    /**
     * Set aboutDescribe
     *
     * @param string $aboutDescribe
     *
     * @return About
     */
    public function setAboutDescribe($aboutDescribe)
    {
        $this->aboutDescribe = $aboutDescribe;

        return $this;
    }

    /**
     * Get aboutDescribe
     *
     * @return string
     */
    public function getAboutDescribe()
    {
        return $this->aboutDescribe;
    }

    /**
     * Set aboutQuote
     *
     * @param string $aboutQuote
     *
     * @return About
     */
    public function setAboutQuote($aboutQuote)
    {
        $this->aboutQuote = $aboutQuote;

        return $this;
    }

    /**
     * Get aboutQuote
     *
     * @return string
     */
    public function getAboutQuote()
    {
        return $this->aboutQuote;
    }

    /**
     * Set aboutKnowTitle
     *
     * @param string $aboutKnowTitle
     *
     * @return About
     */
    public function setAboutKnowTitle($aboutKnowTitle)
    {
        $this->aboutKnowTitle = $aboutKnowTitle;

        return $this;
    }

    /**
     * Get aboutKnowTitle
     *
     * @return string
     */
    public function getAboutKnowTitle()
    {
        return $this->aboutKnowTitle;
    }

    /**
     * Set aboutKnowContent
     *
     * @param string $aboutKnowContent
     *
     * @return About
     */
    public function setAboutKnowContent($aboutKnowContent)
    {
        $this->aboutKnowContent = $aboutKnowContent;

        return $this;
    }

    /**
     * Get aboutKnowContent
     *
     * @return string
     */
    public function getAboutKnowContent()
    {
        return $this->aboutKnowContent;
    }

    /**
     * Set aboutToKnowTitle
     *
     * @param string $aboutToKnowTitle
     *
     * @return About
     */
    public function setAboutToKnowTitle($aboutToKnowTitle)
    {
        $this->aboutToKnowTitle = $aboutToKnowTitle;

        return $this;
    }

    /**
     * Get aboutToKnowTitle
     *
     * @return string
     */
    public function getAboutToKnowTitle()
    {
        return $this->aboutToKnowTitle;
    }

    /**
     * Set aboutToKnowContent
     *
     * @param string $aboutToKnowContent
     *
     * @return About
     */
    public function setAboutToKnowContent($aboutToKnowContent)
    {
        $this->aboutToKnowContent = $aboutToKnowContent;

        return $this;
    }

    /**
     * Get aboutToKnowContent
     *
     * @return string
     */
    public function getAboutToKnowContent()
    {
        return $this->aboutToKnowContent;
    }
}
