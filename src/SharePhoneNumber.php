<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Shares the phone number of the current user with a mutual contact. Supposed to be called when the user clicks on chatActionBarSharePhoneNumber.
 */
class SharePhoneNumber extends TdFunction
{
    public const TYPE_NAME = 'sharePhoneNumber';

    /**
     * Identifier of the user with whom to share the phone number. The user must be a mutual contact.
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public static function fromArray(array $array): SharePhoneNumber
    {
        return new static(
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
