<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Replaces text entities with Markdown formatting in a human-friendly format. Entities that can't be represented in Markdown unambiguously are kept as is. Can be called synchronously.
 */
class GetMarkdownText extends TdFunction
{
    public const TYPE_NAME = 'getMarkdownText';

    /**
     * The text.
     */
    protected FormattedText $text;

    public function __construct(FormattedText $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): GetMarkdownText
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
