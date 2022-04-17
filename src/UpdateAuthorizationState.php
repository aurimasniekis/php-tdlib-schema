<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user authorization state has changed
 */
class UpdateAuthorizationState extends Update
{
    public const TYPE_NAME = 'updateAuthorizationState';

    /**
     * New authorization state
     *
     * @var AuthorizationState
     */
    protected AuthorizationState $authorizationState;

    public function __construct(AuthorizationState $authorizationState)
    {
        parent::__construct();

        $this->authorizationState = $authorizationState;
    }

    public static function fromArray(array $array): UpdateAuthorizationState
    {
        return new static(
            TdSchemaRegistry::fromArray($array['authorization_state']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'authorization_state' => $this->authorizationState->typeSerialize(),
        ];
    }

    public function getAuthorizationState(): AuthorizationState
    {
        return $this->authorizationState;
    }
}
