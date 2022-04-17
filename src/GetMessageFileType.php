<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a file with messages exported from another app
 */
class GetMessageFileType extends TdFunction
{
    public const TYPE_NAME = 'getMessageFileType';

    /**
     * Beginning of the message file; up to 100 first lines
     *
     * @var string
     */
    protected string $messageFileHead;

    public function __construct(string $messageFileHead)
    {
        $this->messageFileHead = $messageFileHead;
    }

    public static function fromArray(array $array): GetMessageFileType
    {
        return new static(
            $array['message_file_head'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_file_head' => $this->messageFileHead,
        ];
    }

    public function getMessageFileHead(): string
    {
        return $this->messageFileHead;
    }
}
