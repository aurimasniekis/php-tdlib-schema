<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Computes time needed to receive a response from a Telegram server through a proxy. Can be called before authorization
 */
class PingProxy extends TdFunction
{
    public const TYPE_NAME = 'pingProxy';

    /**
     * Proxy identifier. Use 0 to ping a Telegram server without a proxy
     *
     * @var int
     */
    protected int $proxyId;

    public function __construct(int $proxyId)
    {
        $this->proxyId = $proxyId;
    }

    public static function fromArray(array $array): PingProxy
    {
        return new static(
            $array['proxy_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'proxy_id' => $this->proxyId,
        ];
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }
}
