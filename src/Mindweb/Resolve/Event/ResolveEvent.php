<?php
namespace Mindweb\Resolve\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;
use Mindweb\Recognizer\Event\AttributionEvent;

class ResolveEvent extends Event
{
    /**
     * @var AttributionEvent
     */
    private $attributionEvent;

    /**
     * @var Response
     */
    private $response;

    /**
     * @param AttributionEvent $attributionEvent
     * @param Response $response
     */
    public function __construct(AttributionEvent $attributionEvent, Response $response)
    {
        $this->attributionEvent = $attributionEvent;
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
        return $this->attributionEvent->getAttribution();
    }
} 