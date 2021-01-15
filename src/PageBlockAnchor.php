<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An invisible anchor on a page, which can be used in a URL to open the page from the specified anchor.
 */
class PageBlockAnchor extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAnchor';

    /**
     * Name of the anchor.
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        parent::__construct();

        $this->name = $name;
    }

    public static function fromArray(array $array): PageBlockAnchor
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
