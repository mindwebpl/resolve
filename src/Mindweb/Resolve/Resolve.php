<?php
namespace Mindweb\Resolve;

use Mindweb\Subscriber\Subscriber;
use Symfony\Component\Config\Definition\ConfigurationInterface;

abstract class Resolve implements Subscriber
{
    const RESOLVE_EVENT = 'tracker.resolve';

    /**
     * @return string
     */
    public final function getEventName()
    {
        return self::RESOLVE_EVENT;
    }

    /**
     * @return array
     */
    public function register()
    {
        return array(
            array('resolve', $this->getPriority())
        );
    }

    /**
     * @return null|ConfigurationInterface
     */
    public function getConfiguration()
    {
        return null;
    }

    /**
     * @param Event\ResolveEvent $resolveEvent
     */
    abstract public function resolve(Event\ResolveEvent $resolveEvent);

    /**
     * @return int
     */
    protected function getPriority()
    {
        return 10;
    }
} 