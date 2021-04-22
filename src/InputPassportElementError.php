<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the description of an error in a Telegram Passport element; for bots only.
 */
class InputPassportElementError extends TdObject
{
    public const TYPE_NAME = 'inputPassportElementError';

    /**
     * Type of Telegram Passport element that has the error.
     */
    protected PassportElementType $type;

    /**
     * Error message.
     */
    protected string $message;

    /**
     * Error source.
     */
    protected InputPassportElementErrorSource $source;

    public function __construct(PassportElementType $type, string $message, InputPassportElementErrorSource $source)
    {
        $this->type    = $type;
        $this->message = $message;
        $this->source  = $source;
    }

    public static function fromArray(array $array): InputPassportElementError
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
            '@type'   => static::TYPE_NAME,
            'type'    => $this->type->typeSerialize(),
            'message' => $this->message,
            'source'  => $this->source->typeSerialize(),
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

    public function getSource(): InputPassportElementErrorSource
    {
        return $this->source;
    }
}
