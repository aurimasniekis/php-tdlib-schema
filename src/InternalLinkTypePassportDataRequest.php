<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link contains a request of Telegram passport data. Call getPassportAuthorizationForm with the given parameters to process the link if the link was received from outside of the app, otherwise ignore it
 */
class InternalLinkTypePassportDataRequest extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePassportDataRequest';

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

    /**
     * An HTTP URL to open once the request is finished or canceled with the parameter tg_passport=success or tg_passport=cancel respectively. If empty, then the link tgbot{bot_user_id}://passport/success or tgbot{bot_user_id}://passport/cancel needs to be opened instead
     *
     * @var string
     */
    protected string $callbackUrl;

    public function __construct(int $botUserId, string $scope, string $publicKey, string $nonce, string $callbackUrl)
    {
        parent::__construct();

        $this->botUserId = $botUserId;
        $this->scope = $scope;
        $this->publicKey = $publicKey;
        $this->nonce = $nonce;
        $this->callbackUrl = $callbackUrl;
    }

    public static function fromArray(array $array): InternalLinkTypePassportDataRequest
    {
        return new static(
            $array['bot_user_id'],
            $array['scope'],
            $array['public_key'],
            $array['nonce'],
            $array['callback_url'],
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
            'callback_url' => $this->callbackUrl,
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

    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }
}
