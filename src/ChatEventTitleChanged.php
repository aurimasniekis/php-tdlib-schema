<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat title was changed.
 */
class ChatEventTitleChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventTitleChanged';

    /**
     * Previous chat title.
     *
     * @var string
     */
    protected string $oldTitle;

    /**
     * New chat title.
     *
     * @var string
     */
    protected string $newTitle;

    public function __construct(string $oldTitle, string $newTitle)
    {
        parent::__construct();

        $this->oldTitle = $oldTitle;
        $this->newTitle = $newTitle;
    }

    public static function fromArray(array $array): ChatEventTitleChanged
    {
        return new static(
            $array['old_title'],
            $array['new_title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'old_title' => $this->oldTitle,
            'new_title' => $this->newTitle,
        ];
    }

    public function getOldTitle(): string
    {
        return $this->oldTitle;
    }

    public function getNewTitle(): string
    {
        return $this->newTitle;
    }
}
