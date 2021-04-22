<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An MTProto proxy server
 */
class ProxyTypeMtproto extends ProxyType
{
    public const TYPE_NAME = 'proxyTypeMtproto';

    /**
     * The proxy's secret in hexadecimal encoding
     *
     * @var string
     */
    protected string $secret;

    public function __construct(string $secret)
    {
        parent::__construct();

        $this->secret = $secret;
    }

    public static function fromArray(array $array): ProxyTypeMtproto
    {
        return new static(
            $array['secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'secret' => $this->secret,
        ];
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
