<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Expression;

use RsORM\Query\Engine\MySQL;

class Between extends AbstractCustomOperator {
    
    /**
     * @param MySQL\ObjectInterface $operand
     * @param MySQL\ObjectInterface $min
     * @param MySQL\ObjectInterface $max
     */
    public function __construct(MySQL\ObjectInterface $operand, MySQL\ObjectInterface $min, MySQL\ObjectInterface $max) {
        parent::__construct([$operand, $min, $max]);
    }
    
    /**
     * @return string
     */
    public function prepare() {
        $preparedOperands = $this->_prepareOperands();
        return "{$preparedOperands[0]} BETWEEN {$preparedOperands[1]} AND {$preparedOperands[2]}";
    }
    
}
