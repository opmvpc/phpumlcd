<?php

namespace Opmvpc\ClassDiagram\Tests;

use Opmvpc\ClassDiagram\ClassDiagram;
use PHPUnit\Framework\TestCase;

class ClassDiagramTest extends TestCase
{
    protected const SIMPLECLASSPATH = __DIR__ . '/resources/SimpleClass/SimpleClass.php';

    public function testSimpleClassParsing(): void
    {
        ClassDiagram::createClassDiagramStructure(static::SIMPLECLASSPATH);
    }
}
