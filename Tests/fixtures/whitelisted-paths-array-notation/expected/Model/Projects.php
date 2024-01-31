<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Projects
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var Project[]
     */
    protected $projects;
    /**
     * 
     *
     * @var int
     */
    protected $perPage;
    /**
     * 
     *
     * @var int
     */
    protected $totalPages;
    /**
     * 
     *
     * @var int
     */
    protected $totalEntries;
    /**
     * 
     *
     * @var int
     */
    protected $nextPage;
    /**
     * 
     *
     * @var int
     */
    protected $previousPage;
    /**
     * 
     *
     * @var int
     */
    protected $page;
    /**
     * 
     *
     * @var PaginationLinks
     */
    protected $links;
    /**
     * 
     *
     * @return Project[]
     */
    public function getProjects() : array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param Project[] $projects
     *
     * @return self
     */
    public function setProjects(array $projects) : self
    {
        $this->initialized['projects'] = true;
        $this->projects = $projects;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPerPage() : int
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param int $perPage
     *
     * @return self
     */
    public function setPerPage(int $perPage) : self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalPages() : int
    {
        return $this->totalPages;
    }
    /**
     * 
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages) : self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalEntries() : int
    {
        return $this->totalEntries;
    }
    /**
     * 
     *
     * @param int $totalEntries
     *
     * @return self
     */
    public function setTotalEntries(int $totalEntries) : self
    {
        $this->initialized['totalEntries'] = true;
        $this->totalEntries = $totalEntries;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNextPage() : int
    {
        return $this->nextPage;
    }
    /**
     * 
     *
     * @param int $nextPage
     *
     * @return self
     */
    public function setNextPage(int $nextPage) : self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreviousPage() : int
    {
        return $this->previousPage;
    }
    /**
     * 
     *
     * @param int $previousPage
     *
     * @return self
     */
    public function setPreviousPage(int $previousPage) : self
    {
        $this->initialized['previousPage'] = true;
        $this->previousPage = $previousPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * 
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * 
     *
     * @return PaginationLinks
     */
    public function getLinks() : PaginationLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PaginationLinks $links
     *
     * @return self
     */
    public function setLinks(PaginationLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}