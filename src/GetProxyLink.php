<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns an HTTPS link, which can be used to add a proxy. Available only for SOCKS5 and MTProto proxies. Can be called before authorization.
 */
class GetProxyLink extends TdFunction
{
    public const TYPE_NAME = 'getProxyLink';

    /**
     * Proxy identifier.
     */
    protected int $proxyId;

    public function __construct(int $proxyId)
    {
        $this->proxyId = $proxyId;
    }

    public static function fromArray(array $array): GetProxyLink
    {
        return new static(
            $array['proxy_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
        ];
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }
}
