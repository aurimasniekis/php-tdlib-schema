<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The graph data to be asynchronously loaded through getStatisticalGraph
 */
class StatisticalGraphAsync extends StatisticalGraph
{
    public const TYPE_NAME = 'statisticalGraphAsync';

    /**
     * The token to use for data loading
     *
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        parent::__construct();

        $this->token = $token;
    }

    public static function fromArray(array $array): StatisticalGraphAsync
    {
        return new static(
            $array['token'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
