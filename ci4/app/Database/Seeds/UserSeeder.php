<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'anshor',
            'useremail' => 'anshor@gmail.com',
            'userpassword' => password_hash('anshor123', PASSWORD_DEFAULT),
        ]);
    }
}