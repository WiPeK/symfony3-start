<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="projects")
 */
class Projects
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id_projects;

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
	private $projectName;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectTechnologies;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
	private $projectDescribe;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectUrl;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectAdminPanelUrl;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectAdminPanelLogin;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectAdminPanelPassword;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectPhoto;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255,
     * )
     */
	private $projectPhoto2;

    /**
     * Get idProjects
     *
     * @return integer
     */
    public function getIdProjects()
    {
        return $this->id_projects;
    }

    /**
     * Set projectName
     *
     * @param string $projectName
     *
     * @return Projects
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set projectTechnologies
     *
     * @param string $projectTechnologies
     *
     * @return Projects
     */
    public function setProjectTechnologies($projectTechnologies)
    {
        $this->projectTechnologies = $projectTechnologies;

        return $this;
    }

    /**
     * Get projectTechnologies
     *
     * @return string
     */
    public function getProjectTechnologies()
    {
        return $this->projectTechnologies;
    }

    /**
     * Set projectDescribe
     *
     * @param string $projectDescribe
     *
     * @return Projects
     */
    public function setProjectDescribe($projectDescribe)
    {
        $this->projectDescribe = $projectDescribe;

        return $this;
    }

    /**
     * Get projectDescribe
     *
     * @return string
     */
    public function getProjectDescribe()
    {
        return $this->projectDescribe;
    }

    /**
     * Set projectUrl
     *
     * @param string $projectUrl
     *
     * @return Projects
     */
    public function setProjectUrl($projectUrl)
    {
        $this->projectUrl = $projectUrl;

        return $this;
    }

    /**
     * Get projectUrl
     *
     * @return string
     */
    public function getProjectUrl()
    {
        return $this->projectUrl;
    }

    /**
     * Set projectAdminPanelUrl
     *
     * @param string $projectAdminPanelUrl
     *
     * @return Projects
     */
    public function setProjectAdminPanelUrl($projectAdminPanelUrl)
    {
        $this->projectAdminPanelUrl = $projectAdminPanelUrl;

        return $this;
    }

    /**
     * Get projectAdminPanelUrl
     *
     * @return string
     */
    public function getProjectAdminPanelUrl()
    {
        return $this->projectAdminPanelUrl;
    }

    /**
     * Set projectAdminPanelLogin
     *
     * @param string $projectAdminPanelLogin
     *
     * @return Projects
     */
    public function setProjectAdminPanelLogin($projectAdminPanelLogin)
    {
        $this->projectAdminPanelLogin = $projectAdminPanelLogin;

        return $this;
    }

    /**
     * Get projectAdminPanelLogin
     *
     * @return string
     */
    public function getProjectAdminPanelLogin()
    {
        return $this->projectAdminPanelLogin;
    }

    /**
     * Set projectAdminPanelPassword
     *
     * @param string $projectAdminPanelPassword
     *
     * @return Projects
     */
    public function setProjectAdminPanelPassword($projectAdminPanelPassword)
    {
        $this->projectAdminPanelPassword = $projectAdminPanelPassword;

        return $this;
    }

    /**
     * Get projectAdminPanelPassword
     *
     * @return string
     */
    public function getProjectAdminPanelPassword()
    {
        return $this->projectAdminPanelPassword;
    }

    /**
     * Set projectPhoto
     *
     * @param string $projectPhoto
     *
     * @return Projects
     */
    public function setProjectPhoto($projectPhoto)
    {
        $this->projectPhoto = $projectPhoto;

        return $this;
    }

    /**
     * Get projectPhoto
     *
     * @return string
     */
    public function getProjectPhoto()
    {
        return $this->projectPhoto;
    }

    /**
     * Set projectPhoto2
     *
     * @param string $projectPhoto2
     *
     * @return Projects
     */
    public function setProjectPhoto2($projectPhoto2)
    {
        $this->projectPhoto2 = $projectPhoto2;

        return $this;
    }

    /**
     * Get projectPhoto2
     *
     * @return string
     */
    public function getProjectPhoto2()
    {
        return $this->projectPhoto2;
    }
}
