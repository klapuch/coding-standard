<?php

namespace Lavito\ApiBundle;

use Lavito\ApiBundle\EmailAddress\EmailAddress;
use Lavito\ApiBundle\String\LowercaseValidator\LowercaseConstraint as AssertLowercase;

use Symfony\Component\Validator\Constraints as Assert;

class PasswordLoginRequest
{

	/**
	 * @JMS\Type("string")
	 * @Assert\NotBlank()
	 * @AssertLowercase()
	 * @Assert\Length(max=EmailAddress::EMAIL_ADDRESS_MAX_LENGTH)
	 * @Assert\Email()
	 * @var string
	 */
	public $email;

}
