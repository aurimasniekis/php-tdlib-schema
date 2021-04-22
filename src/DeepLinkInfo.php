<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a tg:// deep link.
 */
class DeepLinkInfo extends TdObject
{
    public const TYPE_NAME = 'deepLinkInfo';

    /**
     * Text to be shown to the user.
     */
    protected FormattedText $text;

    /**
     * True, if user should be asked to update the application.
     */
    protected bool $needUpdateApplication;

    public function __construct(FormattedText $text, bool $needUpdateApplication)
    {
        $this->text                  = $text;
        $this->needUpdateApplication = $needUpdateApplication;
    }

    public static function fromArray(array $array): DeepLinkInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['need_update_application'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'text'                    => $this->text->typeSerialize(),
            'need_update_application' => $this->needUpdateApplication,
        ];
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getNeedUpdateApplication(): bool
    {
        return $this->needUpdateApplication;
    }
}
