<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An error message to be shown to the user instead of the graph
 */
class StatisticalGraphError extends StatisticalGraph
{
    public const TYPE_NAME = 'statisticalGraphError';

    /**
     * The error message
     *
     * @var string
     */
    protected string $errorMessage;

    public function __construct(string $errorMessage)
    {
        parent::__construct();

        $this->errorMessage = $errorMessage;
    }

    public static function fromArray(array $array): StatisticalGraphError
    {
        return new static(
            $array['error_message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error_message' => $this->errorMessage,
        ];
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
