<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Functor\Predicate;

/**
 * FloatP test
 *
 * @see FloatP
 * @coversDefaultClass Functor\Predicate\FloatP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Functor\Predicate
 * @since 1.0
 */
class FloatPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertTrue((new FloatP(new TrueP))(1.22));
        $this->assertFalse((new FloatP(new FalseP))(-1.22));
    }


    /**
     * @covers ::__construct
     * @covers ::__invoke()
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage This predicate is only on float subject
     */
    public function testInvalidSubject()
    {
        $this->assertTrue((new FloatP(new FalseP))(1));
    }
}