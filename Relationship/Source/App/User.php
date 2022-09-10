<?php

namespace App;

class User {
    private $name;
    private $job;

    public function __construct($name, $job) {
        $this->setName($name);
        $this->setJob($job);
    }

    public function getFullDrescription()
    {
        return "{$this->getName()} - {$this->getJob()}";
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of job
     */ 
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set the value of job
     *
     * @return  self
     */ 
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }
}