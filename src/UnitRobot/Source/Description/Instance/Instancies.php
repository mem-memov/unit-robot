<?php
namespace MemMemov\UnitRobot\Source\Description\Instance;

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