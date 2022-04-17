<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A fixed-width rich text
 */
class RichTextFixed extends RichText
{
    public const TYPE_NAME = 'richTextFixed';

    /**
     * Text
     *
     * @var RichText
     */
    protected RichText $text;

    public function __construct(RichText $text)
    {
        parent::__construct();

        $this->text = $text;
    }

    public static function fromArray(array $array): RichTextFixed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }
}
