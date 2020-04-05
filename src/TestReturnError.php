<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the specified error and ensures that the Error object is used; for testing only. This is an offline method. Can be called before authorization. Can be called synchronously.
 */
class TestReturnError extends TdFunction
{
    public const TYPE_NAME = 'testReturnError';

    /**
     * The error to be returned.
     *
     * @var Error
     */
    protected Error $error;

    public function __construct(Error $error)
    {
        $this->error = $error;
    }

    public static function fromArray(array $array): TestReturnError
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
