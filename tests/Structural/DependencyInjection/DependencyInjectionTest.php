<?php

namespace Codenip\Tests\Structural\DependencyInjection;

use Codenip\Structural\DependencyInjection\model\Product;
use Codenip\Structural\DependencyInjection\ProductService;
use Codenip\Structural\DependencyInjection\repository\MySQLProductRepository;
use Codenip\Structural\DependencyInjection\repository\ProductRepository;
use Codenip\Structural\DependencyInjection\repository\RedisProductRepository;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{

    private readonly ProductRepository|MockObject $productRepository;
    private readonly ProductService $productService;

    protected function setUp(): void
    {
       $this->productRepository = $this->createMock(ProductRepository::class);
       $this->productService = new ProductService($this->productRepository);
    }

    public function testDependencyInjectionWithMock(): void
    {
        $id = 1;
        $name = 'Product 1';
        $price = 1000.00;

        $this->productRepository->expects($this->once())
            ->method('save')
            ->with($this->callback(function (Product $product) use ($id, $name, $price): bool {
                return $product->getId() === $id
                    && $product->getName() === $name
                    && $product->getPrice() === $price;
            }));

        $this->productService->createProduct($id, $name, $price);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testDependencyInjection(ProductService $service, string $expectedOutput): void
    {
        \ob_start();
        $service->createProduct(1, 'Product 1', 1000.00);
        $output = \ob_get_clean();

        self::assertEquals($expectedOutput, $output);
    }

    public static function dataProvider(): iterable
    {
        yield 'MySQL repository' =>
        [
            'service' => new ProductService(new MySQLProductRepository()),
            'expectedOutput' => 'Saving product with MySQLProductRepository' . PHP_EOL
        ];

        yield 'Redis repository' =>
        [
            'service' => new ProductService(new RedisProductRepository()),
            'expectedOutput' => 'Saving product with RedisProductRepository' . PHP_EOL
        ];

    }
}