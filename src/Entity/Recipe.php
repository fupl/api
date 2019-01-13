<?php

namespace App\Entity;

/**
 * @author @CountDucku
 * @since  1.0.0
 */
class Recipe
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
