<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about interactions with a message.
 */
class MessageInteractionInfo extends TdObject
{
    public const TYPE_NAME = 'messageInteractionInfo';

    /**
     * Number of times the message was viewed.
     */
    protected int $viewCount;

    /**
     * Number of times the message was forwarded.
     */
    protected int $forwardCount;

    /**
     * Contains information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself.
     */
    protected ?MessageReplyInfo $replyInfo;

    public function __construct(int $viewCount, int $forwardCount, ?MessageReplyInfo $replyInfo)
    {
        $this->viewCount    = $viewCount;
        $this->forwardCount = $forwardCount;
        $this->replyInfo    = $replyInfo;
    }

    public static function fromArray(array $array): MessageInteractionInfo
    {
        return new static(
            $array['view_count'],
            $array['forward_count'],
            (isset($array['reply_info']) ? TdSchemaRegistry::fromArray($array['reply_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'view_count'    => $this->viewCount,
            'forward_count' => $this->forwardCount,
            'reply_info'    => (isset($this->replyInfo) ? $this->replyInfo : null),
        ];
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    public function getReplyInfo(): ?MessageReplyInfo
    {
        return $this->replyInfo;
    }
}
