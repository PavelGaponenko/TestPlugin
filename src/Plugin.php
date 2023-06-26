<?php

namespace Pavelgaponenko\TestPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\PluginInterface;
use Pavelgaponenko\TestPlugin\Command\TestCommand;

class Plugin implements PluginInterface, CommandProvider
{
    public function activate(Composer $composer, IOInterface $io)
    {
        echo "hello world";
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement deactivate() method.
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // TODO: Implement uninstall() method.
    }

    public function getCommands()
    {
        return [
            'plugin-test-command' => TestCommand::class,
        ];
    }
}