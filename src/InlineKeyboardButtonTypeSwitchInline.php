<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A button that forces an inline query to the bot to be inserted in the input field
 */
class InlineKeyboardButtonTypeSwitchInline extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeSwitchInline';

    /**
     * Inline query to be sent to the bot
     *
     * @var string
     */
    protected string $query;

    /**
     * True, if the inline query must be sent from the current chat
     *
     * @var bool
     */
    protected bool $inCurrentChat;

    public function __construct(string $query, bool $inCurrentChat)
    {
        parent::__construct();

        $this->query = $query;
        $this->inCurrentChat = $inCurrentChat;
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeSwitchInline
    {
        return new static(
            $array['query'],
            $array['in_current_chat'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'in_current_chat' => $this->inCurrentChat,
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getInCurrentChat(): bool
    {
        return $this->inCurrentChat;
    }
}
