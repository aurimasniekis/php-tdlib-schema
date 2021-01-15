<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Instructs clients to remove the keyboard once this message has been received. This kind of keyboard can't be received in an incoming message; instead, UpdateChatReplyMarkup with message_id == 0 will be sent.
 */
class ReplyMarkupRemoveKeyboard extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupRemoveKeyboard';

    /**
     * True, if the keyboard is removed only for the mentioned users or the target user of a reply.
     *
     * @var bool
     */
    protected bool $isPersonal;

    public function __construct(bool $isPersonal)
    {
        parent::__construct();

        $this->isPersonal = $isPersonal;
    }

    public static function fromArray(array $array): ReplyMarkupRemoveKeyboard
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
