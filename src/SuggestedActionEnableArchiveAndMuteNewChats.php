<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Suggests the user to enable "archive_and_mute_new_chats_from_unknown_users" option
 */
class SuggestedActionEnableArchiveAndMuteNewChats extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionEnableArchiveAndMuteNewChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionEnableArchiveAndMuteNewChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
