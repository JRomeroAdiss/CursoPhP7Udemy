<?php

namespace Application\Entities;


use Application\Repository\UserRepository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity(repositoryClass="Application\Repositories\UserRepository")
 * @Table(name="users")
 */
class User{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * @var int
     */
    protected int $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected string $username;

    /**
     * @Column(type="string")
     * @var string
     */
    protected string $password;

    /**
     * @Column(type="string")
     * @var string
     */
    protected string $email;

    /**
     * @Column(type="datetime")
     * @var \DateTime
     */
    protected \DateTime $created;

    /**
     * @OneToMany(targetEntity="Post", mappedBy="user", cascade={"persist", "remove"})
     * @var Collection
     */
    protected Collection $posts;

    public function __construct()
    {
        $this->created = new \DateTime("now");
        $this->posts = new ArrayCollection;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return void
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @return ArrayCollection
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }



}