<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * TDLib needs the user's authentication code to authorize.
 */
class AuthorizationStateWaitCode extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitCode';

    /**
     * Information about the authorization code that was sent.
     */
    protected AuthenticationCodeInfo $codeInfo;

    public function __construct(AuthenticationCodeInfo $codeInfo)
    {
        parent::__construct();

        $this->codeInfo = $codeInfo;
    }

    public static function fromArray(array $array): AuthorizationStateWaitCode
    {
        return new static(
            TdSchemaRegistry::fromArray($array['code_info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'code_info' => $this->codeInfo->typeSerialize(),
        ];
    }

    public function getCodeInfo(): AuthenticationCodeInfo
    {
        return $this->codeInfo;
    }
}
