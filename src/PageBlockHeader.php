<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A header.
 */
class PageBlockHeader extends PageBlock
{
    public const TYPE_NAME = 'pageBlockHeader';

    /**
     * Header.
     *
     * @var RichText
     */
    protected RichText $header;

    public function __construct(RichText $header)
    {
        parent::__construct();

        $this->header = $header;
    }

    public static function fromArray(array $array): PageBlockHeader
    {
        return new static(
            TdSchemaRegistry::fromArray($array['header']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'header' => $this->header->typeSerialize(),
        ];
    }

    public function getHeader(): RichText
    {
        return $this->header;
    }
}
