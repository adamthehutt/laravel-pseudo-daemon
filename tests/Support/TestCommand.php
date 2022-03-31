<?php
/**
 * @author Aaron Francis <aarondfrancis@gmail.com|https://twitter.com/aarondfrancis>
 */

namespace Hammerstone\PseudoDaemon\Tests\Support;


use Illuminate\Console\Command;
use Hammerstone\PseudoDaemon\IsPseudoDaemon;

class TestCommand extends Command
{
    use IsPseudoDaemon;

    public function handle()
    {
        $this->runAsPseudoDaemon();
    }

    /**
     * This is the main method that will be kept alive.
     */
    public function process()
    {

    }

}