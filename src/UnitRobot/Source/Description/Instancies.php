<?php
namespace MemMemov\UnitRobot\Source\Description;

class Instancies
{
    public function createInstance(): Instance
    {
        return new Instance(
            new InstanceName(),
            new InstanceProperties(),
            new InstanceMethods(),
            new InstanceDependencies()
        );
    }
}