<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns all entities (mentions, hashtags, cashtags, bot commands, bank card numbers, URLs, and email addresses) contained in the text. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class GetTextEntities extends TdFunction
{
    public const TYPE_NAME = 'getTextEntities';

    /**
     * The text in which to look for entites.
     *
     * @var string
     */
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): GetTextEntities
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
