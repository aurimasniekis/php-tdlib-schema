<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a web page preview by the text of the message. Do not call this function too often. Returns a 404 error if the web page has no preview.
 */
class GetWebPagePreview extends TdFunction
{
    public const TYPE_NAME = 'getWebPagePreview';

    /**
     * Message text with formatting.
     */
    protected FormattedText $text;

    public function __construct(FormattedText $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): GetWebPagePreview
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
