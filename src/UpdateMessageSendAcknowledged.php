<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A request to send a message has reached the Telegram server. This doesn't mean that the message will be sent successfully or even that the send message request will be processed. This update will be sent only if the option "use_quick_ack" is set to true. This update may be sent multiple times for the same message.
 */
class UpdateMessageSendAcknowledged extends Update
{
    public const TYPE_NAME = 'updateMessageSendAcknowledged';

    /**
     * The chat identifier of the sent message.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * A temporary message identifier.
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        parent::__construct();

        $this->chatId    = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): UpdateMessageSendAcknowledged
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
