<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; // Pour les contrôles de saisie serveur

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La date est obligatoire.")]
    #[Assert\GreaterThan("now", message: "La date doit être dans le futur.")]
    private ?\DateTime $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le motif est obligatoire.")]
    #[Assert\Length(min: 10, minMessage: "Le motif doit faire au moins 10 caractères.")]
    private ?string $motif = null;

    #[ORM\Column(length: 20)]
    private ?string $status = "En attente";

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Veuillez préciser le nom du médecin.")]
    private ?string $doctorname = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'appointments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): static
    {
        $this->motif = $motif;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getDoctorname(): ?string
    {
        return $this->doctorname;
    }

    public function setDoctorname(?string $doctorname): static
    {
        $this->doctorname = $doctorname;
        return $this;
    }

    public function getPatient(): ?User
    {
        return $this->patient;
    }

    public function setPatient(?User $patient): static
    {
        $this->patient = $patient;
        return $this;
    }
}