<?php


namespace Opmvpc\ClassDiagram;

use Opmvpc\ClassDiagram\Diagram\ConcreteClass;
use Opmvpc\ClassDiagram\Diagram\Diagram;
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

class NodeVisitor extends NodeVisitorAbstract
{
    protected Diagram $diagram;

    /**
     * NodeVisitor constructor.
     */
    public function __construct()
    {
        $this->diagram = new Diagram();
    }

    /**
     * @return Diagram
     */
    public function getDiagram(): Diagram
    {
        return $this->diagram;
    }

    public function enterNode(Node $node)
    {
        if ($node instanceof Node\Stmt\Class_) {
            $class = new ConcreteClass();
            $this->diagram->addStereotype($class);
        }
    }
}
