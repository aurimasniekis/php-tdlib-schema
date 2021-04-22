<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new basic group and sends a corresponding messageBasicGroupChatCreate. Returns the newly created chat
 */
class CreateNewBasicGroupChat extends TdFunction
{
    public const TYPE_NAME = 'createNewBasicGroupChat';

    /**
     * Identifiers of users to be added to the basic group
     *
     * @var int[]
     */
    protected array $userIds;

    /**
     * Title of the new basic group; 1-128 characters
     *
     * @var string
     */
    protected string $title;

    public function __construct(array $userIds, string $title)
    {
        $this->userIds = $userIds;
        $this->title = $title;
    }

    public static function fromArray(array $array): CreateNewBasicGroupChat
    {
        return new static(
            $array['user_ids'],
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
            'title' => $this->title,
        ];
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
