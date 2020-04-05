<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A dice message. The dice value is randomly generated by the server.
 */
class MessageDice extends MessageContent
{
    public const TYPE_NAME = 'messageDice';

    /**
     * The dice value; 0-6. If the value is 0, the dice must roll infinitely.
     *
     * @var int
     */
    protected int $value;

    public function __construct(int $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): MessageDice
    {
        return new static(
            $array['value'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }

    public function getValue(): int
    {
        return $this->value;
    }
}