<?php
namespace Mindweb\Resolve\Event;

use Mindweb\Persist\Event\PersistEvent;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;

class ResolveEvent extends Event
{
    /**
     * @var PersistEvent
     */
    private $persistEvent;

    /**
     * @var Response
     */
    private $response;

    /**
     * @param PersistEvent $persistEvent
     * @param Response $response
     */
    public function __construct(PersistEvent $persistEvent, Response $response)
    {
        $this->persistEvent = $persistEvent;
        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function getAttribution()
    {
        return $this->persistEvent->getAttribution();
    }

    /**
     * @return array
     */
    public function getPersistResults()
    {
        return $this->persistEvent->getResults();
    }
} 