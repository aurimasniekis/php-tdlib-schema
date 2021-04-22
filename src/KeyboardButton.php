<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a single button in a bot keyboard
 */
class KeyboardButton extends TdObject
{
    public const TYPE_NAME = 'keyboardButton';

    /**
     * Text of the button
     *
     * @var string
     */
    protected string $text;

    /**
     * Type of the button
     *
     * @var KeyboardButtonType
     */
    protected KeyboardButtonType $type;

    public function __construct(string $text, KeyboardButtonType $type)
    {
        $this->text = $text;
        $this->type = $type;
    }

    public static function fromArray(array $array): KeyboardButton
    {
        return new static(
            $array['text'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): KeyboardButtonType
    {
        return $this->type;
    }
}
