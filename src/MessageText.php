<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A text message.
 */
class MessageText extends MessageContent
{
    public const TYPE_NAME = 'messageText';

    /**
     * Text of the message.
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    /**
     * A preview of the web page that's mentioned in the text; may be null.
     *
     * @var WebPage|null
     */
    protected ?WebPage $webPage;

    public function __construct(FormattedText $text, ?WebPage $webPage)
    {
        parent::__construct();

        $this->text    = $text;
        $this->webPage = $webPage;
    }

    public static function fromArray(array $array): MessageText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            (isset($array['web_page']) ? TdSchemaRegistry::fromArray($array['web_page']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'text'     => $this->text->typeSerialize(),
            'web_page' => (isset($this->webPage) ? $this->webPage : null),
        ];
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getWebPage(): ?WebPage
    {
        return $this->webPage;
    }
}
