<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Information about a file was updated
 */
class UpdateFile extends Update
{
    public const TYPE_NAME = 'updateFile';

    /**
     * New data about the file
     *
     * @var File
     */
    protected File $file;

    public function __construct(File $file)
    {
        parent::__construct();

        $this->file = $file;
    }

    public static function fromArray(array $array): UpdateFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file' => $this->file->typeSerialize(),
        ];
    }

    public function getFile(): File
    {
        return $this->file;
    }
}
