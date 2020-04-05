<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The view count of the message has changed.
 */
class UpdateMessageViews extends Update
{
    public const TYPE_NAME = 'updateMessageViews';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * New value of the view count.
     *
     * @var int
     */
    protected int $views;

    public function __construct(int $chatId, int $messageId, int $views)
    {
        parent::__construct();

        $this->chatId    = $chatId;
        $this->messageId = $messageId;
        $this->views     = $views;
    }

    public static function fromArray(array $array): UpdateMessageViews
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['views'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'views'      => $this->views,
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

    public function getViews(): int
    {
        return $this->views;
    }
}
