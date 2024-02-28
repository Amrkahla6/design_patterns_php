<?php

namespace DesignPattern\Behavioral\Observer;

interface Observer
{
    public function onJobPosted(JobPost $job);
}