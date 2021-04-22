<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram call reflector.
 */
class CallServerTypeTelegramReflector extends CallServerType
{
    public const TYPE_NAME = 'callServerTypeTelegramReflector';

    /**
     * A peer tag to be used with the reflector.
     */
    protected string $peerTag;

    public function __construct(string $peerTag)
    {
        parent::__construct();

        $this->peerTag = $peerTag;
    }

    public static function fromArray(array $array): CallServerTypeTelegramReflector
    {
        return new static(
            $array['peer_tag'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'peer_tag' => $this->peerTag,
        ];
    }

    public function getPeerTag(): string
    {
        return $this->peerTag;
    }
}
