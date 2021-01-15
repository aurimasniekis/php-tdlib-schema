<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A general message with hidden content.
 */
class PushMessageContentHidden extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentHidden';

    /**
     * True, if the message is a pinned message with the specified content.
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(bool $isPinned)
    {
        parent::__construct();

        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentHidden
    {
        return new static(
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
