<?php
declare(strict_types=1);

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="\AppBundle\Entity\Repository\TestRepository")
 * @ORM\Table(name="test")
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $text;
    /**
     * @ORM\Column(type="integer")
     */
    protected $number;


    public function __construct(string $name, string $text)
    {
        $this->name = $name;
        $this->text = $text;
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
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return int | null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int | null $number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }
}