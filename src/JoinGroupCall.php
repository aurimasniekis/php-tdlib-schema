<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Joins a group call.
 */
class JoinGroupCall extends TdFunction
{
    public const TYPE_NAME = 'joinGroupCall';

    /**
     * Group call identifier.
     */
    protected int $groupCallId;

    /**
     * Group join payload, received from tgcalls. Use null to cancel previous joinGroupCall request.
     */
    protected GroupCallPayload $payload;

    /**
     * Caller synchronization source identifier; received from tgcalls.
     */
    protected int $source;

    /**
     * True, if the user's microphone is muted.
     */
    protected bool $isMuted;

    public function __construct(int $groupCallId, GroupCallPayload $payload, int $source, bool $isMuted)
    {
        $this->groupCallId = $groupCallId;
        $this->payload     = $payload;
        $this->source      = $source;
        $this->isMuted     = $isMuted;
    }

    public static function fromArray(array $array): JoinGroupCall
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['payload']),
            $array['source'],
            $array['is_muted'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'payload'       => $this->payload->typeSerialize(),
            'source'        => $this->source,
            'is_muted'      => $this->isMuted,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getPayload(): GroupCallPayload
    {
        return $this->payload;
    }

    public function getSource(): int
    {
        return $this->source;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }
}
