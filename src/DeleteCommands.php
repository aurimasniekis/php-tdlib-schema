<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Deletes commands supported by the bot for the given user scope and language; for bots only
 */
class DeleteCommands extends TdFunction
{
    public const TYPE_NAME = 'deleteCommands';

    /**
     * The scope to which the commands are relevant; pass null to delete commands in the default bot command scope
     *
     * @var BotCommandScope
     */
    protected BotCommandScope $scope;

    /**
     * A two-letter ISO 639-1 country code or an empty string
     *
     * @var string
     */
    protected string $languageCode;

    public function __construct(BotCommandScope $scope, string $languageCode)
    {
        $this->scope = $scope;
        $this->languageCode = $languageCode;
    }

    public static function fromArray(array $array): DeleteCommands
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            $array['language_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
            'language_code' => $this->languageCode,
        ];
    }

    public function getScope(): BotCommandScope
    {
        return $this->scope;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
}
