<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Applies if a user enters new credentials on a payment provider website
 */
class InputCredentialsNew extends InputCredentials
{
    public const TYPE_NAME = 'inputCredentialsNew';

    /**
     * Contains JSON-encoded data with a credential identifier from the payment provider
     *
     * @var string
     */
    protected string $data;

    /**
     * True, if the credential identifier can be saved on the server side
     *
     * @var bool
     */
    protected bool $allowSave;

    public function __construct(string $data, bool $allowSave)
    {
        parent::__construct();

        $this->data = $data;
        $this->allowSave = $allowSave;
    }

    public static function fromArray(array $array): InputCredentialsNew
    {
        return new static(
            $array['data'],
            $array['allow_save'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data' => $this->data,
            'allow_save' => $this->allowSave,
        ];
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }
}
