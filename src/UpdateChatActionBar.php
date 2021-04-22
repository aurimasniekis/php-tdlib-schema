<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat action bar was changed.
 */
class UpdateChatActionBar extends Update
{
    public const TYPE_NAME = 'updateChatActionBar';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * The new value of the action bar; may be null.
     */
    protected ?ChatActionBar $actionBar;

    public function __construct(int $chatId, ?ChatActionBar $actionBar)
    {
        parent::__construct();

        $this->chatId    = $chatId;
        $this->actionBar = $actionBar;
    }

    public static function fromArray(array $array): UpdateChatActionBar
    {
        return new static(
            $array['chat_id'],
            (isset($array['action_bar']) ? TdSchemaRegistry::fromArray($array['action_bar']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'action_bar' => (isset($this->actionBar) ? $this->actionBar : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getActionBar(): ?ChatActionBar
    {
        return $this->actionBar;
    }
}
