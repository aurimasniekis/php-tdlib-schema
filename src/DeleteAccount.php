<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes the account of the current user, deleting all information associated with the user from the server. The phone number of the account can be used to create a new account. Can be called before authorization when the current authorization state is authorizationStateWaitPassword.
 */
class DeleteAccount extends TdFunction
{
    public const TYPE_NAME = 'deleteAccount';

    /**
     * The reason why the account was deleted; optional.
     *
     * @var string
     */
    protected string $reason;

    public function __construct(string $reason)
    {
        $this->reason = $reason;
    }

    public static function fromArray(array $array): DeleteAccount
    {
        return new static(
            $array['reason'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'reason' => $this->reason,
        ];
    }

    public function getReason(): string
    {
        return $this->reason;
    }
}
