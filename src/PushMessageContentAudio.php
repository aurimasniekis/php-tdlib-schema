<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An audio message.
 */
class PushMessageContentAudio extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentAudio';

    /**
     * Message content; may be null.
     *
     * @var Audio|null
     */
    protected ?Audio $audio;

    /**
     * True, if the message is a pinned message with the specified content.
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(?Audio $audio, bool $isPinned)
    {
        parent::__construct();

        $this->audio    = $audio;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentAudio
    {
        return new static(
            (null !== $array['audio'] ? TdSchemaRegistry::fromArray($array['audio']) : null),
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'audio'     => (null !== $this->audio ? $this->audio : null),
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
