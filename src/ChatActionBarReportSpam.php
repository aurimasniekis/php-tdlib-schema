<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat can be reported as spam using the method reportChat with the reason chatReportReasonSpam.
 */
class ChatActionBarReportSpam extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarReportSpam';

    /**
     * If true, the chat was automatically archived and can be moved back to the main chat list using addChatToList simultaneously with setting chat notification settings to default using setChatNotificationSettings.
     */
    protected bool $canUnarchive;

    public function __construct(bool $canUnarchive)
    {
        parent::__construct();

        $this->canUnarchive = $canUnarchive;
    }

    public static function fromArray(array $array): ChatActionBarReportSpam
    {
        return new static(
            $array['can_unarchive'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'can_unarchive' => $this->canUnarchive,
        ];
    }

    public function getCanUnarchive(): bool
    {
        return $this->canUnarchive;
    }
}
