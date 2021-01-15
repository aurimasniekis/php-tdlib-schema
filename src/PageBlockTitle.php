<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The title of a page.
 */
class PageBlockTitle extends PageBlock
{
    public const TYPE_NAME = 'pageBlockTitle';

    /**
     * Title.
     */
    protected RichText $title;

    public function __construct(RichText $title)
    {
        parent::__construct();

        $this->title = $title;
    }

    public static function fromArray(array $array): PageBlockTitle
    {
        return new static(
            TdSchemaRegistry::fromArray($array['title']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title->typeSerialize(),
        ];
    }

    public function getTitle(): RichText
    {
        return $this->title;
    }
}
