<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The payload for a callback button requiring password
 */
class CallbackQueryPayloadDataWithPassword extends CallbackQueryPayload
{
    public const TYPE_NAME = 'callbackQueryPayloadDataWithPassword';

    /**
     * The password for the current user
     *
     * @var string
     */
    protected string $password;

    /**
     * Data that was attached to the callback button
     *
     * @var string
     */
    protected string $data;

    public function __construct(string $password, string $data)
    {
        parent::__construct();

        $this->password = $password;
        $this->data = $data;
    }

    public static function fromArray(array $array): CallbackQueryPayloadDataWithPassword
    {
        return new static(
            $array['password'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'password' => $this->password,
            'data' => $this->data,
        ];
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
