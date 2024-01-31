<?php

namespace Docker\Api\Model;

class ServiceSpecMode
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
     * @var ServiceSpecModeReplicated
     */
    protected $replicated;
    /**
     * 
     *
     * @var mixed
     */
    protected $global;
    /**
    * The mode used for services with a finite number of tasks that run
    to a completed state.
    
    *
    * @var ServiceSpecModeReplicatedJob
    */
    protected $replicatedJob;
    /**
    * The mode used for services which run a task to the completed state
    on each valid node.
    
    *
    * @var mixed
    */
    protected $globalJob;
    /**
     * 
     *
     * @return ServiceSpecModeReplicated
     */
    public function getReplicated() : ServiceSpecModeReplicated
    {
        return $this->replicated;
    }
    /**
     * 
     *
     * @param ServiceSpecModeReplicated $replicated
     *
     * @return self
     */
    public function setReplicated(ServiceSpecModeReplicated $replicated) : self
    {
        $this->initialized['replicated'] = true;
        $this->replicated = $replicated;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getGlobal()
    {
        return $this->global;
    }
    /**
     * 
     *
     * @param mixed $global
     *
     * @return self
     */
    public function setGlobal($global) : self
    {
        $this->initialized['global'] = true;
        $this->global = $global;
        return $this;
    }
    /**
    * The mode used for services with a finite number of tasks that run
    to a completed state.
    
    *
    * @return ServiceSpecModeReplicatedJob
    */
    public function getReplicatedJob() : ServiceSpecModeReplicatedJob
    {
        return $this->replicatedJob;
    }
    /**
    * The mode used for services with a finite number of tasks that run
    to a completed state.
    
    *
    * @param ServiceSpecModeReplicatedJob $replicatedJob
    *
    * @return self
    */
    public function setReplicatedJob(ServiceSpecModeReplicatedJob $replicatedJob) : self
    {
        $this->initialized['replicatedJob'] = true;
        $this->replicatedJob = $replicatedJob;
        return $this;
    }
    /**
    * The mode used for services which run a task to the completed state
    on each valid node.
    
    *
    * @return mixed
    */
    public function getGlobalJob()
    {
        return $this->globalJob;
    }
    /**
    * The mode used for services which run a task to the completed state
    on each valid node.
    
    *
    * @param mixed $globalJob
    *
    * @return self
    */
    public function setGlobalJob($globalJob) : self
    {
        $this->initialized['globalJob'] = true;
        $this->globalJob = $globalJob;
        return $this;
    }
}