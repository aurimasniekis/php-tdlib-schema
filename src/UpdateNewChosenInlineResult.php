<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user has chosen a result of an inline query; for bots only.
 */
class UpdateNewChosenInlineResult extends Update
{
    public const TYPE_NAME = 'updateNewChosenInlineResult';

    /**
     * Identifier of the user who sent the query.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * User location, provided by the client; may be null.
     *
     * @var Location|null
     */
    protected ?Location $userLocation;

    /**
     * Text of the query.
     *
     * @var string
     */
    protected string $query;

    /**
     * Identifier of the chosen result.
     *
     * @var string
     */
    protected string $resultId;

    /**
     * Identifier of the sent inline message, if known.
     *
     * @var string
     */
    protected string $inlineMessageId;

    public function __construct(int $senderUserId, ?Location $userLocation, string $query, string $resultId, string $inlineMessageId)
    {
        parent::__construct();

        $this->senderUserId    = $senderUserId;
        $this->userLocation    = $userLocation;
        $this->query           = $query;
        $this->resultId        = $resultId;
        $this->inlineMessageId = $inlineMessageId;
    }

    public static function fromArray(array $array): UpdateNewChosenInlineResult
    {
        return new static(
            $array['sender_user_id'],
            (isset($array['user_location']) ? TdSchemaRegistry::fromArray($array['user_location']) : null),
            $array['query'],
            $array['result_id'],
            $array['inline_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'sender_user_id'    => $this->senderUserId,
            'user_location'     => (isset($this->userLocation) ? $this->userLocation : null),
            'query'             => $this->query,
            'result_id'         => $this->resultId,
            'inline_message_id' => $this->inlineMessageId,
        ];
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getUserLocation(): ?Location
    {
        return $this->userLocation;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }
}
