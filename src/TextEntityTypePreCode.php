<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Text that must be formatted as if inside pre, and code HTML tags
 */
class TextEntityTypePreCode extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypePreCode';

    /**
     * Programming language of the code; as defined by the sender
     *
     * @var string
     */
    protected string $language;

    public function __construct(string $language)
    {
        parent::__construct();

        $this->language = $language;
    }

    public static function fromArray(array $array): TextEntityTypePreCode
    {
        return new static(
            $array['language'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language' => $this->language,
        ];
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}
