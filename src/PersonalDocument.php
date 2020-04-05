<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A personal document, containing some information about a user.
 */
class PersonalDocument extends TdObject
{
    public const TYPE_NAME = 'personalDocument';

    /**
     * List of files containing the pages of the document.
     *
     * @var DatedFile[]
     */
    protected array $files;

    /**
     * List of files containing a certified English translation of the document.
     *
     * @var DatedFile[]
     */
    protected array $translation;

    public function __construct(array $files, array $translation)
    {
        $this->files       = $files;
        $this->translation = $translation;
    }

    public static function fromArray(array $array): PersonalDocument
    {
        return new static(
            array_map(fn ($x) => DatedFile::fromArray($x), $array['files']),
            array_map(fn ($x) => DatedFile::fromArray($x), $array['translation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->files),
            array_map(fn ($x) => $x->typeSerialize(), $this->translation),
        ];
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getTranslation(): array
    {
        return $this->translation;
    }
}
