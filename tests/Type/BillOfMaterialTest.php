<?php

namespace MarcusJaschen\Collmex\Tests\Type;

use MarcusJaschen\Collmex\Type\AbstractType;
use MarcusJaschen\Collmex\Type\BillOfMaterial;
use MarcusJaschen\Collmex\Type\TypeInterface;
use PHPUnit\Framework\TestCase;

class BillOfMaterialTest extends TestCase
{
    /**
     * @test
     */
    public function isAbstractType()
    {
        $subject = new BillOfMaterial([]);

        self::assertInstanceOf(AbstractType::class, $subject);
    }

    /**
     * @test
     */
    public function implementsTypeInterface()
    {
        $subject = new BillOfMaterial([]);

        self::assertInstanceOf(TypeInterface::class, $subject);
    }
}