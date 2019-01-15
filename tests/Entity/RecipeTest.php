<?php

namespace App\Tests\Entity;

use App\Entity\Recipe;
use PHPUnit\Framework\TestCase;

/**
 * @author CountDucku
 * @since  1.0.0
 */
class RecipeTest extends TestCase
{
    public function testConstructor()
    {
        $recipe = new Recipe('House Salad');

        $this->assertEquals('House Salad', $recipe->getName());
    }
}
