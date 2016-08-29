<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Functor\Predicate;

/**
 * Predicate, that is logical negation of the other predicate
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Functor\Predicate
 * @since 1.0
 */
final class NotP implements Predicate
{
    /**
     * @var Predicate
     */
    private $predicate;

    /**
     * Predicate, that is logical negation of the other predicate
     *
     * @param Predicate $predicate
     */
    public function __construct(Predicate $predicate)
    {
        $this->predicate = $predicate;
    }

    /**
     * @inheritdoc
     */
    public function __invoke(...$subject): bool
    {
        return !call_user_func($this->predicate, ...$subject);
    }
}
