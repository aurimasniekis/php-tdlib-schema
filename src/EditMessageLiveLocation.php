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
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     */
    protected int $messageId;

    /**
     * The new message reply markup; for bots only.
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New location content of the message; may be null. Pass null to stop sharing the live location.
     */
    protected ?Location $location;

    /**
     * The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
     */
    protected int $heading;

    /**
     * The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled.
     */
    protected int $proximityAlertRadius;

    public function __construct(
        int $chatId,
        int $messageId,
        ReplyMarkup $replyMarkup,
        ?Location $location,
        int $heading,
        int $proximityAlertRadius
    ) {
        $this->chatId               = $chatId;
        $this->messageId            = $messageId;
        $this->replyMarkup          = $replyMarkup;
        $this->location             = $location;
        $this->heading              = $heading;
        $this->proximityAlertRadius = $proximityAlertRadius;
    }

    public static function fromArray(array $array): EditMessageLiveLocation
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
            $array['heading'],
            $array['proximity_alert_radius'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'message_id'             => $this->messageId,
            'reply_markup'           => $this->replyMarkup->typeSerialize(),
            'location'               => (isset($this->location) ? $this->location : null),
            'heading'                => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
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

    public function getHeading(): int
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }
}
