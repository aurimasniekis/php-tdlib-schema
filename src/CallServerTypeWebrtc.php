<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A WebRTC server.
 */
class CallServerTypeWebrtc extends CallServerType
{
    public const TYPE_NAME = 'callServerTypeWebrtc';

    /**
     * Username to be used for authentication.
     */
    protected string $username;

    /**
     * Authentication password.
     */
    protected string $password;

    /**
     * True, if the server supports TURN.
     */
    protected bool $supportsTurn;

    /**
     * True, if the server supports STUN.
     */
    protected bool $supportsStun;

    public function __construct(string $username, string $password, bool $supportsTurn, bool $supportsStun)
    {
        parent::__construct();

        $this->username     = $username;
        $this->password     = $password;
        $this->supportsTurn = $supportsTurn;
        $this->supportsStun = $supportsStun;
    }

    public static function fromArray(array $array): CallServerTypeWebrtc
    {
        return new static(
            $array['username'],
            $array['password'],
            $array['supports_turn'],
            $array['supports_stun'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'username'      => $this->username,
            'password'      => $this->password,
            'supports_turn' => $this->supportsTurn,
            'supports_stun' => $this->supportsStun,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getSupportsTurn(): bool
    {
        return $this->supportsTurn;
    }

    public function getSupportsStun(): bool
    {
        return $this->supportsStun;
    }
}
