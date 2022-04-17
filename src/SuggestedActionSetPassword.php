<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Suggests the user to set a 2-step verification password to be able to log in again
 */
class SuggestedActionSetPassword extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionSetPassword';

    /**
     * The number of days to pass between consecutive authorizations if the user declines to set password
     *
     * @var int
     */
    protected int $authorizationDelay;

    public function __construct(int $authorizationDelay)
    {
        parent::__construct();

        $this->authorizationDelay = $authorizationDelay;
    }

    public static function fromArray(array $array): SuggestedActionSetPassword
    {
        return new static(
            $array['authorization_delay'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'authorization_delay' => $this->authorizationDelay,
        ];
    }

    public function getAuthorizationDelay(): int
    {
        return $this->authorizationDelay;
    }
}
