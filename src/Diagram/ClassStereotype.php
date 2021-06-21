<?php


namespace Opmvpc\ClassDiagram\Diagram;

abstract class ClassStereotype implements Stereotype
{
    abstract public function toString(): string;
}
