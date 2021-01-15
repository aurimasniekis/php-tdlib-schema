<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for Simple Push API for Firefox OS.
 */
class DeviceTokenSimplePush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenSimplePush';

    /**
     * Absolute URL exposed by the push service where the application server can send push messages; may be empty to de-register a device.
     *
     * @var string
     */
    protected string $endpoint;

    public function __construct(string $endpoint)
    {
        parent::__construct();

        $this->endpoint = $endpoint;
    }

    public static function fromArray(array $array): DeviceTokenSimplePush
    {
        return new static(
            $array['endpoint'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'endpoint' => $this->endpoint,
        ];
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
}
