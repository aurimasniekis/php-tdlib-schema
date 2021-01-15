<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a web page preview.
 */
class WebPage extends TdObject
{
    public const TYPE_NAME = 'webPage';

    /**
     * Original URL of the link.
     *
     * @var string
     */
    protected string $url;

    /**
     * URL to display.
     *
     * @var string
     */
    protected string $displayUrl;

    /**
     * Type of the web page. Can be: article, photo, audio, video, document, profile, app, or something else.
     *
     * @var string
     */
    protected string $type;

    /**
     * Short name of the site (e.g., Google Docs, App Store).
     *
     * @var string
     */
    protected string $siteName;

    /**
     * Title of the content.
     *
     * @var string
     */
    protected string $title;

    /**
     * Description of the content.
     *
     * @var string
     */
    protected string $description;

    /**
     * Image representing the content; may be null.
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * URL to show in the embedded preview.
     *
     * @var string
     */
    protected string $embedUrl;

    /**
     * MIME type of the embedded preview, (e.g., text/html or video/mp4).
     *
     * @var string
     */
    protected string $embedType;

    /**
     * Width of the embedded preview.
     *
     * @var int
     */
    protected int $embedWidth;

    /**
     * Height of the embedded preview.
     *
     * @var int
     */
    protected int $embedHeight;

    /**
     * Duration of the content, in seconds.
     *
     * @var int
     */
    protected int $duration;

    /**
     * Author of the content.
     *
     * @var string
     */
    protected string $author;

    /**
     * Preview of the content as an animation, if available; may be null.
     *
     * @var Animation|null
     */
    protected ?Animation $animation;

    /**
     * Preview of the content as an audio file, if available; may be null.
     *
     * @var Audio|null
     */
    protected ?Audio $audio;

    /**
     * Preview of the content as a document, if available (currently only available for small PDF files and ZIP archives); may be null.
     *
     * @var Document|null
     */
    protected ?Document $document;

    /**
     * Preview of the content as a sticker for small WEBP files, if available; may be null.
     *
     * @var Sticker|null
     */
    protected ?Sticker $sticker;

    /**
     * Preview of the content as a video, if available; may be null.
     *
     * @var Video|null
     */
    protected ?Video $video;

    /**
     * Preview of the content as a video note, if available; may be null.
     *
     * @var VideoNote|null
     */
    protected ?VideoNote $videoNote;

    /**
     * Preview of the content as a voice note, if available; may be null.
     *
     * @var VoiceNote|null
     */
    protected ?VoiceNote $voiceNote;

    /**
     * Version of instant view, available for the web page (currently can be 1 or 2), 0 if none.
     *
     * @var int
     */
    protected int $instantViewVersion;

    public function __construct(
        string $url,
        string $displayUrl,
        string $type,
        string $siteName,
        string $title,
        string $description,
        ?Photo $photo,
        string $embedUrl,
        string $embedType,
        int $embedWidth,
        int $embedHeight,
        int $duration,
        string $author,
        ?Animation $animation,
        ?Audio $audio,
        ?Document $document,
        ?Sticker $sticker,
        ?Video $video,
        ?VideoNote $videoNote,
        ?VoiceNote $voiceNote,
        int $instantViewVersion
    ) {
        $this->url                = $url;
        $this->displayUrl         = $displayUrl;
        $this->type               = $type;
        $this->siteName           = $siteName;
        $this->title              = $title;
        $this->description        = $description;
        $this->photo              = $photo;
        $this->embedUrl           = $embedUrl;
        $this->embedType          = $embedType;
        $this->embedWidth         = $embedWidth;
        $this->embedHeight        = $embedHeight;
        $this->duration           = $duration;
        $this->author             = $author;
        $this->animation          = $animation;
        $this->audio              = $audio;
        $this->document           = $document;
        $this->sticker            = $sticker;
        $this->video              = $video;
        $this->videoNote          = $videoNote;
        $this->voiceNote          = $voiceNote;
        $this->instantViewVersion = $instantViewVersion;
    }

    public static function fromArray(array $array): WebPage
    {
        return new static(
            $array['url'],
            $array['display_url'],
            $array['type'],
            $array['site_name'],
            $array['title'],
            $array['description'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['embed_url'],
            $array['embed_type'],
            $array['embed_width'],
            $array['embed_height'],
            $array['duration'],
            $array['author'],
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            (isset($array['audio']) ? TdSchemaRegistry::fromArray($array['audio']) : null),
            (isset($array['document']) ? TdSchemaRegistry::fromArray($array['document']) : null),
            (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            (isset($array['video']) ? TdSchemaRegistry::fromArray($array['video']) : null),
            (isset($array['video_note']) ? TdSchemaRegistry::fromArray($array['video_note']) : null),
            (isset($array['voice_note']) ? TdSchemaRegistry::fromArray($array['voice_note']) : null),
            $array['instant_view_version'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'url'                  => $this->url,
            'display_url'          => $this->displayUrl,
            'type'                 => $this->type,
            'site_name'            => $this->siteName,
            'title'                => $this->title,
            'description'          => $this->description,
            'photo'                => (isset($this->photo) ? $this->photo : null),
            'embed_url'            => $this->embedUrl,
            'embed_type'           => $this->embedType,
            'embed_width'          => $this->embedWidth,
            'embed_height'         => $this->embedHeight,
            'duration'             => $this->duration,
            'author'               => $this->author,
            'animation'            => (isset($this->animation) ? $this->animation : null),
            'audio'                => (isset($this->audio) ? $this->audio : null),
            'document'             => (isset($this->document) ? $this->document : null),
            'sticker'              => (isset($this->sticker) ? $this->sticker : null),
            'video'                => (isset($this->video) ? $this->video : null),
            'video_note'           => (isset($this->videoNote) ? $this->videoNote : null),
            'voice_note'           => (isset($this->voiceNote) ? $this->voiceNote : null),
            'instant_view_version' => $this->instantViewVersion,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getDisplayUrl(): string
    {
        return $this->displayUrl;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getSiteName(): string
    {
        return $this->siteName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getEmbedUrl(): string
    {
        return $this->embedUrl;
    }

    public function getEmbedType(): string
    {
        return $this->embedType;
    }

    public function getEmbedWidth(): int
    {
        return $this->embedWidth;
    }

    public function getEmbedHeight(): int
    {
        return $this->embedHeight;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getVideo(): ?Video
    {
        return $this->video;
    }

    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    public function getVoiceNote(): ?VoiceNote
    {
        return $this->voiceNote;
    }

    public function getInstantViewVersion(): int
    {
        return $this->instantViewVersion;
    }
}
