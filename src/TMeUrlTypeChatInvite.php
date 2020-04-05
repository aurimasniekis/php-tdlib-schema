<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat invite link.
 */
class TMeUrlTypeChatInvite extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeChatInvite';

    /**
     * Chat invite link info.
     *
     * @var ChatInviteLinkInfo
     */
    protected ChatInviteLinkInfo $info;

    public function __construct(ChatInviteLinkInfo $info)
    {
        parent::__construct();

        $this->info = $info;
    }

    public static function fromArray(array $array): TMeUrlTypeChatInvite
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'info'  => $this->info->typeSerialize(),
        ];
    }

    public function getInfo(): ChatInviteLinkInfo
    {
        return $this->info;
    }
}
