<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    #[Assert\NotBlank()]
    #[Assert\Length(min:3 , max: 200)]
    private ?string $subject = null;

    #[ORM\Column(length: 3000)]
    #[Assert\NotBlank()]
    #[Assert\Length(min: 20, max: 3000)]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $sent_at = null;

    #[ORM\Column(options:['default' => false])]
    #[ORM\JoinColumn(nullable: true)]
    private ?bool $is_seen = null;

   /* #[ORM\ManyToOne(inversedBy: 'messages')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    #[ORM\JoinColumn(nullable: true)]
    #[ORM\JoinColumn(onDelete: 'CASCADE')]
    private ?User $user = null;*/

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $firstname = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank()]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $lastname = null;

    #[ORM\Column(length: 280)]
    #[Assert\NotBlank()]
    #[Assert\Email()]
    #[Assert\Length(min: 2, max: 280)]
    private ?string $email = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $phone = null;

    public function __construct()
    {
        $this->sent_at = new \DateTimeImmutable();
        $this->is_seen = false;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getSentAt(): ?\DateTimeImmutable
    {
        return $this->sent_at;
    }

    public function setSentAt(\DateTimeImmutable $sent_at): static
    {
        $this->sent_at = $sent_at;

        return $this;
    }

    public function isIsSeen(): ?bool
    {
        return $this->is_seen;
    }

    public function setIsSeen(bool $is_seen): static
    {
        $this->is_seen = $is_seen;

        return $this;
    }

   /* public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }*/

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }
}
