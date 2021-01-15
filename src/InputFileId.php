<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A file defined by its unique ID.
 */
class InputFileId extends InputFile
{
    public const TYPE_NAME = 'inputFileId';

    /**
     * Unique file identifier.
     *
     * @var int
     */
    protected int $id;

    public function __construct(int $id)
    {
        parent::__construct();

        $this->id = $id;
    }

    public static function fromArray(array $array): InputFileId
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }
}
