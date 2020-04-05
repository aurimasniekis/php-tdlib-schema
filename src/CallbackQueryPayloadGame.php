<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The payload from a game callback button.
 */
class CallbackQueryPayloadGame extends CallbackQueryPayload
{
    public const TYPE_NAME = 'callbackQueryPayloadGame';

    /**
     * A short name of the game that was attached to the callback button.
     *
     * @var string
     */
    protected string $gameShortName;

    public function __construct(string $gameShortName)
    {
        parent::__construct();

        $this->gameShortName = $gameShortName;
    }

    public static function fromArray(array $array): CallbackQueryPayloadGame
    {
        return new static(
            $array['game_short_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'game_short_name' => $this->gameShortName,
        ];
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }
}
