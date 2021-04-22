<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a link to an MP3 audio file
 */
class InputInlineQueryResultAudio extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultAudio';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the audio file
     *
     * @var string
     */
    protected string $title;

    /**
     * Performer of the audio file
     *
     * @var string
     */
    protected string $performer;

    /**
     * The URL of the audio file
     *
     * @var string
     */
    protected string $audioUrl;

    /**
     * Audio file duration, in seconds
     *
     * @var int
     */
    protected int $audioDuration;

    /**
     * The message reply markup. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent. Must be one of the following types: InputMessageText, InputMessageAudio, InputMessageLocation, InputMessageVenue or InputMessageContact
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        string $id,
        string $title,
        string $performer,
        string $audioUrl,
        int $audioDuration,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        parent::__construct();

        $this->id = $id;
        $this->title = $title;
        $this->performer = $performer;
        $this->audioUrl = $audioUrl;
        $this->audioDuration = $audioDuration;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultAudio
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['performer'],
            $array['audio_url'],
            $array['audio_duration'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'performer' => $this->performer,
            'audio_url' => $this->audioUrl,
            'audio_duration' => $this->audioDuration,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPerformer(): string
    {
        return $this->performer;
    }

    public function getAudioUrl(): string
    {
        return $this->audioUrl;
    }

    public function getAudioDuration(): int
    {
        return $this->audioDuration;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
