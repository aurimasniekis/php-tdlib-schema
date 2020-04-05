<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of hashtags.
 */
class Hashtags extends TdObject
{
    public const TYPE_NAME = 'hashtags';

    /**
     * A list of hashtags.
     *
     * @var string[]
     */
    protected array $hashtags;

    public function __construct(array $hashtags)
    {
        $this->hashtags = $hashtags;
    }

    public static function fromArray(array $array): Hashtags
    {
        return new static(
            $array['hashtags'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'hashtags' => $this->hashtags,
        ];
    }

    public function getHashtags(): array
    {
        return $this->hashtags;
    }
}
