<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat title was edited.
 */
class PushMessageContentChatChangeTitle extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatChangeTitle';

    /**
     * New chat title.
     */
    protected string $title;

    public function __construct(string $title)
    {
        parent::__construct();

        $this->title = $title;
    }

    public static function fromArray(array $array): PushMessageContentChatChangeTitle
    {
        return new static(
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
