<?php

namespace Phamr\Plugins\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Phinx\Console\Command\Create;

#[AsCommand(name: 'create:migration')]
class CreateMigration extends Create
{
    protected static $defaultName = 'create:migration';
}