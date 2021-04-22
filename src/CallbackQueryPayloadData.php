<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The payload for a general callback button
 */
class CallbackQueryPayloadData extends CallbackQueryPayload
{
    public const TYPE_NAME = 'callbackQueryPayloadData';

    /**
     * Data that was attached to the callback button
     *
     * @var string
     */
    protected string $data;

    public function __construct(string $data)
    {
        parent::__construct();

        $this->data = $data;
    }

    public static function fromArray(array $array): CallbackQueryPayloadData
    {
        return new static(
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data' => $this->data,
        ];
    }

    public function getData(): string
    {
        return $this->data;
    }
}
