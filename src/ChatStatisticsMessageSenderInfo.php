<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains statistics about messages sent by a user
 */
class ChatStatisticsMessageSenderInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsMessageSenderInfo';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * Number of sent messages
     *
     * @var int
     */
    protected int $sentMessageCount;

    /**
     * Average number of characters in sent messages
     *
     * @var int
     */
    protected int $averageCharacterCount;

    public function __construct(int $userId, int $sentMessageCount, int $averageCharacterCount)
    {
        $this->userId = $userId;
        $this->sentMessageCount = $sentMessageCount;
        $this->averageCharacterCount = $averageCharacterCount;
    }

    public static function fromArray(array $array): ChatStatisticsMessageSenderInfo
    {
        return new static(
            $array['user_id'],
            $array['sent_message_count'],
            $array['average_character_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'sent_message_count' => $this->sentMessageCount,
            'average_character_count' => $this->averageCharacterCount,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getSentMessageCount(): int
    {
        return $this->sentMessageCount;
    }

    public function getAverageCharacterCount(): int
    {
        return $this->averageCharacterCount;
    }
}
