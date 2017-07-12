<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class OauthAccessTokens
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="oauth_access_tokens", indexes={@ORM\Index(name="user_id_token_index", columns={"user_id"})})
 */
class OauthAccessToken
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    protected $userId;

    /**
     * @var int
     * @ORM\Column(name="client_id", type="integer")
     */
    protected $clientId;


    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $name;

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
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    protected $expiresAt;

}