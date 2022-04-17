<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is watching animations sent by the other party by clicking on an animated emoji
 */
class ChatActionWatchingAnimations extends ChatAction
{
    public const TYPE_NAME = 'chatActionWatchingAnimations';

    /**
     * The animated emoji
     *
     * @var string
     */
    protected string $emoji;

    public function __construct(string $emoji)
    {
        parent::__construct();

        $this->emoji = $emoji;
    }

    public static function fromArray(array $array): ChatActionWatchingAnimations
    {
        return new static(
            $array['emoji'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }
}
