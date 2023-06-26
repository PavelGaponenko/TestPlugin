<?php

namespace Pavelgaponenko\TestPlugin;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use Pavelgaponenko\TestPlugin\Command\TestCommand;

class TestCommandProvider implements CommandProviderCapability
{
    public function getCommands(): array
    {
        return [new TestCommand()];
    }
}