<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link contains an authentication code. Call checkAuthenticationCode with the code if the current authorization state is authorizationStateWaitCode
 */
class InternalLinkTypeAuthenticationCode extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeAuthenticationCode';

    /**
     * The authentication code
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        parent::__construct();

        $this->code = $code;
    }

    public static function fromArray(array $array): InternalLinkTypeAuthenticationCode
    {
        return new static(
            $array['code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code' => $this->code,
        ];
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
