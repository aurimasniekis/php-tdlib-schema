<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A regular poll
 */
class PollTypeRegular extends PollType
{
    public const TYPE_NAME = 'pollTypeRegular';

    /**
     * True, if multiple answer options can be chosen simultaneously
     *
     * @var bool
     */
    protected bool $allowMultipleAnswers;

    public function __construct(bool $allowMultipleAnswers)
    {
        parent::__construct();

        $this->allowMultipleAnswers = $allowMultipleAnswers;
    }

    public static function fromArray(array $array): PollTypeRegular
    {
        return new static(
            $array['allow_multiple_answers'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'allow_multiple_answers' => $this->allowMultipleAnswers,
        ];
    }

    public function getAllowMultipleAnswers(): bool
    {
        return $this->allowMultipleAnswers;
    }
}
