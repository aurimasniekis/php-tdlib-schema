<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the extension of a file, guessed by its MIME type. Returns an empty string on failure. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class GetFileExtension extends TdFunction
{
    public const TYPE_NAME = 'getFileExtension';

    /**
     * The MIME type of the file.
     *
     * @var string
     */
    protected string $mimeType;

    public function __construct(string $mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public static function fromArray(array $array): GetFileExtension
    {
        return new static(
            $array['mime_type'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'mime_type' => $this->mimeType,
        ];
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }
}
