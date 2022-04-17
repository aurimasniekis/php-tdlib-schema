<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A scope covering all administrators of a chat
 */
class BotCommandScopeChatAdministrators extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeChatAdministrators';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        parent::__construct();

        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): BotCommandScopeChatAdministrators
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
