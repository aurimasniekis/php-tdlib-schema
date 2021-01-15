<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a forwarded message.
 */
class MessageForwardInfo extends TdObject
{
    public const TYPE_NAME = 'messageForwardInfo';

    /**
     * Origin of a forwarded message.
     */
    protected MessageForwardOrigin $origin;

    /**
     * Point in time (Unix timestamp) when the message was originally sent.
     */
    protected int $date;

    /**
     * The type of a public service announcement for the forwarded message.
     */
    protected string $publicServiceAnnouncementType;

    /**
     * For messages forwarded to the chat with the current user (Saved Messages), to the Replies bot chat, or to the channel's discussion group, the identifier of the chat from which the message was forwarded last time; 0 if unknown.
     */
    protected int $fromChatId;

    /**
     * For messages forwarded to the chat with the current user (Saved Messages), to the Replies bot chat, or to the channel's discussion group, the identifier of the original message from which the new message was forwarded last time; 0 if unknown.
     */
    protected int $fromMessageId;

    public function __construct(MessageForwardOrigin $origin, int $date, string $publicServiceAnnouncementType, int $fromChatId, int $fromMessageId)
    {
        $this->origin                        = $origin;
        $this->date                          = $date;
        $this->publicServiceAnnouncementType = $publicServiceAnnouncementType;
        $this->fromChatId                    = $fromChatId;
        $this->fromMessageId                 = $fromMessageId;
    }

    public static function fromArray(array $array): MessageForwardInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['origin']),
            $array['date'],
            $array['public_service_announcement_type'],
            $array['from_chat_id'],
            $array['from_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'origin'                           => $this->origin->typeSerialize(),
            'date'                             => $this->date,
            'public_service_announcement_type' => $this->publicServiceAnnouncementType,
            'from_chat_id'                     => $this->fromChatId,
            'from_message_id'                  => $this->fromMessageId,
        ];
    }

    public function getOrigin(): MessageForwardOrigin
    {
        return $this->origin;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getPublicServiceAnnouncementType(): string
    {
        return $this->publicServiceAnnouncementType;
    }

    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }
}
