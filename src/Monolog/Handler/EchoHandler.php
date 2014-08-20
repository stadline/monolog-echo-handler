<?php

namespace Monolog\Handler;

use Monolog\Logger;
use Monolog\Formatter\LineFormatter;

/**
 * Stores to output
 * 
 * @author Stadline <contact@stadline.com>
 */
class EchoHandler extends StreamHandler
{
    /**
     * @param integer $level  The minimum logging level at which this handler will be triggered
     * @param Boolean $bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct('php://output', $level, $bubble);
    }
    
    /**
     * Gets the default formatter.
     *
     * @return FormatterInterface
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter();
    }
}
