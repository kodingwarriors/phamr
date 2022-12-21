<?php

namespace Phamr\Plugins\Command;

use Phinx\Console\Command\Migrate;
use Phinx\Console\Command\Rollback;
use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication
{
    public function __construct()
    {
        parent::__construct('Phalm Console ');
        $this->addCommands([
            new InitMigration(),
            new CreateMigration(),
            new Migrate(),
            new Rollback(),
        ]);
    }
}