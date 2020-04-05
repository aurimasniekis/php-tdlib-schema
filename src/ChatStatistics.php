<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A detailed statistics about a chat.
 */
class ChatStatistics extends TdObject
{
    public const TYPE_NAME = 'chatStatistics';

    /**
     * A period to which the statistics applies.
     *
     * @var DateRange
     */
    protected DateRange $period;

    /**
     * Number of members in the chat.
     *
     * @var StatisticsValue
     */
    protected StatisticsValue $memberCount;

    /**
     * Mean number of times the recently sent messages was viewed.
     *
     * @var StatisticsValue
     */
    protected StatisticsValue $meanViewCount;

    /**
     * Mean number of times the recently sent messages was shared.
     *
     * @var StatisticsValue
     */
    protected StatisticsValue $meanShareCount;

    /**
     * A percentage of users with enabled notifications for the chat.
     *
     * @var float
     */
    protected float $enabledNotificationsPercentage;

    /**
     * A graph containing number of members in the chat.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $memberCountGraph;

    /**
     * A graph containing number of members joined and left the chat.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $joinGraph;

    /**
     * A graph containing number of members muted and unmuted the chat.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $muteGraph;

    /**
     * A graph containing number of message views in a given hour in the last two weeks.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $viewCountByHourGraph;

    /**
     * A graph containing number of message views per source.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $viewCountBySourceGraph;

    /**
     * A graph containing number of new member joins per source.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $joinBySourceGraph;

    /**
     * A graph containing number of users viewed chat messages per language.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $languageGraph;

    /**
     * A graph containing number of chat message views and shares.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $messageInteractionGraph;

    /**
     * A graph containing number of views of associated with the chat instant views.
     *
     * @var StatisticsGraph
     */
    protected StatisticsGraph $instantViewInteractionGraph;

    /**
     * Detailed statistics about number of views and shares of recently sent messages.
     *
     * @var ChatStatisticsMessageInteractionCounters[]
     */
    protected array $recentMessageInteractions;

    public function __construct(
        DateRange $period,
        StatisticsValue $memberCount,
        StatisticsValue $meanViewCount,
        StatisticsValue $meanShareCount,
        float $enabledNotificationsPercentage,
        StatisticsGraph $memberCountGraph,
        StatisticsGraph $joinGraph,
        StatisticsGraph $muteGraph,
        StatisticsGraph $viewCountByHourGraph,
        StatisticsGraph $viewCountBySourceGraph,
        StatisticsGraph $joinBySourceGraph,
        StatisticsGraph $languageGraph,
        StatisticsGraph $messageInteractionGraph,
        StatisticsGraph $instantViewInteractionGraph,
        array $recentMessageInteractions
    ) {
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

    public static function fromArray(array $array): ChatStatistics
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
            array_map(fn ($x) => ChatStatisticsMessageInteractionCounters::fromArray($x), $array['recentMessageInteractions']),
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

    public function getMemberCount(): StatisticsValue
    {
        return $this->memberCount;
    }

    public function getMeanViewCount(): StatisticsValue
    {
        return $this->meanViewCount;
    }

    public function getMeanShareCount(): StatisticsValue
    {
        return $this->meanShareCount;
    }

    public function getEnabledNotificationsPercentage(): float
    {
        return $this->enabledNotificationsPercentage;
    }

    public function getMemberCountGraph(): StatisticsGraph
    {
        return $this->memberCountGraph;
    }

    public function getJoinGraph(): StatisticsGraph
    {
        return $this->joinGraph;
    }

    public function getMuteGraph(): StatisticsGraph
    {
        return $this->muteGraph;
    }

    public function getViewCountByHourGraph(): StatisticsGraph
    {
        return $this->viewCountByHourGraph;
    }

    public function getViewCountBySourceGraph(): StatisticsGraph
    {
        return $this->viewCountBySourceGraph;
    }

    public function getJoinBySourceGraph(): StatisticsGraph
    {
        return $this->joinBySourceGraph;
    }

    public function getLanguageGraph(): StatisticsGraph
    {
        return $this->languageGraph;
    }

    public function getMessageInteractionGraph(): StatisticsGraph
    {
        return $this->messageInteractionGraph;
    }

    public function getInstantViewInteractionGraph(): StatisticsGraph
    {
        return $this->instantViewInteractionGraph;
    }

    public function getRecentMessageInteractions(): array
    {
        return $this->recentMessageInteractions;
    }
}
