<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An object of this type can be returned on every function call, in case of an error.
 */
class Error extends TdObject
{
    public const TYPE_NAME = 'error';

    /**
     * Error code; subject to future changes. If the error code is 406, the error message must not be processed in any way and must not be displayed to the user.
     *
     * @var int
     */
    protected int $code;

    /**
     * Error message; subject to future changes.
     *
     * @var string
     */
    protected string $message;

    public function __construct(int $code, string $message)
    {
        $this->code    = $code;
        $this->message = $message;
    }

    public static function fromArray(array $array): Error
    {
        return new static(
            $array['code'],
            $array['message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'code'    => $this->code,
            'message' => $this->message,
        ];
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
