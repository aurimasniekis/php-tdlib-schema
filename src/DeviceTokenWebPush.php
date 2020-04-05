<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A token for web Push API.
 */
class DeviceTokenWebPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenWebPush';

    /**
     * Absolute URL exposed by the push service where the application server can send push messages; may be empty to de-register a device.
     *
     * @var string
     */
    protected string $endpoint;

    /**
     * Base64url-encoded P-256 elliptic curve Diffie-Hellman public key.
     *
     * @var string
     */
    protected string $p256dhBase64url;

    /**
     * Base64url-encoded authentication secret.
     *
     * @var string
     */
    protected string $authBase64url;

    public function __construct(string $endpoint, string $p256dhBase64url, string $authBase64url)
    {
        parent::__construct();

        $this->endpoint        = $endpoint;
        $this->p256dhBase64url = $p256dhBase64url;
        $this->authBase64url   = $authBase64url;
    }

    public static function fromArray(array $array): DeviceTokenWebPush
    {
        return new static(
            $array['endpoint'],
            $array['p256dh_base64url'],
            $array['auth_base64url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'endpoint'         => $this->endpoint,
            'p256dh_base64url' => $this->p256dhBase64url,
            'auth_base64url'   => $this->authBase64url,
        ];
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function getP256dhBase64url(): string
    {
        return $this->p256dhBase64url;
    }

    public function getAuthBase64url(): string
    {
        return $this->authBase64url;
    }
}
