<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a sponsored message
 */
class SponsoredMessage extends TdObject
{
    public const TYPE_NAME = 'sponsoredMessage';

    /**
     * Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $sponsorChatId;

    /**
     * An internal link to be opened when the sponsored message is clicked; may be null. If null, the sponsor chat needs to be opened instead
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $link;

    /**
     * Content of the message. Currently, can be only of the type messageText
     *
     * @var MessageContent
     */
    protected MessageContent $content;

    public function __construct(int $messageId, int $sponsorChatId, ?InternalLinkType $link, MessageContent $content)
    {
        $this->messageId = $messageId;
        $this->sponsorChatId = $sponsorChatId;
        $this->link = $link;
        $this->content = $content;
    }

    public static function fromArray(array $array): SponsoredMessage
    {
        return new static(
            $array['message_id'],
            $array['sponsor_chat_id'],
            (isset($array['link']) ? TdSchemaRegistry::fromArray($array['link']) : null),
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'sponsor_chat_id' => $this->sponsorChatId,
            'link' => (isset($this->link) ? $this->link : null),
            'content' => $this->content->typeSerialize(),
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSponsorChatId(): int
    {
        return $this->sponsorChatId;
    }

    public function getLink(): ?InternalLinkType
    {
        return $this->link;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }
}
