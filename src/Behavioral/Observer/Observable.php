<?php

namespace DesignPattern\Behavioral\Observer;

interface Observable
{
    public function notify(JobPost $jobPosting);
    public function attach(Observer $observer);
    public function addJob(JobPost $jobPosting);
}