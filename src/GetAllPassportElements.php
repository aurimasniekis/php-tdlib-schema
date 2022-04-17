<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns all available Telegram Passport elements
 */
class GetAllPassportElements extends TdFunction
{
    public const TYPE_NAME = 'getAllPassportElements';

    /**
     * Password of the current user
     *
     * @var string
     */
    protected string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public static function fromArray(array $array): GetAllPassportElements
    {
        return new static(
            $array['password'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'password' => $this->password,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
