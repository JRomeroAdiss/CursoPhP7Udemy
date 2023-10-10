<?php
namespace Application\Entities;

//use Doctrine\ORM\Mapping as ORM;
use Application\Repository\PostRepository;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

/**
 *@Entity(repositoryClass=PostRepository::class)(repositoryClass=PostRepository::class)
 *@Table(name="posts")
 */

//Clase para insertar nueva Tabla generando las claves primarias y secundarias para que el user_id este correlacionado con el id de la tabla user
class Post {
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
    protected string $title;

    /**
     * @Column(type="string")
     * @var string
     */
    protected string $body;

    /**
     * @Column(type="datetime")
     * @var \DateTime
     */
    protected \DateTime $created;

    /**
     * @OneToMany(targetEntity="Post", mappedBy="user", cascade={"persist", "remove"})
     * @var array
     */
    protected array $posts;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="posts")
     * @var User
     */
    protected User $user;

    public function __construct(){
        $this->created = new \DateTime("now");
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTitle(): int
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return void
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return void
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getPosts(): array
    {
        return $this->posts;
    }





}