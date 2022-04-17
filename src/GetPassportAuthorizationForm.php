<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a Telegram Passport authorization form for sharing data with a service
 */
class GetPassportAuthorizationForm extends TdFunction
{
    public const TYPE_NAME = 'getPassportAuthorizationForm';

    /**
     * User identifier of the service's bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Telegram Passport element types requested by the service
     *
     * @var string
     */
    protected string $scope;

    /**
     * Service's public key
     *
     * @var string
     */
    protected string $publicKey;

    /**
     * Unique request identifier provided by the service
     *
     * @var string
     */
    protected string $nonce;

    public function __construct(int $botUserId, string $scope, string $publicKey, string $nonce)
    {
        $this->botUserId = $botUserId;
        $this->scope = $scope;
        $this->publicKey = $publicKey;
        $this->nonce = $nonce;
    }

    public static function fromArray(array $array): GetPassportAuthorizationForm
    {
        return new static(
            $array['bot_user_id'],
            $array['scope'],
            $array['public_key'],
            $array['nonce'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'scope' => $this->scope,
            'public_key' => $this->publicKey,
            'nonce' => $this->nonce,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }
}
