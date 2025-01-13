<?php
/**
 * @author julienrajerison5@gmail.com jul
 *
 * Date : 13/01/2025
 */

namespace Model;

class Todo
{
    private int $id;
    private string $title {get => $this->title; set(string $value) => $this->title = $value;}
    private int $delay {get => $this->delay; set(int $value) => $this->delay = $value;}

    public function __construct(string $title = '', int $delay = 0)
    {
        $this->title = $title;
        $this->delay = $delay;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): Todo
    {
        $this->delay = $delay;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Todo
    {
        $this->title = $title;

        return $this;
    }
}