<?php

namespace PortfolioBundle\Entity;

class Contact
{
	protected $email;

	protected $subject;

	protected $message;

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setMessage($message)
	{
		$this->email = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}
}