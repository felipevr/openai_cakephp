<?php
// Exemplo de classe de teste para o controlador UserController

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures utilizados neste teste.
     *
     * @var array
     */
    public $fixtures = [
        'app.Users',
    ];

    /**
     * Configuração do teste.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        // Configurações adicionais necessárias para o teste
        // por exemplo, autenticação, autorização, etc.
    }

    /**
     * Teste para a ação "index" do controlador UserController.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/users'); // Realiza uma requisição GET para a rota '/users'
        $this->assertResponseOk(); // Verifica se a resposta foi bem-sucedida (código de status 200)
        $this->assertResponseContains('List of users'); // Verifica se a resposta contém o texto 'List of users'
        // Adicione mais verificações específicas para o conteúdo retornado pela ação "index" se necessário
    }

    /**
     * Teste para a ação "view" do controlador UserController.
     *
     * @return void
     */
    public function testView()
    {
        $userId = 1;
        $this->get("/users/view/{$userId}"); // Realiza uma requisição GET para a rota '/users/view/{$userId}'
        $this->assertResponseOk(); // Verifica se a resposta foi bem-sucedida (código de status 200)
        // Adicione mais verificações específicas para o conteúdo retornado pela ação "view" se necessário
    }

    /**
     * Teste para a ação "add" do controlador UserController.
     *
     * @return void
     */
    public function testAdd()
    {
        $this->enableCsrfToken(); // Habilita a verificação CSRF

        $data = [
            'username' => 'john_doe',
            'email' => 'john_doe@example.com',
            'password' => 'secret',
        ];

        $this->post('/users/add', $data); // Realiza uma requisição POST para a rota '/users/add' com os dados fornecidos
        $this->assertResponseSuccess(); // Verifica se a resposta foi bem-sucedida (código de status 2xx)
        // Adicione mais verificações específicas para a ação "add" se necessário
    }

    /**
     * Teste para a ação "edit" do controlador UserController.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->enableCsrfToken(); // Habilita a verificação CSRF

        $userId = 1;
        $data = [
            'email' => 'new_email@example.com',
        ];
        $this->post("/users/edit/{$userId}", $data); // Realiza uma requisição POST para a rota '/users/edit/{$userId}' com os dados fornecidos
        $this->assertResponseSuccess(); // Verifica se a resposta foi bem-sucedida (código de status 2xx)
        // Adicione mais verificações específicas para a ação "edit" se necessário
    }

    /**
     * Teste para a ação "delete" do controlador UserController.
     *
     * @return void
     */
    public function testDelete()
    {
        $this->enableCsrfToken(); // Habilita a verificação CSRF

        $userId = 1;

        $this->post("/users/delete/{$userId}"); // Realiza uma requisição POST para a rota '/users/delete/{$userId}'
        $this->assertResponseCode(204); // Verifica se a resposta tem o código de status 204 (No Content)

        // Verifica se o usuário foi excluído do banco de dados
        $this->assertNull($this->Users->findById($userId)->first());
    }

}
