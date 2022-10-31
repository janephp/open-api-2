<?php

namespace Docker\Api\Model;

class ContainersIdTopGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ps column titles
     *
     * @var string[]
     */
    protected $titles;
    /**
    * Each process running in the container, where each is process
    is an array of values corresponding to the titles.
    
    *
    * @var string[][]
    */
    protected $processes;
    /**
     * The ps column titles
     *
     * @return string[]
     */
    public function getTitles() : array
    {
        return $this->titles;
    }
    /**
     * The ps column titles
     *
     * @param string[] $titles
     *
     * @return self
     */
    public function setTitles(array $titles) : self
    {
        $this->initialized['titles'] = true;
        $this->titles = $titles;
        return $this;
    }
    /**
    * Each process running in the container, where each is process
    is an array of values corresponding to the titles.
    
    *
    * @return string[][]
    */
    public function getProcesses() : array
    {
        return $this->processes;
    }
    /**
    * Each process running in the container, where each is process
    is an array of values corresponding to the titles.
    
    *
    * @param string[][] $processes
    *
    * @return self
    */
    public function setProcesses(array $processes) : self
    {
        $this->initialized['processes'] = true;
        $this->processes = $processes;
        return $this;
    }
}