<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains some text.
 */
class Text extends TdObject
{
    public const TYPE_NAME = 'text';

    /**
     * Text.
     */
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): Text
    {
        return new static(
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }
}
