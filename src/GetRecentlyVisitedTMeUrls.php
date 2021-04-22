<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns t.me URLs recently visited by a newly registered user.
 */
class GetRecentlyVisitedTMeUrls extends TdFunction
{
    public const TYPE_NAME = 'getRecentlyVisitedTMeUrls';

    /**
     * Google Play referrer to identify the user.
     */
    protected string $referrer;

    public function __construct(string $referrer)
    {
        $this->referrer = $referrer;
    }

    public static function fromArray(array $array): GetRecentlyVisitedTMeUrls
    {
        return new static(
            $array['referrer'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'referrer' => $this->referrer,
        ];
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }
}
