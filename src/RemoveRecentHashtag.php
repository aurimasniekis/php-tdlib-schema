<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Removes a hashtag from the list of recently used hashtags.
 */
class RemoveRecentHashtag extends TdFunction
{
    public const TYPE_NAME = 'removeRecentHashtag';

    /**
     * Hashtag to delete.
     *
     * @var string
     */
    protected string $hashtag;

    public function __construct(string $hashtag)
    {
        $this->hashtag = $hashtag;
    }

    public static function fromArray(array $array): RemoveRecentHashtag
    {
        return new static(
            $array['hashtag'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'hashtag' => $this->hashtag,
        ];
    }

    public function getHashtag(): string
    {
        return $this->hashtag;
    }
}
