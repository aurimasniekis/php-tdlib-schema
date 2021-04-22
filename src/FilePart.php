<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a part of a file.
 */
class FilePart extends TdObject
{
    public const TYPE_NAME = 'filePart';

    /**
     * File bytes.
     */
    protected string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public static function fromArray(array $array): FilePart
    {
        return new static(
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }

    public function getData(): string
    {
        return $this->data;
    }
}
