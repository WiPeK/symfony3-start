<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="top")
 */
class Top
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $idTop;

	/**
     * @ORM\Column(type="boolean", nullable=true)
     */
	private $isTopAsHtml;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $topHeader;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $topText;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $topFooter;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $topAsHtml;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=255,
     * )
     */
    private $topPosterUrl;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=255,
     * )
     */
    private $topVideoUrl;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=255,
     * )
     */
    private $topVideoUrl2;


    /**
     * Get idTop
     *
     * @return integer
     */
    public function getIdTop()
    {
        return $this->idTop;
    }

    /**
     * Set isTopAsHtml
     *
     * @param boolean $isTopAsHtml
     *
     * @return Top
     */
    public function setIsTopAsHtml($isTopAsHtml)
    {
        $this->isTopAsHtml = $isTopAsHtml;

        return $this;
    }

    /**
     * Get isTopAsHtml
     *
     * @return boolean
     */
    public function getIsTopAsHtml()
    {
        return $this->isTopAsHtml;
    }

    /**
     * Set topHeader
     *
     * @param string $topHeader
     *
     * @return Top
     */
    public function setTopHeader($topHeader)
    {
        $this->topHeader = $topHeader;

        return $this;
    }

    /**
     * Get topHeader
     *
     * @return string
     */
    public function getTopHeader()
    {
        return $this->topHeader;
    }

    /**
     * Set topText
     *
     * @param string $topText
     *
     * @return Top
     */
    public function setTopText($topText)
    {
        $this->topText = $topText;

        return $this;
    }

    /**
     * Get topText
     *
     * @return string
     */
    public function getTopText()
    {
        return $this->topText;
    }

    /**
     * Set topFooter
     *
     * @param string $topFooter
     *
     * @return Top
     */
    public function setTopFooter($topFooter)
    {
        $this->topFooter = $topFooter;

        return $this;
    }

    /**
     * Get topFooter
     *
     * @return string
     */
    public function getTopFooter()
    {
        return $this->topFooter;
    }

    /**
     * Set topAsHtml
     *
     * @param string $topAsHtml
     *
     * @return Top
     */
    public function setTopAsHtml($topAsHtml)
    {
        $this->topAsHtml = $topAsHtml;

        return $this;
    }

    /**
     * Get topAsHtml
     *
     * @return string
     */
    public function getTopAsHtml()
    {
        return $this->topAsHtml;
    }

    /**
     * Set topPosterUrl
     *
     * @param string $topPosterUrl
     *
     * @return Top
     */
    public function setTopPosterUrl($topPosterUrl)
    {
        $this->topPosterUrl = $topPosterUrl;

        return $this;
    }

    /**
     * Get topPosterUrl
     *
     * @return string
     */
    public function getTopPosterUrl()
    {
        return $this->topPosterUrl;
    }

    /**
     * Set topVideoUrl
     *
     * @param string $topVideoUrl
     *
     * @return Top
     */
    public function setTopVideoUrl($topVideoUrl)
    {
        $this->topVideoUrl = $topVideoUrl;

        return $this;
    }

    /**
     * Get topVideoUrl
     *
     * @return string
     */
    public function getTopVideoUrl()
    {
        return $this->topVideoUrl;
    }

    /**
     * Set topVideoUrl2
     *
     * @param string $topVideoUrl2
     *
     * @return Top
     */
    public function setTopVideoUrl2($topVideoUrl2)
    {
        $this->topVideoUrl2 = $topVideoUrl2;

        return $this;
    }

    /**
     * Get topVideoUrl2
     *
     * @return string
     */
    public function getTopVideoUrl2()
    {
        return $this->topVideoUrl2;
    }
}
