<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The footer of a page
 */
class PageBlockFooter extends PageBlock
{
    public const TYPE_NAME = 'pageBlockFooter';

    /**
     * Footer
     *
     * @var RichText
     */
    protected RichText $footer;

    public function __construct(RichText $footer)
    {
        parent::__construct();

        $this->footer = $footer;
    }

    public static function fromArray(array $array): PageBlockFooter
    {
        return new static(
            TdSchemaRegistry::fromArray($array['footer']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'footer' => $this->footer->typeSerialize(),
        ];
    }

    public function getFooter(): RichText
    {
        return $this->footer;
    }
}
