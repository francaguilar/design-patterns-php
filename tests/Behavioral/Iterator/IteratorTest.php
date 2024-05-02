<?php

namespace Codenip\Tests\Behavioral\Iterator;

use Codenip\Behavioral\Iterator\Model\Book;
use Codenip\Behavioral\Iterator\SimpleIterator;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    /**
     * @dataProvider bookDataProvider
     */
    public function testIteratorWithBooks(array $books): void
    {
        $iterator = new SimpleIterator($books);

        // con iterator usar bucles while o do-while
        while($iterator->valid()){
            /** @var Book $book */
            $book = $iterator->current();
            $key = $iterator->key();

            self::assertEquals($books[$key]->getIsbn(), $book->getIsbn());
            self::assertEquals($books[$key]->getTitle(), $book->getTitle());

            $iterator->next();
        }

        self::assertCount(4, $iterator);
    }

    /**
     * @dataProvider bookDataProvider
     */
    public function testRewind(array $books): void
    {
        $iterator = new SimpleIterator($books);

        self::assertEquals(0, $iterator->key());

//        $count = iterator_count($iterator);
        $count = $iterator->count();

        self::assertEquals(4, $count);

//        $iterator->rewind();

        self::assertEquals(0, $iterator->key());
    }

    public static function bookDataProvider(): iterable
    {
        yield 'Books' => [
            'books' => [
                new Book('978-0596809485', 'Clean Code: A Handbook of Agile Software Craftsmanship'),
                new Book('978-0201633610', 'Design Patterns: Elements of Reusable Object-Oriented Software'),
                new Book('978-0132350884', 'The Pragmatic Programmer: Your Journey To Mastery'),
                new Book('978-0201835953', 'Refactoring: Improving the Design of Existing Code'),
            ],
        ];

    }
}