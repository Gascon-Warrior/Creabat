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
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    #[Assert\Length(min:3 , max: 200,  minMessage:'Le sujet doit faire 3 caractères minimum.', maxMessage:'Le sujet doit faire 200 caractères maximum.')]
    private ?string $subject = null;

    #[ORM\Column(length: 3000)]
    #[Assert\NotBlank(message:'Veuillez renseigner ce champ.')]
    #[Assert\Length(min: 20, max: 3000, minMessage:'Le contenu doit faire 20 caractères minimum.',  maxMessage:'Le contenu doit faire 3000 caractères maximum.')]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $sent_at = null;

    #[ORM\Column(options:['default' => false])]
    #[ORM\JoinColumn(nullable: true)]
    private ?bool $is_seen = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(min: 2, max: 100, minMessage:'Le prénom doit faire 2 caractères minimum.',  maxMessage:'Le prénom doit faire 100 caractères maximum.')]
    private ?string $firstname = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message:'Veuillez renseigner ce champ.')]
    #[Assert\Length(min: 2, max: 100,  minMessage:'Le nom doit faire minimum 2 caractères.', maxMessage:'Le nom doit faire maximum 100 caractères.')]
    private ?string $lastname = null;

    #[ORM\Column(length: 280)]
    #[Assert\Email(message: 'Veuillez renseigner un mail valide.')]
    #[Assert\Length(min: 3, max: 280, minMessage:'Le mail doit faire 3 caractères minimum.',  maxMessage:'Le mail doit faire 280 caractères maximum.')]
    private ?string $email = null;

    #[ORM\Column(length: 30, nullable: true)]
    #[Assert\Length(min: 10, max: 30, minMessage:'Le numéro de téléphone doit faire 10 caractères minimum.', maxMessage:'Le numéro de téléphone doit faire 30 caractères maximum.')]
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
