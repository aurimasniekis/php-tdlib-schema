<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

use JsonSerializable;

abstract class TdObject implements TdTypeSerializableInterface, JsonSerializable
{
    public const TYPE_NAME = '_tdObject';

    public ?string $tdExtra = null;

    public function getTdExtra(): ?string
    {
        return $this->tdExtra;
    }

    public function getTdTypeName(): string
    {
        return static::TYPE_NAME;
    }

    public function setTdExtra(?string $tdExtra): self
    {
        $this->tdExtra = $tdExtra;

        return $this;
    }

    public function jsonSerialize(): array
    {
        $output = [];
        if (null !== $this->tdExtra) {
            $output['@extra'] = $this->tdExtra;
        }

        return array_merge($output, $this->typeSerialize());
    }
}
