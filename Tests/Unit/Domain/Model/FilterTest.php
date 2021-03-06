<?php
/**
 * Created by PhpStorm.
 * User: kpurrmann
 * Date: 28.10.15
 * Time: 11:12
 */

namespace Pws\KesearchCategories\Tests\Domain\Model;


use Pws\KesearchCategories\Domain\Model\Filter;
use TYPO3\CMS\Core\Tests\UnitTestCase;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class FilterTest extends UnitTestCase
{

    /**
     * @var Filter
     */
    protected $fixture;

    /**
     * @test
     */
    public function testConsctructorCreatesEmptyObjectStorages()
    {
        $this->assertInstanceOf('TYPO3\CMS\Extbase\Persistence\ObjectStorage', $this->fixture->getCategories());
    }

    /**
     * @test
     */
    public function testIsMultiSelectFilterMethod()
    {
        $this->fixture->setRendertype(Filter::TYPE_SELECT);
        $this->assertFalse($this->fixture->isMultiSelectFilter());

        $this->fixture->setRendertype(Filter::TYPE_LIST);
        $this->assertFalse($this->fixture->isMultiSelectFilter());

        $this->fixture->setRendertype(Filter::TYPE_CHECKBOX);
        $this->assertTrue($this->fixture->isMultiSelectFilter());

        $this->fixture->setRendertype(Filter::TYPE_TEXTLINKS);
        $this->assertTrue($this->fixture->isMultiSelectFilter());
    }

    /**
     *
     */
    protected function setUp()
    {
        $this->fixture = new Filter();
    }


}
