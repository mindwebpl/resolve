<?php
namespace Mindweb\Resolve;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

abstract class Resolve implements EventSubscriberInterface
{
    const RESOLVE_EVENT = 'tracker.resolve';

    const DEFAULT_PRIORITY = 10;

    /**
     * @param Event\ResolveEvent $resolveEvent
     */
    abstract public function resolve(Event\ResolveEvent $resolveEvent);

    /**
     * @return int
     */
    public static function getPriority()
    {
        return self::DEFAULT_PRIORITY;
    }

    /**
     * @inherited
     */
    public static function getSubscribedEvents()
    {
        return array(
            self::RESOLVE_EVENT => array(
                'resolve',
                self::getPriority()
            )
        );
    }
} 