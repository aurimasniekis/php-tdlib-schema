<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for a background by its name.
 */
class SearchBackground extends TdFunction
{
    public const TYPE_NAME = 'searchBackground';

    /**
     * The name of the background.
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromArray(array $array): SearchBackground
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
