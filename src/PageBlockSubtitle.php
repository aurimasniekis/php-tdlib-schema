<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The subtitle of a page.
 */
class PageBlockSubtitle extends PageBlock
{
    public const TYPE_NAME = 'pageBlockSubtitle';

    /**
     * Subtitle.
     */
    protected RichText $subtitle;

    public function __construct(RichText $subtitle)
    {
        parent::__construct();

        $this->subtitle = $subtitle;
    }

    public static function fromArray(array $array): PageBlockSubtitle
    {
        return new static(
            TdSchemaRegistry::fromArray($array['subtitle']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'subtitle' => $this->subtitle->typeSerialize(),
        ];
    }

    public function getSubtitle(): RichText
    {
        return $this->subtitle;
    }
}
