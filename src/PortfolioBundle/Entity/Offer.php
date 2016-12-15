<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="offer")
 */
class Offer
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $idOffer;

	/**
     * @ORM\Column(type="string", length=40)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=40,
     * )
     */
	private $offerName;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $offerDescribe;

	/**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=255,
     * )
     */
	private $offerPhotoUrl;

    /**
     * Get idOffer
     *
     * @return integer
     */
    public function getIdOffer()
    {
        return $this->idOffer;
    }

    /**
     * Set offerName
     *
     * @param string $offerName
     *
     * @return Offer
     */
    public function setOfferName($offerName)
    {
        $this->offerName = $offerName;

        return $this;
    }

    /**
     * Get offerName
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->offerName;
    }

    /**
     * Set offerDescribe
     *
     * @param string $offerDescribe
     *
     * @return Offer
     */
    public function setOfferDescribe($offerDescribe)
    {
        $this->offerDescribe = $offerDescribe;

        return $this;
    }

    /**
     * Get offerDescribe
     *
     * @return string
     */
    public function getOfferDescribe()
    {
        return $this->offerDescribe;
    }

    /**
     * Set offerPhotoUrl
     *
     * @param string $offerPhotoUrl
     *
     * @return Offer
     */
    public function setOfferPhotoUrl($offerPhotoUrl)
    {
        $this->offerPhotoUrl = $offerPhotoUrl;

        return $this;
    }

    /**
     * Get offerPhotoUrl
     *
     * @return string
     */
    public function getOfferPhotoUrl()
    {
        return $this->offerPhotoUrl;
    }
}
