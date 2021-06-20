<?php

namespace Opmvpc\ClassDiagram;

use Opmvpc\ClassDiagram\Diagram\Diagram;

class ClassDiagram
{
    public static function make(string $path): void
    {
        static::createClassDiagramStructure($path);
    }

    public static function createClassDiagramStructure(string $path): Diagram
    {
        $code = static::readFile($path);
        $ast = Parser::parse($code);

        return MermaidVisitor::visit($ast);
    }

    private static function readFile(string $path): string
    {
        return file_get_contents($path);
    }
}
