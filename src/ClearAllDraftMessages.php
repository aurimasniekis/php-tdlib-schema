<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Clears draft messages in all chats
 */
class ClearAllDraftMessages extends TdFunction
{
    public const TYPE_NAME = 'clearAllDraftMessages';

    /**
     * If true, local draft messages in secret chats will not be cleared
     *
     * @var bool
     */
    protected bool $excludeSecretChats;

    public function __construct(bool $excludeSecretChats)
    {
        $this->excludeSecretChats = $excludeSecretChats;
    }

    public static function fromArray(array $array): ClearAllDraftMessages
    {
        return new static(
            $array['exclude_secret_chats'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'exclude_secret_chats' => $this->excludeSecretChats,
        ];
    }

    public function getExcludeSecretChats(): bool
    {
        return $this->excludeSecretChats;
    }
}
