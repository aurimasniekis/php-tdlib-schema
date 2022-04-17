<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes all call messages
 */
class DeleteAllCallMessages extends TdFunction
{
    public const TYPE_NAME = 'deleteAllCallMessages';

    /**
     * Pass true to delete the messages for all users
     *
     * @var bool
     */
    protected bool $revoke;

    public function __construct(bool $revoke)
    {
        $this->revoke = $revoke;
    }

    public static function fromArray(array $array): DeleteAllCallMessages
    {
        return new static(
            $array['revoke'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'revoke' => $this->revoke,
        ];
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }
}
