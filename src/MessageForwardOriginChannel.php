<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was originally a post in a channel
 */
class MessageForwardOriginChannel extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginChannel';

    /**
     * Identifier of the chat from which the message was originally forwarded
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier of the original message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Original post author signature
     *
     * @var string
     */
    protected string $authorSignature;

    public function __construct(int $chatId, int $messageId, string $authorSignature)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->authorSignature = $authorSignature;
    }

    public static function fromArray(array $array): MessageForwardOriginChannel
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['author_signature'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'author_signature' => $this->authorSignature,
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

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }
}
