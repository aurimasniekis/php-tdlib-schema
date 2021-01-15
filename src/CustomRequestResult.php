<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the result of a custom request.
 */
class CustomRequestResult extends TdObject
{
    public const TYPE_NAME = 'customRequestResult';

    /**
     * A JSON-serialized result.
     */
    protected string $result;

    public function __construct(string $result)
    {
        $this->result = $result;
    }

    public static function fromArray(array $array): CustomRequestResult
    {
        return new static(
            $array['result'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'result' => $this->result,
        ];
    }

    public function getResult(): string
    {
        return $this->result;
    }
}
