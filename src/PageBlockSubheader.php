<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A subheader.
 */
class PageBlockSubheader extends PageBlock
{
    public const TYPE_NAME = 'pageBlockSubheader';

    /**
     * Subheader.
     */
    protected RichText $subheader;

    public function __construct(RichText $subheader)
    {
        parent::__construct();

        $this->subheader = $subheader;
    }

    public static function fromArray(array $array): PageBlockSubheader
    {
        return new static(
            TdSchemaRegistry::fromArray($array['subheader']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'subheader' => $this->subheader->typeSerialize(),
        ];
    }

    public function getSubheader(): RichText
    {
        return $this->subheader;
    }
}
