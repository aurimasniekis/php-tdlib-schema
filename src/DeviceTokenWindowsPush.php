<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Windows Push Notification Services.
 */
class DeviceTokenWindowsPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenWindowsPush';

    /**
     * The access token that will be used to send notifications; may be empty to de-register a device.
     */
    protected string $accessToken;

    public function __construct(string $accessToken)
    {
        parent::__construct();

        $this->accessToken = $accessToken;
    }

    public static function fromArray(array $array): DeviceTokenWindowsPush
    {
        return new static(
            $array['access_token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'access_token' => $this->accessToken,
        ];
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
