<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A page cover
 */
class PageBlockCover extends PageBlock
{
    public const TYPE_NAME = 'pageBlockCover';

    /**
     * Cover
     *
     * @var PageBlock
     */
    protected PageBlock $cover;

    public function __construct(PageBlock $cover)
    {
        parent::__construct();

        $this->cover = $cover;
    }

    public static function fromArray(array $array): PageBlockCover
    {
        return new static(
            TdSchemaRegistry::fromArray($array['cover']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'cover' => $this->cover->typeSerialize(),
        ];
    }

    public function getCover(): PageBlock
    {
        return $this->cover;
    }
}
