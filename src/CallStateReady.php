<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The call is ready to use.
 */
class CallStateReady extends CallState
{
    public const TYPE_NAME = 'callStateReady';

    /**
     * Call protocols supported by the peer.
     */
    protected CallProtocol $protocol;

    /**
     * List of available call servers.
     *
     * @var CallServer[]
     */
    protected array $servers;

    /**
     * A JSON-encoded call config.
     */
    protected string $config;

    /**
     * Call encryption key.
     */
    protected string $encryptionKey;

    /**
     * Encryption key emojis fingerprint.
     *
     * @var string[]
     */
    protected array $emojis;

    /**
     * True, if peer-to-peer connection is allowed by users privacy settings.
     */
    protected bool $allowP2p;

    public function __construct(CallProtocol $protocol, array $servers, string $config, string $encryptionKey, array $emojis, bool $allowP2p)
    {
        parent::__construct();

        $this->protocol      = $protocol;
        $this->servers       = $servers;
        $this->config        = $config;
        $this->encryptionKey = $encryptionKey;
        $this->emojis        = $emojis;
        $this->allowP2p      = $allowP2p;
    }

    public static function fromArray(array $array): CallStateReady
    {
        return new static(
            TdSchemaRegistry::fromArray($array['protocol']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['servers']),
            $array['config'],
            $array['encryption_key'],
            $array['emojis'],
            $array['allow_p2p'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'protocol'        => $this->protocol->typeSerialize(),
            array_map(fn ($x) => $x->typeSerialize(), $this->servers),
            'config'          => $this->config,
            'encryption_key'  => $this->encryptionKey,
            'emojis'          => $this->emojis,
            'allow_p2p'       => $this->allowP2p,
        ];
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }

    public function getServers(): array
    {
        return $this->servers;
    }

    public function getConfig(): string
    {
        return $this->config;
    }

    public function getEncryptionKey(): string
    {
        return $this->encryptionKey;
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getAllowP2p(): bool
    {
        return $this->allowP2p;
    }
}
