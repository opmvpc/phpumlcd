<?php


namespace Opmvpc\ClassDiagram;


use Error;
use PhpParser\Node\Stmt;
use PhpParser\ParserFactory;

class Parser
{
    /**
     * @param string $code
     * @return Stmt[]|void|null
     */
    public static function parse(string $code): ?array
    {
        $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
        try {
            $ast = $parser->parse($code);
        } catch (Error $error) {
            echo "Parse error: {$error->getMessage()}\n";
            return null;
        }

        return $ast;
    }
}
