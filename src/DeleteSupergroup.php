<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes a supergroup or channel along with all messages in the corresponding chat. This will release the supergroup or channel username and remove all members; requires owner privileges in the supergroup or channel. Chats with more than 1000 members can't be deleted using this method.
 */
class DeleteSupergroup extends TdFunction
{
    public const TYPE_NAME = 'deleteSupergroup';

    /**
     * Identifier of the supergroup or channel.
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): DeleteSupergroup
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }
}
