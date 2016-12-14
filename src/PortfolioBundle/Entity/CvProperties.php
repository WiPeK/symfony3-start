<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cv_properties")
 */
class CvProperties{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="integer", nullable=false)
	 */
	private $id_category;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank
	 *
     * @Assert\Length(
     * 	max=255,
     *	min = 2
     * )
     */
	private $cvPropertyName;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @Assert\NotBlank
	 *
     * @Assert\Length(
     * 	max=255,
     *	min = 2
     * )
     */
	private $cvPropertyTitle;

	/**
     * @ORM\Column(type="date", nullable=true)
     *
     * @Assert\Date
     */
	private $cvDateFrom;

	/**
     * @ORM\Column(type="date", nullable=true)
     *
     * @Assert\Date
     */
	private $cvDateTo;

	/**
     * @ORM\ManyToOne(targetEntity="CvCategories", inversedBy="properties")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id_cv_category")
     */
    private $category;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCategory
     *
     * @param integer $idCategory
     *
     * @return CvProperties
     */
    public function setIdCategory($idCategory)
    {
        $this->id_category = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return integer
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * Set cvPropertyName
     *
     * @param string $cvPropertyName
     *
     * @return CvProperties
     */
    public function setCvPropertyName($cvPropertyName)
    {
        $this->cvPropertyName = $cvPropertyName;

        return $this;
    }

    /**
     * Get cvPropertyName
     *
     * @return string
     */
    public function getCvPropertyName()
    {
        return $this->cvPropertyName;
    }

    /**
     * Set cvPropertyTitle
     *
     * @param string $cvPropertyTitle
     *
     * @return CvProperties
     */
    public function setCvPropertyTitle($cvPropertyTitle)
    {
        $this->cvPropertyTitle = $cvPropertyTitle;

        return $this;
    }

    /**
     * Get cvPropertyTitle
     *
     * @return string
     */
    public function getCvPropertyTitle()
    {
        return $this->cvPropertyTitle;
    }

    /**
     * Set cvDateFrom
     *
     * @param \DateTime $cvDateFrom
     *
     * @return CvProperties
     */
    public function setCvDateFrom($cvDateFrom)
    {
        $this->cvDateFrom = $cvDateFrom;

        return $this;
    }

    /**
     * Get cvDateFrom
     *
     * @return \DateTime
     */
    public function getCvDateFrom()
    {
        return $this->cvDateFrom;
    }

    /**
     * Set cvDateTo
     *
     * @param \DateTime $cvDateTo
     *
     * @return CvProperties
     */
    public function setCvDateTo($cvDateTo)
    {
        $this->cvDateTo = $cvDateTo;

        return $this;
    }

    /**
     * Get cvDateTo
     *
     * @return \DateTime
     */
    public function getCvDateTo()
    {
        return $this->cvDateTo;
    }

    /**
     * Set category
     *
     * @param \PortfolioBundle\Entity\CvCategories $category
     *
     * @return CvProperties
     */
    public function setCategory(\PortfolioBundle\Entity\CvCategories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \PortfolioBundle\Entity\CvCategories
     */
    public function getCategory()
    {
        return $this->category;
    }
}
