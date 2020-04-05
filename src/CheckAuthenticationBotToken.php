<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks the authentication token of a bot; to log in as a bot. Works only when the current authorization state is authorizationStateWaitPhoneNumber. Can be used instead of setAuthenticationPhoneNumber and checkAuthenticationCode to log in.
 */
class CheckAuthenticationBotToken extends TdFunction
{
    public const TYPE_NAME = 'checkAuthenticationBotToken';

    /**
     * The bot token.
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public static function fromArray(array $array): CheckAuthenticationBotToken
    {
        return new static(
            $array['token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
