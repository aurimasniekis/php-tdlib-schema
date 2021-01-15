<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Invites a bot to a chat (if it is not yet a member) and sends it the /start command. Bots can't be invited to a private chat other than the chat with the bot. Bots can't be invited to channels (although they can be added as admins) and secret chats. Returns the sent message.
 */
class SendBotStartMessage extends TdFunction
{
    public const TYPE_NAME = 'sendBotStartMessage';

    /**
     * Identifier of the bot.
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Identifier of the target chat.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * A hidden parameter sent to the bot for deep linking purposes (https://core.telegram.org/bots#deep-linking).
     *
     * @var string
     */
    protected string $parameter;

    public function __construct(int $botUserId, int $chatId, string $parameter)
    {
        $this->botUserId = $botUserId;
        $this->chatId    = $chatId;
        $this->parameter = $parameter;
    }

    public static function fromArray(array $array): SendBotStartMessage
    {
        return new static(
            $array['bot_user_id'],
            $array['chat_id'],
            $array['parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'chat_id'     => $this->chatId,
            'parameter'   => $this->parameter,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }
}
