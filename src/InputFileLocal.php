<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A file defined by a local path
 */
class InputFileLocal extends InputFile
{
    public const TYPE_NAME = 'inputFileLocal';

    /**
     * Local path to the file
     *
     * @var string
     */
    protected string $path;

    public function __construct(string $path)
    {
        parent::__construct();

        $this->path = $path;
    }

    public static function fromArray(array $array): InputFileLocal
    {
        return new static(
            $array['path'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'path' => $this->path,
        ];
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
