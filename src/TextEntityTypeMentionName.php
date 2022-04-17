<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A text shows instead of a raw mention of the user (e.g., when the user has no username)
 */
class TextEntityTypeMentionName extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeMentionName';

    /**
     * Identifier of the mentioned user
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        parent::__construct();

        $this->userId = $userId;
    }

    public static function fromArray(array $array): TextEntityTypeMentionName
    {
        return new static(
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
