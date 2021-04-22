<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns already available Telegram Passport elements suitable for completing a Telegram Passport authorization form. Result can be received only once for each authorization form.
 */
class GetPassportAuthorizationFormAvailableElements extends TdFunction
{
    public const TYPE_NAME = 'getPassportAuthorizationFormAvailableElements';

    /**
     * Authorization form identifier.
     */
    protected int $autorizationFormId;

    /**
     * Password of the current user.
     */
    protected string $password;

    public function __construct(int $autorizationFormId, string $password)
    {
        $this->autorizationFormId = $autorizationFormId;
        $this->password           = $password;
    }

    public static function fromArray(array $array): GetPassportAuthorizationFormAvailableElements
    {
        return new static(
            $array['autorization_form_id'],
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'autorization_form_id' => $this->autorizationFormId,
            'password'             => $this->password,
        ];
    }

    public function getAutorizationFormId(): int
    {
        return $this->autorizationFormId;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
