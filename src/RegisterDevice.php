<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Registers the currently used device for receiving push notifications. Returns a globally unique identifier of the push notification subscription.
 */
class RegisterDevice extends TdFunction
{
    public const TYPE_NAME = 'registerDevice';

    /**
     * Device token.
     */
    protected DeviceToken $deviceToken;

    /**
     * List of user identifiers of other users currently using the application.
     *
     * @var int[]
     */
    protected array $otherUserIds;

    public function __construct(DeviceToken $deviceToken, array $otherUserIds)
    {
        $this->deviceToken  = $deviceToken;
        $this->otherUserIds = $otherUserIds;
    }

    public static function fromArray(array $array): RegisterDevice
    {
        return new static(
            TdSchemaRegistry::fromArray($array['device_token']),
            $array['other_user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'device_token'   => $this->deviceToken->typeSerialize(),
            'other_user_ids' => $this->otherUserIds,
        ];
    }

    public function getDeviceToken(): DeviceToken
    {
        return $this->deviceToken;
    }

    public function getOtherUserIds(): array
    {
        return $this->otherUserIds;
    }
}
