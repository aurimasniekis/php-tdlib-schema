<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Parses Markdown entities in a human-friendly format, ignoring markup errors. Can be called synchronously.
 */
class ParseMarkdown extends TdFunction
{
    public const TYPE_NAME = 'parseMarkdown';

    /**
     * The text to parse. For example, "__italic__ ~~strikethrough~~ **bold** `code` ```pre``` __[italic__ text_url](telegram.org) __italic**bold italic__bold**".
     */
    protected FormattedText $text;

    public function __construct(FormattedText $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): ParseMarkdown
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text->typeSerialize(),
        ];
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }
}
