<?php declare(strict_types=1);

namespace WeyerSE\Core\Content\TestEntity;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(TestEntityEntity $entity)
 * @method void set(string $key, TestEntityEntity $entity)
 * @method TestEntityEntity[] getIterator()
 * @method TestEntityEntity[] getElements()
 * @method TestEntityEntity|null get(string $key)
 * @method TestEntityEntity|null first()
 * @method TestEntityEntity|null last()
 */
class TestEntityCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TestEntityEntity::class;
    }
}
