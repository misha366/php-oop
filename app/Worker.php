<?php
declare(strict_types=1);

namespace App;

// Все "переменные" класса - поля
// Все "функции" класса - методы
abstract class Worker implements WorkerInterface {
    // Каждый класс должен выполнять какое-то одно конкретное действия.
    // Второе действие - второй класс, в один всё пихать не надо.
    private string $name;
    private int $age;
    private array $hours;

    private string $position;

    private string $experience;

    public function __construct(string $name,
                                int $age,
                                array $hours,
                                string $experience,
                                string $position) {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
        $this->experience = $experience;
        $this->position = $position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getHours(): array
    {
        return $this->hours;
    }

    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getExperience(): string
    {
        return $this->experience;
    }

    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
    }

}