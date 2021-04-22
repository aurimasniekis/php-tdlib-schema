<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Instructs application to force a reply to this message.
 */
class ReplyMarkupForceReply extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupForceReply';

    /**
     * True, if a forced reply must automatically be shown to the current user. For outgoing messages, specify true to show the forced reply only for the mentioned users and for the target user of a reply.
     */
    protected bool $isPersonal;

    public function __construct(bool $isPersonal)
    {
        parent::__construct();

        $this->isPersonal = $isPersonal;
    }

    public static function fromArray(array $array): ReplyMarkupForceReply
    {
        return new static(
            $array['is_personal'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_personal' => $this->isPersonal,
        ];
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }
}
