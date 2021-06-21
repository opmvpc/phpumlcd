<?php


namespace Opmvpc\ClassDiagram\Diagram;

class Diagram
{
    /** @var Stereotype[] */
    protected array $stereotypes;

    /**
     * Diagram constructor.
     */
    public function __construct()
    {
        $this->stereotypes = [];
    }

    public function addStereotype(Stereotype $stereotype): void
    {
        $this->stereotypes[] = $stereotype;
    }

    /**
     * @return Stereotype[]
     */
    public function getStereotypes(): array
    {
        return $this->stereotypes;
    }


}
