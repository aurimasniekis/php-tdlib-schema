<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Apple Push Notification service
 */
class DeviceTokenApplePush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenApplePush';

    /**
     * Device token; may be empty to deregister a device
     *
     * @var string
     */
    protected string $deviceToken;

    /**
     * True, if App Sandbox is enabled
     *
     * @var bool
     */
    protected bool $isAppSandbox;

    public function __construct(string $deviceToken, bool $isAppSandbox)
    {
        parent::__construct();

        $this->deviceToken = $deviceToken;
        $this->isAppSandbox = $isAppSandbox;
    }

    public static function fromArray(array $array): DeviceTokenApplePush
    {
        return new static(
            $array['device_token'],
            $array['is_app_sandbox'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'device_token' => $this->deviceToken,
            'is_app_sandbox' => $this->isAppSandbox,
        ];
    }

    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    public function getIsAppSandbox(): bool
    {
        return $this->isAppSandbox;
    }
}
