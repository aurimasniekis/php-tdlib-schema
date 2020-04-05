<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new incoming query; for bots only.
 */
class UpdateNewCustomQuery extends Update
{
    public const TYPE_NAME = 'updateNewCustomQuery';

    /**
     * The query identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * JSON-serialized query data.
     *
     * @var string
     */
    protected string $data;

    /**
     * Query timeout.
     *
     * @var int
     */
    protected int $timeout;

    public function __construct(int $id, string $data, int $timeout)
    {
        parent::__construct();

        $this->id      = $id;
        $this->data    = $data;
        $this->timeout = $timeout;
    }

    public static function fromArray(array $array): UpdateNewCustomQuery
    {
        return new static(
            $array['id'],
            $array['data'],
            $array['timeout'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'id'      => $this->id,
            'data'    => $this->data,
            'timeout' => $this->timeout,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
