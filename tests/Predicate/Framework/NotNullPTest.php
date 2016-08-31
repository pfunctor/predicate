<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predicate\Framework;

/**
 * NotNullP test
 *
 * @see NotNullP
 * @coversDefaultClass Framework\Framework\NotNullP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Framework\Framework
 * @since 1.0
 */
class NotNullPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertTrue((new NotNullP())([], 1.22, '', 0, false, ['', false, 1], new \stdClass));
        $this->assertFalse((new NotNullP())(1, 2.22, true, null));
    }
}