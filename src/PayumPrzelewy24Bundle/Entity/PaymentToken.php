<?php

namespace pelsedu\PayumPrzelewy24Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Token;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class PaymentToken extends Token
{
}

