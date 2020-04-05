<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An anchor.
 */
class RichTextAnchor extends RichText
{
    public const TYPE_NAME = 'richTextAnchor';

    /**
     * Anchor name.
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        parent::__construct();

        $this->name = $name;
    }

    public static function fromArray(array $array): RichTextAnchor
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
