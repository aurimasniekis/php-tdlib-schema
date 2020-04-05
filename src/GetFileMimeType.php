<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the MIME type of a file, guessed by its extension. Returns an empty string on failure. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class GetFileMimeType extends TdFunction
{
    public const TYPE_NAME = 'getFileMimeType';

    /**
     * The name of the file or path to the file.
     *
     * @var string
     */
    protected string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public static function fromArray(array $array): GetFileMimeType
    {
        return new static(
            $array['file_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_name' => $this->fileName,
        ];
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
}
