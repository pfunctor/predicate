<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Functor\Predicate;

/**
 * NotEmptyP test
 *
 * @see NotEmptyP
 * @coversDefaultClass Functor\Predicate\NotEmptyP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Functor\Predicate
 * @since 1.0
 */
class NotEmptyPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertTrue((new NotEmptyP())([1, 2]));
        $this->assertTrue((new NotEmptyP())(true));
        $this->assertTrue((new NotEmptyP())(1.22));

        $this->assertFalse((new NotEmptyP())([]));
        $this->assertFalse((new NotEmptyP())(''));
        $this->assertFalse((new NotEmptyP())(false));
    }
}