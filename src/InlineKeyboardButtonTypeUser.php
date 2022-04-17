<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A button with a user reference to be handled in the same way as textEntityTypeMentionName entities
 */
class InlineKeyboardButtonTypeUser extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeUser';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId)
    {
        parent::__construct();

        $this->userId = $userId;
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeUser
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
