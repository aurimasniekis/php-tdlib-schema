<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A newly created basic group.
 */
class MessageBasicGroupChatCreate extends MessageContent
{
    public const TYPE_NAME = 'messageBasicGroupChatCreate';

    /**
     * Title of the basic group.
     */
    protected string $title;

    /**
     * User identifiers of members in the basic group.
     *
     * @var int[]
     */
    protected array $memberUserIds;

    public function __construct(string $title, array $memberUserIds)
    {
        parent::__construct();

        $this->title         = $title;
        $this->memberUserIds = $memberUserIds;
    }

    public static function fromArray(array $array): MessageBasicGroupChatCreate
    {
        return new static(
            $array['title'],
            $array['member_user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'title'           => $this->title,
            'member_user_ids' => $this->memberUserIds,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }
}
