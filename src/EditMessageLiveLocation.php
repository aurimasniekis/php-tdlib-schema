<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the message content of a live location. Messages can be edited for a limited period of time specified in the live location. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageLiveLocation extends TdFunction
{
    public const TYPE_NAME = 'editMessageLiveLocation';

    /**
     * The chat the message belongs to.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new message reply markup; for bots only.
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New location content of the message; may be null. Pass null to stop sharing the live location.
     *
     * @var Location|null
     */
    protected ?Location $location;

    public function __construct(int $chatId, int $messageId, ReplyMarkup $replyMarkup, ?Location $location)
    {
        $this->chatId      = $chatId;
        $this->messageId   = $messageId;
        $this->replyMarkup = $replyMarkup;
        $this->location    = $location;
    }

    public static function fromArray(array $array): EditMessageLiveLocation
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'location'     => (isset($this->location) ? $this->location : null),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
