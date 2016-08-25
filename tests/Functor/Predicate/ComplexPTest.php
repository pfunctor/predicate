<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Functor\Predicate;

/**
 * ComplexP test
 *
 * @see ComplexP
 * @coversDefaultClass Functor\Predicate\ComplexP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Functor\Predicate
 * @since 1.0
 */
class ComplexPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::negate
     * @covers ::andP
     * @covers ::orP
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertTrue(((new ComplexP(new TrueP))->orP(new FalseP))(null));
        $this->assertTrue(((new ComplexP(new TrueP))->orP(new TrueP))(null));

        $this->assertFalse(((new ComplexP(new FalseP))->andP(new TrueP))(null));
        $this->assertTrue(((new ComplexP(new TrueP))->andP(new TrueP))(null));

        $this->assertTrue(((new ComplexP(new FalseP))->negate())(null));
        $this->assertFalse(((new ComplexP(new TrueP))->negate())(null));
    }
}
