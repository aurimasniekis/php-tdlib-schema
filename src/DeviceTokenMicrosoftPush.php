<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Microsoft Push Notification Service.
 */
class DeviceTokenMicrosoftPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenMicrosoftPush';

    /**
     * Push notification channel URI; may be empty to de-register a device.
     */
    protected string $channelUri;

    public function __construct(string $channelUri)
    {
        parent::__construct();

        $this->channelUri = $channelUri;
    }

    public static function fromArray(array $array): DeviceTokenMicrosoftPush
    {
        return new static(
            $array['channel_uri'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'channel_uri' => $this->channelUri,
        ];
    }

    public function getChannelUri(): string
    {
        return $this->channelUri;
    }
}
