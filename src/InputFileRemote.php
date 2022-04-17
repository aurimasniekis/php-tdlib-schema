<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A file defined by its remote ID. The remote ID is guaranteed to be usable only if the corresponding file is still accessible to the user and known to TDLib. For example, if the file is from a message, then the message must be not deleted and accessible to the user. If the file database is disabled, then the corresponding object with the file must be preloaded by the application
 */
class InputFileRemote extends InputFile
{
    public const TYPE_NAME = 'inputFileRemote';

    /**
     * Remote file identifier
     *
     * @var string
     */
    protected string $id;

    public function __construct(string $id)
    {
        parent::__construct();

        $this->id = $id;
    }

    public static function fromArray(array $array): InputFileRemote
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }
}
