<?php

namespace DesignPattern\Behavioral\Observer;
use DesignPattern\Behavioral\Observer\JobPost;
class JobSeeker implements Observer
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // TODO: Implement onJobPosted() method.
        echo 'Hi ' . $this->name . '! New job posted: '. $job->getTitle();
    }
}