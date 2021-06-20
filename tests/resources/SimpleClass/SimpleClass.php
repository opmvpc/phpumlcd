<?php


namespace Opmvpc\ClassDiagram\Tests\resources\SimpleClass;


class SimpleClass
{
    protected array $attribute;

    /**
     * SimpleClass constructor.
     * @param array $attribute
     */
    public function __construct(array $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return array
     */
    public function getAttribute(): array
    {
        return $this->attribute;
    }

    /**
     * @param array $attribute
     */
    public function setAttribute(array $attribute): void
    {
        $this->attribute = $attribute;
    }


}
