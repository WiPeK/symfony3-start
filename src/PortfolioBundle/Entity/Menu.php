<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="menu")
 */
class Menu
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $idMenu;

	/**
     * @ORM\Column(type="string", length=30)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=30,
     * )
     */
	private $menuPath;

	/**
     * @ORM\Column(type="string", length=30)
     *
     * @Assert\NotBlank
     *
     * @Assert\Length(
     *  max=30,
     * )
     */
	private $menuName;

    /**
     * Get idMenu
     *
     * @return integer
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * Set menuPath
     *
     * @param string $menuPath
     *
     * @return Menu
     */
    public function setMenuPath($menuPath)
    {
        $this->menuPath = $menuPath;

        return $this;
    }

    /**
     * Get menuPath
     *
     * @return string
     */
    public function getMenuPath()
    {
        return $this->menuPath;
    }

    /**
     * Set menuName
     *
     * @param string $menuName
     *
     * @return Menu
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;

        return $this;
    }

    /**
     * Get menuName
     *
     * @return string
     */
    public function getMenuName()
    {
        return $this->menuName;
    }
}
