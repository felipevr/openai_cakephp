<?php
// UsersTableTest.php (dentro do diretório 'tests/TestCase/Model/Table')

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\TestSuite\TestCase;

class UsersTableTest extends TestCase
{
    /**
     * Teste para o método initialize()
     *
     * @return void
     */
    public function testInitialize()
    {
        $table = new UsersTable();
        $this->assertInstanceOf(UsersTable::class, $table);
        $this->assertEquals('users', $table->getTable());
        $this->assertEquals('id', $table->getPrimaryKey());
        $this->assertCount(3, $table->getSchema()->columns());
    }
}
