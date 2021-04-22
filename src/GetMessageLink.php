<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an HTTPS link to a message in a chat. Available only for already sent messages in supergroups and channels. This is an offline request
 */
class GetMessageLink extends TdFunction
{
    public const TYPE_NAME = 'getMessageLink';

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
     * Pass true to create a link for the whole media album
     *
     * @var bool
     */
    protected bool $forAlbum;

    /**
     * Pass true to create a link to the message as a channel post comment, or from a message thread
     *
     * @var bool
     */
    protected bool $forComment;

    public function __construct(int $chatId, int $messageId, bool $forAlbum, bool $forComment)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->forAlbum = $forAlbum;
        $this->forComment = $forComment;
    }

    public static function fromArray(array $array): GetMessageLink
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['for_album'],
            $array['for_comment'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'for_album' => $this->forAlbum,
            'for_comment' => $this->forComment,
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

    public function getForComment(): bool
    {
        return $this->forComment;
    }
}
