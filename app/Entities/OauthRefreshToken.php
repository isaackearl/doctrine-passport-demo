<?php

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * OauthRefreshToken
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="oauth_refresh_tokens", indexes={@ORM\Index(name="access_token_index", columns={"access_token_id"})})
 */
class OauthRefreshToken
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(name="access_token_id", type="string", length=100)
     */
    protected $accessTokenId;

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