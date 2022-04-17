<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a custom request; for bots only
 */
class SendCustomRequest extends TdFunction
{
    public const TYPE_NAME = 'sendCustomRequest';

    /**
     * The method name
     *
     * @var string
     */
    protected string $method;

    /**
     * JSON-serialized method parameters
     *
     * @var string
     */
    protected string $parameters;

    public function __construct(string $method, string $parameters)
    {
        $this->method = $method;
        $this->parameters = $parameters;
    }

    public static function fromArray(array $array): SendCustomRequest
    {
        return new static(
            $array['method'],
            $array['parameters'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'method' => $this->method,
            'parameters' => $this->parameters,
        ];
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getParameters(): string
    {
        return $this->parameters;
    }
}
