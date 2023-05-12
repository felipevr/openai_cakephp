<?php
// UsersFixture.php (dentro do diretório 'tests/Fixture')

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class UsersFixture extends TestFixture
{
    /**
     * Importa a configuração do fixture.
     *
     * @var array
     */
    public $import = ['table' => 'users', 'connection' => 'default'];

    /**
     * Dados do fixture.
     *
     * @var array
     */
    public $records = [
        [
            'username' => 'john_doe',
            'email' => 'john_doe@example.com',
            'password' => 'secret',
            'created' => '2022-01-01 00:00:00',
            'modified' => '2022-01-01 00:00:00',
        ],
        [
            'username' => 'jane_smith',
            'email' => 'jane_smith@example.com',
            'password' => 'password123',
            'created' => '2022-01-02 00:00:00',
            'modified' => '2022-01-02 00:00:00',
        ],
        // Adicione mais registros de usuário de teste conforme necessário
    ];
}
