<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Microsoft Push Notification Service VoIP channel
 */
class DeviceTokenMicrosoftPushVoIP extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenMicrosoftPushVoIP';

    /**
     * Push notification channel URI; may be empty to de-register a device
     *
     * @var string
     */
    protected string $channelUri;

    public function __construct(string $channelUri)
    {
        parent::__construct();

        $this->channelUri = $channelUri;
    }

    public static function fromArray(array $array): DeviceTokenMicrosoftPushVoIP
    {
        return new static(
            $array['channel_uri'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'channel_uri' => $this->channelUri,
        ];
    }

    public function getChannelUri(): string
    {
        return $this->channelUri;
    }
}
