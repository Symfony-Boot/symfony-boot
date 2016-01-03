<?php

namespace Component;


/**
 * Class PageRequest
 * @package Component
 *
 * @author Anthony Howell <anthonyhowell@gmail.com>
 */
class PageRequest
{

    /** @var int  */
    private $page = 1;

    /** @var int */
    private $pageSize;

    /** @var string */
    private $sort;

    /** @var string */
    private $direction;

    /** @var bool */
    private $distinct = true;


    /**
     * PageRequest constructor.
     * @param int $page
     * @param string $sort
     * @param string $direction
     * @param int $pageSize
     * @param bool $distinct
     */
    public function __construct($page, $sort, $direction, $pageSize, $distinct)
    {
        $this->page = $page;
        $this->pageSize = $pageSize;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->distinct = $distinct;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @return boolean
     */
    public function isDistinct()
    {
        return $this->distinct;
    }

}