<?php

namespace Phamr\Command;
use Phalcon\Cli\Task;

class MainTask extends Task
{
    public function mainAction()
    {
        echo 'Phamr Command Tool' . PHP_EOL;
    }


}