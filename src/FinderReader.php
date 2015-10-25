<?php

/**
 * This file is part of plumphp/plum-finder.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plum\PlumFinder;

use Plum\Plum\Reader\ReaderInterface;
use Symfony\Component\Finder\Finder;

/**
 * FinderReader.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2014-2015 Florian Eckerstorfer
 */
class FinderReader implements ReaderInterface
{
    /** @var Finder */
    private $finder;

    /**
     * @param Finder $finder
     *
     * @codeCoverageIgnore
     */
    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @return \Iterator
     */
    public function getIterator()
    {
        return $this->finder->getIterator();
    }

    /**
     * Returns the number of files that are read.
     *
     * @return int
     */
    public function count()
    {
        return $this->finder->count();
    }

    /**
     * @param mixed $input
     *
     * @return bool
     */
    public static function accepts($input)
    {
        return $input instanceof Finder;
    }
}
