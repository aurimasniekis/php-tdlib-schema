<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Information about a bank card
 */
class BankCardInfo extends TdObject
{
    public const TYPE_NAME = 'bankCardInfo';

    /**
     * Title of the bank card description
     *
     * @var string
     */
    protected string $title;

    /**
     * Actions that can be done with the bank card number
     *
     * @var BankCardActionOpenUrl[]
     */
    protected array $actions;

    public function __construct(string $title, array $actions)
    {
        $this->title = $title;
        $this->actions = $actions;
    }

    public static function fromArray(array $array): BankCardInfo
    {
        return new static(
            $array['title'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['actions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            array_map(fn($x) => $x->typeSerialize(), $this->actions),
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getActions(): array
    {
        return $this->actions;
    }
}
