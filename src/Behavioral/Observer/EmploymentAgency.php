<?php

namespace DesignPattern\Behavioral\Observer;


class EmploymentAgency implements Observable
{

    protected $observers = [];

    public function notify(JobPost $jobPosting)
    {
        // TODO: Implement notify() method.
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach(Observer $observer)
    {
        // TODO: Implement attach() method.
        $this->observers[] = $observer;
    }

    public function addJob(JobPost $jobPosting)
    {
        // TODO: Implement addJob() method.
        $this->notify($jobPosting);
    }
}