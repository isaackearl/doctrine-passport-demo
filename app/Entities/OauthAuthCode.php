<?php

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * Class OauthAuthCode
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="oauth_auth_codes")
 */
class OauthAuthCode
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(name="user_id", type="integer")
     */
    protected $userId;

    /**
     * @var int
     * @ORM\Column(name="client_id", type="integer")
     */
    protected $clientId;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $scopes;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    protected $revoked;

    /**
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    protected $expiresAt;

}