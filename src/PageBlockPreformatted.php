<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A preformatted text paragraph
 */
class PageBlockPreformatted extends PageBlock
{
    public const TYPE_NAME = 'pageBlockPreformatted';

    /**
     * Paragraph text
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * Programming language for which the text needs to be formatted
     *
     * @var string
     */
    protected string $language;

    public function __construct(RichText $text, string $language)
    {
        parent::__construct();

        $this->text = $text;
        $this->language = $language;
    }

    public static function fromArray(array $array): PageBlockPreformatted
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['language'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'language' => $this->language,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }
}
