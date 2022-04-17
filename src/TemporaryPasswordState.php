<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about the availability of a temporary password, which can be used for payments
 */
class TemporaryPasswordState extends TdObject
{
    public const TYPE_NAME = 'temporaryPasswordState';

    /**
     * True, if a temporary password is available
     *
     * @var bool
     */
    protected bool $hasPassword;

    /**
     * Time left before the temporary password expires, in seconds
     *
     * @var int
     */
    protected int $validFor;

    public function __construct(bool $hasPassword, int $validFor)
    {
        $this->hasPassword = $hasPassword;
        $this->validFor = $validFor;
    }

    public static function fromArray(array $array): TemporaryPasswordState
    {
        return new static(
            $array['has_password'],
            $array['valid_for'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'has_password' => $this->hasPassword,
            'valid_for' => $this->validFor,
        ];
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function getValidFor(): int
    {
        return $this->validFor;
    }
}
