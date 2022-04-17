<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of available TDLib internal log tags
 */
class LogTags extends TdObject
{
    public const TYPE_NAME = 'logTags';

    /**
     * List of log tags
     *
     * @var string[]
     */
    protected array $tags;

    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }

    public static function fromArray(array $array): LogTags
    {
        return new static(
            $array['tags'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tags' => $this->tags,
        ];
    }

    public function getTags(): array
    {
        return $this->tags;
    }
}
