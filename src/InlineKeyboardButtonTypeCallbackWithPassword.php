<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A button that asks for password of the current user and then sends a callback query to a bot.
 */
class InlineKeyboardButtonTypeCallbackWithPassword extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeCallbackWithPassword';

    /**
     * Data to be sent to the bot via a callback query.
     */
    protected string $data;

    public function __construct(string $data)
    {
        parent::__construct();

        $this->data = $data;
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeCallbackWithPassword
    {
        return new static(
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }

    public function getData(): string
    {
        return $this->data;
    }
}
