<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Argument;

use RsORM\Query\Engine\MySQL;

class NullValue implements MySQL\SingleValueInterface {
    
    /**
     * @return string
     */
    public function prepare() {
        return "NULL";
    }
    
    public function value() {
        return null;
    }
    
}
