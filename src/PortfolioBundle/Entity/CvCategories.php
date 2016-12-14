<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="cv_categories")
 */
class CvCategories
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\OneToMany(targetEntity="cv_properties", mappedBy="cv_categories")
	 */
	private $idCvCategory;

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
	private $cvCategoryName;

	/**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * 	max=255,
     *	min = 2
     * )
     */
	private $iconClass;

	/**
	 * @ORM\OneToMany(targetEntity="CvProperties", mappedBy="category")
	 */
	private $properties;

	public function __construct()
	{
		$this->properties = new ArrayCollection();
	}

    /**
     * Get idCvCategory
     *
     * @return integer
     */
    public function getIdCvCategory()
    {
        return $this->idCvCategory;
    }

    /**
     * Set cvCategoryName
     *
     * @param string $cvCategoryName
     *
     * @return CvCategories
     */
    public function setCvCategoryName($cvCategoryName)
    {
        $this->cvCategoryName = $cvCategoryName;

        return $this;
    }

    /**
     * Get cvCategoryName
     *
     * @return string
     */
    public function getCvCategoryName()
    {
        return $this->cvCategoryName;
    }

    /**
     * Set iconClass
     *
     * @param string $iconClass
     *
     * @return CvCategories
     */
    public function setIconClass($iconClass)
    {
        $this->iconClass = $iconClass;

        return $this;
    }

    /**
     * Get iconClass
     *
     * @return string
     */
    public function getIconClass()
    {
        return $this->iconClass;
    }

    /**
     * Add property
     *
     * @param \PortfolioBundle\Entity\CvProperties $property
     *
     * @return CvCategories
     */
    public function addProperty(\PortfolioBundle\Entity\CvProperties $property)
    {
        $this->properties[] = $property;

        return $this;
    }

    /**
     * Remove property
     *
     * @param \PortfolioBundle\Entity\CvProperties $property
     */
    public function removeProperty(\PortfolioBundle\Entity\CvProperties $property)
    {
        $this->properties->removeElement($property);
    }

    /**
     * Get properties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Get categories join properties
     *
     * @return
     */
    public function findByAllCategoriesWithProperties()
    {
        $query = $this->getEntityManager()
            ->createQuery('
                SELECT c, p
                FROM PortfolioBundle:CvCategories c
                JOIN b.properties p
                WHERE b.idCvCategory = :id_category
                ');
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
