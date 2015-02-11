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

use \Mockery as m;

/**
 * FinderReaderTest
 *
 * @package   Plum\PlumFinder
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2014-2015 Florian Eckerstorfer
 *
 * @group unit
 */
class FinderReaderTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Symfony\Component\Finder\Finder|\Mockery\MockInterface */
    private $finder;

    /** @var FinderReader */
    private $reader;

    public function setUp()
    {
        $this->finder = m::mock('Symfony\Component\Finder\Finder');
        $this->reader = new FinderReader($this->finder);
    }

    /**
     * @test
     * @covers Plum\PlumFinder\FinderReader::getIterator()
     */
    public function getIteratorShouldReturnIterator()
    {
        $iterator = m::mock('\Iterator');
        $this->finder->shouldReceive('getIterator')->andReturn($iterator);

        $this->assertEquals($iterator, $this->reader->getIterator());
    }

    /**
     * @test
     * @covers Plum\PlumFinder\FinderReader::count()
     */
    public function countShouldReturnNumberOfFiles()
    {
        $this->finder->shouldReceive('count')->once()->andReturn(2);

        $this->assertEquals(2, $this->reader->count());
    }
}
