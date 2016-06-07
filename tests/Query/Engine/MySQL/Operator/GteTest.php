<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RSDBTest\Query\Engine\MySQL\Operator;

use RSDB\Query\Engine\MySQL\Operator;
use RSDBTest;

class GteTest extends RSDBTest\Base {
    
    public function testSimpleValues() {
        $stmt = new Operator\Gte(12, 13);
        $this->assertSame("? >= ?", $stmt->prepare());
        $this->assertSame([12, 13], $stmt->values());
    }
    
    public function testComplexValues() {
        $stmt = new Operator\Gte(new Operator\Column("id"), new Operator\Value(13));
        $this->assertSame("`id` >= ?", $stmt->prepare());
        $this->assertSame([13], $stmt->values());
    }
    
}
