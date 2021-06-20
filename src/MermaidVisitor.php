<?php


namespace Opmvpc\ClassDiagram;

use Opmvpc\ClassDiagram\Diagram\Diagram;
use PhpParser\Node;
use PhpParser\NodeDumper;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitorAbstract;

class MermaidVisitor
{
    public static function visit($ast): Diagram
    {
        $traverser = new NodeTraverser();
        $traverser->addVisitor(new class extends NodeVisitorAbstract {
            public function enterNode(Node $node)
            {
            }
        });


        $ast = $traverser->traverse($ast);
        $dumper = new NodeDumper;
        echo $dumper->dump($ast) . "\n";

        return new Diagram();
    }
}
