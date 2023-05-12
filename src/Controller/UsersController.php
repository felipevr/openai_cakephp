<?php
// UserController.php

namespace App\Controller;

use App\Model\Table\UsersTable;
use Cake\Controller\Controller;
use Cake\Http\Response;

/**
 * @property UsersTable $Users
 */
class UsersController extends Controller
{
    /**
     * Retorna uma lista de usuários.
     *
     * @return Response
     */
    public function index(): Response
    {
        // Lógica para buscar a lista de usuários do banco de dados
        $users = $this->Users->find()->toArray();

        $this->set(compact('users'));
        $this->viewBuilder()->setOption('serialize', ['users']);

        return $this->response;
    }

    /**
     * Retorna os detalhes de um usuário específico.
     *
     * @param int $id ID do usuário
     * @return Response
     */
    public function view(int $id): Response
    {
        // Lógica para buscar os detalhes do usuário com o ID fornecido
        $user = $this->Users->get($id);

        $this->set(compact('user'));
        $this->viewBuilder()->setOption('serialize', ['user']);

        return $this->response;
    }

    /**
     * Adiciona um novo usuário.
     *
     * @return Response
     */
    public function add(): Response
    {
        // Lógica para adicionar um novo usuário com os dados fornecidos

        return $this->response->withStatus(201); // Retorna uma resposta com código de status 201 (Created)
    }

    /**
     * Edita um usuário existente.
     *
     * @param int $id ID do usuário
     * @return Response
     */
    public function edit(int $id): Response
    {
        // Lógica para editar o usuário com o ID fornecido

        return $this->response->withStatus(200); // Retorna uma resposta com código de status 200 (OK)
    }

    /**
     * Exclui um usuário.
     *
     * @param int $id ID do usuário
     * @return Response
     */
    public function delete(int $id): Response
    {
        // Lógica para excluir o usuário com o ID fornecido

        return $this->response->withStatus(204); // Retorna uma resposta com código de status 204 (No Content)
    }
}
