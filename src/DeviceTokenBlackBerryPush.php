<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for BlackBerry Push Service.
 */
class DeviceTokenBlackBerryPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenBlackBerryPush';

    /**
     * Token; may be empty to de-register a device.
     */
    protected string $token;

    public function __construct(string $token)
    {
        parent::__construct();

        $this->token = $token;
    }

    public static function fromArray(array $array): DeviceTokenBlackBerryPush
    {
        return new static(
            $array['token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
