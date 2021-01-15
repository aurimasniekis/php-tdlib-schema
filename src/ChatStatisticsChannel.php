<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A detailed statistics about a channel chat.
 */
class ChatStatisticsChannel extends ChatStatistics
{
    public const TYPE_NAME = 'chatStatisticsChannel';

    /**
     * A period to which the statistics applies.
     */
    protected DateRange $period;

    /**
     * Number of members in the chat.
     */
    protected StatisticalValue $memberCount;

    /**
     * Mean number of times the recently sent messages was viewed.
     */
    protected StatisticalValue $meanViewCount;

    /**
     * Mean number of times the recently sent messages was shared.
     */
    protected StatisticalValue $meanShareCount;

    /**
     * A percentage of users with enabled notifications for the chat.
     */
    protected float $enabledNotificationsPercentage;

    /**
     * A graph containing number of members in the chat.
     */
    protected StatisticalGraph $memberCountGraph;

    /**
     * A graph containing number of members joined and left the chat.
     */
    protected StatisticalGraph $joinGraph;

    /**
     * A graph containing number of members muted and unmuted the chat.
     */
    protected StatisticalGraph $muteGraph;

    /**
     * A graph containing number of message views in a given hour in the last two weeks.
     */
    protected StatisticalGraph $viewCountByHourGraph;

    /**
     * A graph containing number of message views per source.
     */
    protected StatisticalGraph $viewCountBySourceGraph;

    /**
     * A graph containing number of new member joins per source.
     */
    protected StatisticalGraph $joinBySourceGraph;

    /**
     * A graph containing number of users viewed chat messages per language.
     */
    protected StatisticalGraph $languageGraph;

    /**
     * A graph containing number of chat message views and shares.
     */
    protected StatisticalGraph $messageInteractionGraph;

    /**
     * A graph containing number of views of associated with the chat instant views.
     */
    protected StatisticalGraph $instantViewInteractionGraph;

    /**
     * Detailed statistics about number of views and shares of recently sent messages.
     *
     * @var ChatStatisticsMessageInteractionInfo[]
     */
    protected array $recentMessageInteractions;

    public function __construct(
        DateRange $period,
        StatisticalValue $memberCount,
        StatisticalValue $meanViewCount,
        StatisticalValue $meanShareCount,
        float $enabledNotificationsPercentage,
        StatisticalGraph $memberCountGraph,
        StatisticalGraph $joinGraph,
        StatisticalGraph $muteGraph,
        StatisticalGraph $viewCountByHourGraph,
        StatisticalGraph $viewCountBySourceGraph,
        StatisticalGraph $joinBySourceGraph,
        StatisticalGraph $languageGraph,
        StatisticalGraph $messageInteractionGraph,
        StatisticalGraph $instantViewInteractionGraph,
        array $recentMessageInteractions
    ) {
        parent::__construct();

        $this->period                         = $period;
        $this->memberCount                    = $memberCount;
        $this->meanViewCount                  = $meanViewCount;
        $this->meanShareCount                 = $meanShareCount;
        $this->enabledNotificationsPercentage = $enabledNotificationsPercentage;
        $this->memberCountGraph               = $memberCountGraph;
        $this->joinGraph                      = $joinGraph;
        $this->muteGraph                      = $muteGraph;
        $this->viewCountByHourGraph           = $viewCountByHourGraph;
        $this->viewCountBySourceGraph         = $viewCountBySourceGraph;
        $this->joinBySourceGraph              = $joinBySourceGraph;
        $this->languageGraph                  = $languageGraph;
        $this->messageInteractionGraph        = $messageInteractionGraph;
        $this->instantViewInteractionGraph    = $instantViewInteractionGraph;
        $this->recentMessageInteractions      = $recentMessageInteractions;
    }

    public static function fromArray(array $array): ChatStatisticsChannel
    {
        return new static(
            TdSchemaRegistry::fromArray($array['period']),
            TdSchemaRegistry::fromArray($array['member_count']),
            TdSchemaRegistry::fromArray($array['mean_view_count']),
            TdSchemaRegistry::fromArray($array['mean_share_count']),
            $array['enabled_notifications_percentage'],
            TdSchemaRegistry::fromArray($array['member_count_graph']),
            TdSchemaRegistry::fromArray($array['join_graph']),
            TdSchemaRegistry::fromArray($array['mute_graph']),
            TdSchemaRegistry::fromArray($array['view_count_by_hour_graph']),
            TdSchemaRegistry::fromArray($array['view_count_by_source_graph']),
            TdSchemaRegistry::fromArray($array['join_by_source_graph']),
            TdSchemaRegistry::fromArray($array['language_graph']),
            TdSchemaRegistry::fromArray($array['message_interaction_graph']),
            TdSchemaRegistry::fromArray($array['instant_view_interaction_graph']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['recentMessageInteractions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'period'                           => $this->period->typeSerialize(),
            'member_count'                     => $this->memberCount->typeSerialize(),
            'mean_view_count'                  => $this->meanViewCount->typeSerialize(),
            'mean_share_count'                 => $this->meanShareCount->typeSerialize(),
            'enabled_notifications_percentage' => $this->enabledNotificationsPercentage,
            'member_count_graph'               => $this->memberCountGraph->typeSerialize(),
            'join_graph'                       => $this->joinGraph->typeSerialize(),
            'mute_graph'                       => $this->muteGraph->typeSerialize(),
            'view_count_by_hour_graph'         => $this->viewCountByHourGraph->typeSerialize(),
            'view_count_by_source_graph'       => $this->viewCountBySourceGraph->typeSerialize(),
            'join_by_source_graph'             => $this->joinBySourceGraph->typeSerialize(),
            'language_graph'                   => $this->languageGraph->typeSerialize(),
            'message_interaction_graph'        => $this->messageInteractionGraph->typeSerialize(),
            'instant_view_interaction_graph'   => $this->instantViewInteractionGraph->typeSerialize(),
            array_map(fn ($x)                  => $x->typeSerialize(), $this->recentMessageInteractions),
        ];
    }

    public function getPeriod(): DateRange
    {
        return $this->period;
    }

    public function getMemberCount(): StatisticalValue
    {
        return $this->memberCount;
    }

    public function getMeanViewCount(): StatisticalValue
    {
        return $this->meanViewCount;
    }

    public function getMeanShareCount(): StatisticalValue
    {
        return $this->meanShareCount;
    }

    public function getEnabledNotificationsPercentage(): float
    {
        return $this->enabledNotificationsPercentage;
    }

    public function getMemberCountGraph(): StatisticalGraph
    {
        return $this->memberCountGraph;
    }

    public function getJoinGraph(): StatisticalGraph
    {
        return $this->joinGraph;
    }

    public function getMuteGraph(): StatisticalGraph
    {
        return $this->muteGraph;
    }

    public function getViewCountByHourGraph(): StatisticalGraph
    {
        return $this->viewCountByHourGraph;
    }

    public function getViewCountBySourceGraph(): StatisticalGraph
    {
        return $this->viewCountBySourceGraph;
    }

    public function getJoinBySourceGraph(): StatisticalGraph
    {
        return $this->joinBySourceGraph;
    }

    public function getLanguageGraph(): StatisticalGraph
    {
        return $this->languageGraph;
    }

    public function getMessageInteractionGraph(): StatisticalGraph
    {
        return $this->messageInteractionGraph;
    }

    public function getInstantViewInteractionGraph(): StatisticalGraph
    {
        return $this->instantViewInteractionGraph;
    }

    public function getRecentMessageInteractions(): array
    {
        return $this->recentMessageInteractions;
    }
}
