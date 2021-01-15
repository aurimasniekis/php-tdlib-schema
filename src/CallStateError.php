<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The call has ended with an error.
 */
class CallStateError extends CallState
{
    public const TYPE_NAME = 'callStateError';

    /**
     * Error. An error with the code 4005000 will be returned if an outgoing call is missed because of an expired timeout.
     *
     * @var Error
     */
    protected Error $error;

    public function __construct(Error $error)
    {
        parent::__construct();

        $this->error = $error;
    }

    public static function fromArray(array $array): CallStateError
    {
        return new static(
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error' => $this->error->typeSerialize(),
        ];
    }

    public function getError(): Error
    {
        return $this->error;
    }
}
