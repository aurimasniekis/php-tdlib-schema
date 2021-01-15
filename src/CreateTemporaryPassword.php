<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new temporary password for processing payments.
 */
class CreateTemporaryPassword extends TdFunction
{
    public const TYPE_NAME = 'createTemporaryPassword';

    /**
     * Persistent user password.
     *
     * @var string
     */
    protected string $password;

    /**
     * Time during which the temporary password will be valid, in seconds; should be between 60 and 86400.
     *
     * @var int
     */
    protected int $validFor;

    public function __construct(string $password, int $validFor)
    {
        $this->password = $password;
        $this->validFor = $validFor;
    }

    public static function fromArray(array $array): CreateTemporaryPassword
    {
        return new static(
            $array['password'],
            $array['valid_for'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'password'  => $this->password,
            'valid_for' => $this->validFor,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getValidFor(): int
    {
        return $this->validFor;
    }
}
