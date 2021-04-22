<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an HTML code for embedding the message. Available only for messages in supergroups and channels with a username
 */
class GetMessageEmbeddingCode extends TdFunction
{
    public const TYPE_NAME = 'getMessageEmbeddingCode';

    /**
     * Identifier of the chat to which the message belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Pass true to return an HTML code for embedding of the whole media album
     *
     * @var bool
     */
    protected bool $forAlbum;

    public function __construct(int $chatId, int $messageId, bool $forAlbum)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->forAlbum = $forAlbum;
    }

    public static function fromArray(array $array): GetMessageEmbeddingCode
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['for_album'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'for_album' => $this->forAlbum,
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

    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }
}
