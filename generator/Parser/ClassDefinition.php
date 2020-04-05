<?php

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema\Generator\Parser;

/**
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ClassDefinition
{
    public string $parentClass;
    public string $className;
    public string $classDocs;

    /** @var FieldDefinition[] */
    public array  $fields = [];
    public string $returnType;
    public string $typeName;

    public function getField(string $name): FieldDefinition
    {
        if (false === isset($this->fields[$name])) {
            $this->fields[$name] = new FieldDefinition();
        }

        return $this->fields[$name];
    }
}
