<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Apple Push Notification service VoIP notifications
 */
class DeviceTokenApplePushVoIP extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenApplePushVoIP';

    /**
     * Device token; may be empty to de-register a device
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

    /**
     * True, if push notifications should be additionally encrypted
     *
     * @var bool
     */
    protected bool $encrypt;

    public function __construct(string $deviceToken, bool $isAppSandbox, bool $encrypt)
    {
        parent::__construct();

        $this->deviceToken = $deviceToken;
        $this->isAppSandbox = $isAppSandbox;
        $this->encrypt = $encrypt;
    }

    public static function fromArray(array $array): DeviceTokenApplePushVoIP
    {
        return new static(
            $array['device_token'],
            $array['is_app_sandbox'],
            $array['encrypt'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'device_token' => $this->deviceToken,
            'is_app_sandbox' => $this->isAppSandbox,
            'encrypt' => $this->encrypt,
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

    public function getEncrypt(): bool
    {
        return $this->encrypt;
    }
}
