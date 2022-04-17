<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of chat invite links
 */
class ChatInviteLinks extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinks';

    /**
     * Approximate total count of chat invite links found
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of invite links
     *
     * @var ChatInviteLink[]
     */
    protected array $inviteLinks;

    public function __construct(int $totalCount, array $inviteLinks)
    {
        $this->totalCount = $totalCount;
        $this->inviteLinks = $inviteLinks;
    }

    public static function fromArray(array $array): ChatInviteLinks
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['invite_links']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->inviteLinks),
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getInviteLinks(): array
    {
        return $this->inviteLinks;
    }
}
