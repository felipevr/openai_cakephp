<?php
// AddDataToUsersTable.php (dentro do diretório 'config/Migrations')

use Migrations\AbstractMigration;

class AddDataToUsersTable extends AbstractMigration
{
    /**
     * Up Method.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'username' => 'john_doe',
                'email' => 'john_doe@example.com',
                'password' => 'secret',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'jane_smith',
                'email' => 'jane_smith@example.com',
                'password' => 'password123',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            // Adicione mais registros de usuário conforme necessário
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    /**
     * Down Method.
     *
     * @return void
     */
    public function down()
    {
        $this->execute("DELETE FROM users where username = 'john_doe' ");
        $this->execute("DELETE FROM users where username = 'jane_smith' ");
    }
}
