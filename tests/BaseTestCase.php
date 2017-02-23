<?php

namespace Nwidart\LaravelVideoable\tests;

use Illuminate\Database\Schema\Blueprint;
use Nwidart\LaravelVideoable\LaravelVideoableServiceProvider;
use Nwidart\LaravelVideoable\Models\Video;
use Nwidart\LaravelVideoable\tests\Stubs\Product;
use Orchestra\Testbench\TestCase;

abstract class BaseTestCase extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->setUpDatabase($this->app);
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelVideoableServiceProvider::class,
        ];
    }
    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', array(
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ));
    }

    /**
     * Set up the database.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function setUpDatabase($app)
    {
        $app['db']->connection()->getSchemaBuilder()->create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
        });

        include_once __DIR__ . '/../database/migrations/create_video_table.php.stub';
        (new \CreateVideosTable())->up();
    }

    /** @test */
    public function it_database_is_setup()
    {
        $this->createVideo();

        $this->assertCount(1, Video::all());
    }

    protected function createVideo(array $attributes = [])
    {
        $data = [
            'source' => 'test',
            'code' => '123',
            'title' => 'my video',
            'width' => 50,
            'height' => 150,
            'videoable_id' => 1,
            'videoable_type' => 'My\Class',
        ];

        return Video::create(array_merge($data, $attributes));
    }

    protected function createProduct(array $attributes = [])
    {
        $data = [
            'product_name' => 'My awesome product',
        ];

        return Product::create(array_merge($data, $attributes));
    }
}
