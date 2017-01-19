<?php

namespace PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="settings")
 */
class Settings
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $idSettings;

	/**
     * @ORM\Column(type="string", length=255, nullable=false)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingName;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $settingDescription;

	/**
     * @ORM\Column(type="text", nullable=true)
     */
	private $settingKeywords;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingAuthor;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingTitle;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingIconUrl;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingLogoUrl;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingSupportEmailLogin;

	/**
     * @ORM\Column(type="string", length=255, nullable=true)
	 *
     * @Assert\Length(
     * 	max=255
     * )
     */
	private $settingSupportEmailPassword;

    /**
     * Get idSettings
     *
     * @return integer
     */
    public function getIdSettings()
    {
        return $this->idSettings;
    }

    /**
     * Set settingName
     *
     * @param string $settingName
     *
     * @return Settings
     */
    public function setSettingName($settingName)
    {
        $this->settingName = $settingName;

        return $this;
    }

    /**
     * Get settingName
     *
     * @return string
     */
    public function getSettingName()
    {
        return $this->settingName;
    }

    /**
     * Set settingDescription
     *
     * @param string $settingDescription
     *
     * @return Settings
     */
    public function setSettingDescription($settingDescription)
    {
        $this->settingDescription = $settingDescription;

        return $this;
    }

    /**
     * Get settingDescription
     *
     * @return string
     */
    public function getSettingDescription()
    {
        return $this->settingDescription;
    }

    /**
     * Set settingKeywords
     *
     * @param string $settingKeywords
     *
     * @return Settings
     */
    public function setSettingKeywords($settingKeywords)
    {
        $this->settingKeywords = $settingKeywords;

        return $this;
    }

    /**
     * Get settingKeywords
     *
     * @return string
     */
    public function getSettingKeywords()
    {
        return $this->settingKeywords;
    }

    /**
     * Set settingAuthor
     *
     * @param string $settingAuthor
     *
     * @return Settings
     */
    public function setSettingAuthor($settingAuthor)
    {
        $this->settingAuthor = $settingAuthor;

        return $this;
    }

    /**
     * Get settingAuthor
     *
     * @return string
     */
    public function getSettingAuthor()
    {
        return $this->settingAuthor;
    }

    /**
     * Set settingTitle
     *
     * @param string $settingTitle
     *
     * @return Settings
     */
    public function setSettingTitle($settingTitle)
    {
        $this->settingTitle = $settingTitle;

        return $this;
    }

    /**
     * Get settingTitle
     *
     * @return string
     */
    public function getSettingTitle()
    {
        return $this->settingTitle;
    }

    /**
     * Set settingIconUrl
     *
     * @param string $settingIconUrl
     *
     * @return Settings
     */
    public function setSettingIconUrl($settingIconUrl)
    {
        $this->settingIconUrl = $settingIconUrl;

        return $this;
    }

    /**
     * Get settingIconUrl
     *
     * @return string
     */
    public function getSettingIconUrl()
    {
        return $this->settingIconUrl;
    }

    /**
     * Set settingLogoUrl
     *
     * @param string $settingLogoUrl
     *
     * @return Settings
     */
    public function setSettingLogoUrl($settingLogoUrl)
    {
        $this->settingLogoUrl = $settingLogoUrl;

        return $this;
    }

    /**
     * Get settingLogoUrl
     *
     * @return string
     */
    public function getSettingLogoUrl()
    {
        return $this->settingLogoUrl;
    }

    /**
     * Set settingSupportEmailLogin
     *
     * @param string $settingSupportEmailLogin
     *
     * @return Settings
     */
    public function setSettingSupportEmailLogin($settingSupportEmailLogin)
    {
        $this->settingSupportEmailLogin = $settingSupportEmailLogin;

        return $this;
    }

    /**
     * Get settingSupportEmailLogin
     *
     * @return string
     */
    public function getSettingSupportEmailLogin()
    {
        return $this->settingSupportEmailLogin;
    }

    /**
     * Set settingSupportEmailPassword
     *
     * @param string $settingSupportEmailPassword
     *
     * @return Settings
     */
    public function setSettingSupportEmailPassword($settingSupportEmailPassword)
    {
        $this->settingSupportEmailPassword = $settingSupportEmailPassword;

        return $this;
    }

    /**
     * Get settingSupportEmailPassword
     *
     * @return string
     */
    public function getSettingSupportEmailPassword()
    {
        return $this->settingSupportEmailPassword;
    }
}
