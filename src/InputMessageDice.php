<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A dice message
 */
class InputMessageDice extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageDice';

    /**
     * Emoji on which the dice throw animation is based
     *
     * @var string
     */
    protected string $emoji;

    /**
     * True, if a chat message draft should be deleted
     *
     * @var bool
     */
    protected bool $clearDraft;

    public function __construct(string $emoji, bool $clearDraft)
    {
        parent::__construct();

        $this->emoji = $emoji;
        $this->clearDraft = $clearDraft;
    }

    public static function fromArray(array $array): InputMessageDice
    {
        return new static(
            $array['emoji'],
            $array['clear_draft'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
            'clear_draft' => $this->clearDraft,
        ];
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }
}
