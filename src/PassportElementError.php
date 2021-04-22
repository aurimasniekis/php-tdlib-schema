<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the description of an error in a Telegram Passport element
 */
class PassportElementError extends TdObject
{
    public const TYPE_NAME = 'passportElementError';

    /**
     * Type of the Telegram Passport element which has the error
     *
     * @var PassportElementType
     */
    protected PassportElementType $type;

    /**
     * Error message
     *
     * @var string
     */
    protected string $message;

    /**
     * Error source
     *
     * @var PassportElementErrorSource
     */
    protected PassportElementErrorSource $source;

    public function __construct(PassportElementType $type, string $message, PassportElementErrorSource $source)
    {
        $this->type = $type;
        $this->message = $message;
        $this->source = $source;
    }

    public static function fromArray(array $array): PassportElementError
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['message'],
            TdSchemaRegistry::fromArray($array['source']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'message' => $this->message,
            'source' => $this->source->typeSerialize(),
        ];
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSource(): PassportElementErrorSource
    {
        return $this->source;
    }
}
