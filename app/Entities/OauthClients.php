<?php

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\Timestampable;

/**
 * OauthClients
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="oauth_clients", indexes={@ORM\Index(name="user_id_client_index", columns={"user_id"})})
 */
class OauthClients
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    protected $userId;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(name="secret", type="string", length=100)
     */
    protected $secret;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $redirect;

    /**
     * @var boolean
     * @ORM\Column(name="personal_access_client", type="boolean")
     */
    protected $personalAccessClient;

    /**
     * @var boolean
     * @ORM\Column(name="password_client", type="boolean")
     */
    protected $passwordClient;

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
}