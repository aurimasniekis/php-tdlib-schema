<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A detailed statistics about a supergroup chat.
 */
class ChatStatisticsSupergroup extends ChatStatistics
{
    public const TYPE_NAME = 'chatStatisticsSupergroup';

    /**
     * A period to which the statistics applies.
     */
    protected DateRange $period;

    /**
     * Number of members in the chat.
     */
    protected StatisticalValue $memberCount;

    /**
     * Number of messages sent to the chat.
     */
    protected StatisticalValue $messageCount;

    /**
     * Number of users who viewed messages in the chat.
     */
    protected StatisticalValue $viewerCount;

    /**
     * Number of users who sent messages to the chat.
     */
    protected StatisticalValue $senderCount;

    /**
     * A graph containing number of members in the chat.
     */
    protected StatisticalGraph $memberCountGraph;

    /**
     * A graph containing number of members joined and left the chat.
     */
    protected StatisticalGraph $joinGraph;

    /**
     * A graph containing number of new member joins per source.
     */
    protected StatisticalGraph $joinBySourceGraph;

    /**
     * A graph containing distribution of active users per language.
     */
    protected StatisticalGraph $languageGraph;

    /**
     * A graph containing distribution of sent messages by content type.
     */
    protected StatisticalGraph $messageContentGraph;

    /**
     * A graph containing number of different actions in the chat.
     */
    protected StatisticalGraph $actionGraph;

    /**
     * A graph containing distribution of message views per hour.
     */
    protected StatisticalGraph $dayGraph;

    /**
     * A graph containing distribution of message views per day of week.
     */
    protected StatisticalGraph $weekGraph;

    /**
     * List of users sent most messages in the last week.
     *
     * @var ChatStatisticsMessageSenderInfo[]
     */
    protected array $topSenders;

    /**
     * List of most active administrators in the last week.
     *
     * @var ChatStatisticsAdministratorActionsInfo[]
     */
    protected array $topAdministrators;

    /**
     * List of most active inviters of new members in the last week.
     *
     * @var ChatStatisticsInviterInfo[]
     */
    protected array $topInviters;

    public function __construct(
        DateRange $period,
        StatisticalValue $memberCount,
        StatisticalValue $messageCount,
        StatisticalValue $viewerCount,
        StatisticalValue $senderCount,
        StatisticalGraph $memberCountGraph,
        StatisticalGraph $joinGraph,
        StatisticalGraph $joinBySourceGraph,
        StatisticalGraph $languageGraph,
        StatisticalGraph $messageContentGraph,
        StatisticalGraph $actionGraph,
        StatisticalGraph $dayGraph,
        StatisticalGraph $weekGraph,
        array $topSenders,
        array $topAdministrators,
        array $topInviters
    ) {
        parent::__construct();

        $this->period              = $period;
        $this->memberCount         = $memberCount;
        $this->messageCount        = $messageCount;
        $this->viewerCount         = $viewerCount;
        $this->senderCount         = $senderCount;
        $this->memberCountGraph    = $memberCountGraph;
        $this->joinGraph           = $joinGraph;
        $this->joinBySourceGraph   = $joinBySourceGraph;
        $this->languageGraph       = $languageGraph;
        $this->messageContentGraph = $messageContentGraph;
        $this->actionGraph         = $actionGraph;
        $this->dayGraph            = $dayGraph;
        $this->weekGraph           = $weekGraph;
        $this->topSenders          = $topSenders;
        $this->topAdministrators   = $topAdministrators;
        $this->topInviters         = $topInviters;
    }

    public static function fromArray(array $array): ChatStatisticsSupergroup
    {
        return new static(
            TdSchemaRegistry::fromArray($array['period']),
            TdSchemaRegistry::fromArray($array['member_count']),
            TdSchemaRegistry::fromArray($array['message_count']),
            TdSchemaRegistry::fromArray($array['viewer_count']),
            TdSchemaRegistry::fromArray($array['sender_count']),
            TdSchemaRegistry::fromArray($array['member_count_graph']),
            TdSchemaRegistry::fromArray($array['join_graph']),
            TdSchemaRegistry::fromArray($array['join_by_source_graph']),
            TdSchemaRegistry::fromArray($array['language_graph']),
            TdSchemaRegistry::fromArray($array['message_content_graph']),
            TdSchemaRegistry::fromArray($array['action_graph']),
            TdSchemaRegistry::fromArray($array['day_graph']),
            TdSchemaRegistry::fromArray($array['week_graph']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['topSenders']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['topAdministrators']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['topInviters']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'period'                => $this->period->typeSerialize(),
            'member_count'          => $this->memberCount->typeSerialize(),
            'message_count'         => $this->messageCount->typeSerialize(),
            'viewer_count'          => $this->viewerCount->typeSerialize(),
            'sender_count'          => $this->senderCount->typeSerialize(),
            'member_count_graph'    => $this->memberCountGraph->typeSerialize(),
            'join_graph'            => $this->joinGraph->typeSerialize(),
            'join_by_source_graph'  => $this->joinBySourceGraph->typeSerialize(),
            'language_graph'        => $this->languageGraph->typeSerialize(),
            'message_content_graph' => $this->messageContentGraph->typeSerialize(),
            'action_graph'          => $this->actionGraph->typeSerialize(),
            'day_graph'             => $this->dayGraph->typeSerialize(),
            'week_graph'            => $this->weekGraph->typeSerialize(),
            array_map(fn ($x)       => $x->typeSerialize(), $this->topSenders),
            array_map(fn ($x)       => $x->typeSerialize(), $this->topAdministrators),
            array_map(fn ($x)       => $x->typeSerialize(), $this->topInviters),
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

    public function getMessageCount(): StatisticalValue
    {
        return $this->messageCount;
    }

    public function getViewerCount(): StatisticalValue
    {
        return $this->viewerCount;
    }

    public function getSenderCount(): StatisticalValue
    {
        return $this->senderCount;
    }

    public function getMemberCountGraph(): StatisticalGraph
    {
        return $this->memberCountGraph;
    }

    public function getJoinGraph(): StatisticalGraph
    {
        return $this->joinGraph;
    }

    public function getJoinBySourceGraph(): StatisticalGraph
    {
        return $this->joinBySourceGraph;
    }

    public function getLanguageGraph(): StatisticalGraph
    {
        return $this->languageGraph;
    }

    public function getMessageContentGraph(): StatisticalGraph
    {
        return $this->messageContentGraph;
    }

    public function getActionGraph(): StatisticalGraph
    {
        return $this->actionGraph;
    }

    public function getDayGraph(): StatisticalGraph
    {
        return $this->dayGraph;
    }

    public function getWeekGraph(): StatisticalGraph
    {
        return $this->weekGraph;
    }

    public function getTopSenders(): array
    {
        return $this->topSenders;
    }

    public function getTopAdministrators(): array
    {
        return $this->topAdministrators;
    }

    public function getTopInviters(): array
    {
        return $this->topInviters;
    }
}
