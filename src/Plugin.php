<?php

namespace Pavelgaponenko\TestPlugin;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        print "hello world";
    }
}