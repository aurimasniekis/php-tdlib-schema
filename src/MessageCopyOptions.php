<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Options to be used when a message content is copied without a link to the original message.
 */
class MessageCopyOptions extends TdObject
{
    public const TYPE_NAME = 'messageCopyOptions';

    /**
     * True, if content of the message needs to be copied without a link to the original message. Always true if the message is forwarded to a secret chat.
     */
    protected bool $sendCopy;

    /**
     * True, if media caption of the message copy needs to be replaced. Ignored if send_copy is false.
     */
    protected bool $replaceCaption;

    /**
     * New message caption. Ignored if replace_caption is false.
     */
    protected FormattedText $newCaption;

    public function __construct(bool $sendCopy, bool $replaceCaption, FormattedText $newCaption)
    {
        $this->sendCopy       = $sendCopy;
        $this->replaceCaption = $replaceCaption;
        $this->newCaption     = $newCaption;
    }

    public static function fromArray(array $array): MessageCopyOptions
    {
        return new static(
            $array['send_copy'],
            $array['replace_caption'],
            TdSchemaRegistry::fromArray($array['new_caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'send_copy'       => $this->sendCopy,
            'replace_caption' => $this->replaceCaption,
            'new_caption'     => $this->newCaption->typeSerialize(),
        ];
    }

    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    public function getReplaceCaption(): bool
    {
        return $this->replaceCaption;
    }

    public function getNewCaption(): FormattedText
    {
        return $this->newCaption;
    }
}
