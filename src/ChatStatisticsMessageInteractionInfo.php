<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains statistics about interactions with a message.
 */
class ChatStatisticsMessageInteractionInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsMessageInteractionInfo';

    /**
     * Message identifier.
     */
    protected int $messageId;

    /**
     * Number of times the message was viewed.
     */
    protected int $viewCount;

    /**
     * Number of times the message was forwarded.
     */
    protected int $forwardCount;

    public function __construct(int $messageId, int $viewCount, int $forwardCount)
    {
        $this->messageId    = $messageId;
        $this->viewCount    = $viewCount;
        $this->forwardCount = $forwardCount;
    }

    public static function fromArray(array $array): ChatStatisticsMessageInteractionInfo
    {
        return new static(
            $array['message_id'],
            $array['view_count'],
            $array['forward_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'message_id'    => $this->messageId,
            'view_count'    => $this->viewCount,
            'forward_count' => $this->forwardCount,
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }
}
