<?php

/**
 * @author julienrajerison5@gmail.com jul
 *
 * Date : 16/01/2025
 */
class Car
{
    private int $id;
    private ?string $mark;
    private ?string $type;
    private ?int $year;

    function __construct(?string $mark = null, ?string $type = null, int $year = 0)
    {
        $this->mark = $mark;
        $this->type = $type;
        $this->year = $year;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Car
    {
        $this->id = $id;

        return $this;
    }

    public function getMark(): string
    {
        return $this->mark;
    }

    public function setMark(string $mark): Car
    {
        $this->mark = $mark;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Car
    {
        $this->type = $type;

        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): Car
    {
        $this->year = $year;

        return $this;
    }

    public function hydrate(array $data): Car
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }

        return $this;
    }
}