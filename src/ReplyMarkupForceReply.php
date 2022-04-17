<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Instructs application to force a reply to this message
 */
class ReplyMarkupForceReply extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupForceReply';

    /**
     * True, if a forced reply must automatically be shown to the current user. For outgoing messages, specify true to show the forced reply only for the mentioned users and for the target user of a reply
     *
     * @var bool
     */
    protected bool $isPersonal;

    /**
     * If non-empty, the placeholder to be shown in the input field when the reply is active; 0-64 characters
     *
     * @var string
     */
    protected string $inputFieldPlaceholder;

    public function __construct(bool $isPersonal, string $inputFieldPlaceholder)
    {
        parent::__construct();

        $this->isPersonal = $isPersonal;
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;
    }

    public static function fromArray(array $array): ReplyMarkupForceReply
    {
        return new static(
            $array['is_personal'],
            $array['input_field_placeholder'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_personal' => $this->isPersonal,
            'input_field_placeholder' => $this->inputFieldPlaceholder,
        ];
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function getInputFieldPlaceholder(): string
    {
        return $this->inputFieldPlaceholder;
    }
}
