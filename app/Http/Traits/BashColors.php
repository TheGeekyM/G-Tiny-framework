<?php

namespace App\Traits;

trait BashColors
{
	static $red    = "\033[0;31m";
	static $yellow = "\033[1;33m";
	static $white  = "\033[1;37m";
	static $nc     = "\033[0m";

    public function error($line)
    {
		echo self::$red . " {$line} " . self::$nc . "\n";
    }

    public function warn($line)
    {
		echo self::$white . " {$line} " . self::$nc . "\n";
    }

    public function info($line)
    {
		echo self::$yellow . " {$line} " . self::$nc . "\n";
    }

    
}