<?php


namespace Opmvpc\ClassDiagram;

use InvalidArgumentException;
use Opmvpc\ClassDiagram\Diagram\Diagram;
use PhpParser\Node;
use PhpParser\NodeDumper;
use PhpParser\NodeTraverser;

class MermaidVisitor
{
    /**
     * @param Node[] $ast
     * @return Diagram
     */
    public static function visit(?array $ast): Diagram
    {
        if ($ast === null) {
            throw new InvalidArgumentException('Error: AST is null in MermaidVisitor::visit($ast)');
        }

        $traverser = new NodeTraverser();
        $nodeVisitor = new NodeVisitor();
        $traverser->addVisitor($nodeVisitor);


        $ast = $traverser->traverse($ast);
        $dumper = new NodeDumper;
        echo $dumper->dump($ast) . "\n";

        return $nodeVisitor->getDiagram();
    }
}
