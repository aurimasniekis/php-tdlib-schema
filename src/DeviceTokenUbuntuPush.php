<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Ubuntu Push Client service.
 */
class DeviceTokenUbuntuPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenUbuntuPush';

    /**
     * Token; may be empty to de-register a device.
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        parent::__construct();

        $this->token = $token;
    }

    public static function fromArray(array $array): DeviceTokenUbuntuPush
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
