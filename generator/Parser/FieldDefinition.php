<?php

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema\Generator\Parser;

/**
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class FieldDefinition
{
    public string $rawName;
    public string $name;
    public string $type;
    public string $doc;
    public bool $mayBeNull;
}
