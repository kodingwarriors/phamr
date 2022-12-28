<?php

namespace Phamr\Command;

class MigrationTask
{
    public function mainAction()
    {
        print "Phamr Migration tool".PHP_EOL;
    }

    public function createAction()
    {
        print "CREATE migration".PHP_EOL;
    }

    public function migrateAction()
    {
        print "Run migration".PHP_EOL;
    }

    public function listAction()
    {
        print "List existing migration script".PHP_EOL;
    }
}