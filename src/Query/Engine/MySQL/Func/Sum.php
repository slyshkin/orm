<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Func;

class Sum extends AbstractDistinctFunction {
    
    /**
     * @return string
     */
    protected function _function() {
        return "SUM";
    }
    
}
