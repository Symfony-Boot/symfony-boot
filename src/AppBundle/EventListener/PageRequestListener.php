<?php

namespace AppBundle\EventListener;


use AppBundle\Controller\BaseController;
use Component\PageRequest;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * @author Anthony Howell <anthonyhowell@gmail.com>
 */
class PageRequestListener
{

    /** @var string */
    private $paramPage;

    /** @var string */
    private $paramSort;

    /** @var string */
    private $paramDirection;

    /** @var string */
    private $paramPageSize;

    /** @var string */
    private $defaultPageSize;

    /** @var boolean */
    private $defaultDistinct;


    /**
     * PageRequestListener constructor.
     * @param string $paramPage
     * @param string $paramSort
     * @param string $paramDirection
     * @param string $paramPageSize
     * @param string $defaultPageSize
     * @param bool $defaultDistinct
     */
    public function __construct($paramPage, $paramSort, $paramDirection, $paramPageSize, $defaultPageSize, $defaultDistinct)
    {
        $this->paramPage = $paramPage;
        $this->paramSort = $paramSort;
        $this->paramDirection = $paramDirection;
        $this->paramPageSize = $paramPageSize;
        $this->defaultPageSize = $defaultPageSize;
        $this->defaultDistinct = $defaultDistinct;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();

        // The controller passed in may be a class or closure. This is not usual in Symfony2,
        // but it may happen. If it is a class, it will arrive within an array.
        if (!is_array($controller)) {
            return;
        }

        $page      = $event->getRequest()->query->get($this->paramPage, 1);
        $sort      = $event->getRequest()->query->get($this->paramSort, 'id');
        $direction = $event->getRequest()->query->get($this->paramDirection, 'desc');
        $pageSize  = $event->getRequest()->query->get($this->paramPageSize, $this->defaultPageSize);

        $pageRequest = new PageRequest((int) $page, $sort, $direction, (int) $pageSize, $this->defaultDistinct);


        if ($controller[0] instanceof BaseController) {
            $controller[0]->setPageRequest($pageRequest);
        }
    }

}