<?php

namespace Illuminate\Tests\Integration\Database;

use Illuminate\Database\Eloquent\Model;

/**
 * @group integration
 */
class EloquentModelScopeTest extends DatabaseTestCase
{
    public function testModelHasScope()
    {
        $model = new TestScopeModel1;

        $this->assertTrue($model->hasScope("exists"));
    }

    public function testModelDoesNotHaveScope()
    {
        $model = new TestScopeModel1;

        $this->assertFalse($model->hasScope("doesNotExist"));
    }
}

class TestScopeModel1 extends Model
{
    public function scopeExists()
    {
        return true;
    }
}
