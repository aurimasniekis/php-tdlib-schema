<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A supergroup has been created from a basic group
 */
class MessageChatUpgradeFrom extends MessageContent
{
    public const TYPE_NAME = 'messageChatUpgradeFrom';

    /**
     * Title of the newly created supergroup
     *
     * @var string
     */
    protected string $title;

    /**
     * The identifier of the original basic group
     *
     * @var int
     */
    protected int $basicGroupId;

    public function __construct(string $title, int $basicGroupId)
    {
        parent::__construct();

        $this->title = $title;
        $this->basicGroupId = $basicGroupId;
    }

    public static function fromArray(array $array): MessageChatUpgradeFrom
    {
        return new static(
            $array['title'],
            $array['basic_group_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'basic_group_id' => $this->basicGroupId,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }
}
