<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RlzJHM7djlB9crKz6TE4TOp9zdfLV7uPbU2ioG1JX.OfWHBZWJNdG',
                'remember_token' => 'eQdmpwO4Q7HUHa2y1BIJll07aHSkftCyMum1SLtZgmPMm7XbfRJDyB0YjaZ7',
                'settings' => NULL,
                'created_at' => '2020-05-23 11:08:15',
                'updated_at' => '2020-05-23 11:08:15',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Customer 1',
                'email' => 'customer1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m2P6ZAxI1Y/yOnJ8cGkCvewBNPeDFmUP6jkPHeL/CXKO/00iqK9ii',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-23 11:20:25',
                'updated_at' => '2020-05-23 10:58:32',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Customer 2',
                'email' => 'customer2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RNFhaXkyA0LDvm51EKpp2.lidAtwASiJwP5RfE73DgeKvJnrfRJNS',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-23 11:20:25',
                'updated_at' => '2020-05-23 11:20:26',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RNFhaXkyA0LDvm51EKpp2.lidAtwASiJwP5RfE73DgeKvJnrfRJNS',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-23 11:20:25',
                'updated_at' => '2020-05-23 11:20:26',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RNFhaXkyA0LDvm51EKpp2.lidAtwASiJwP5RfE73DgeKvJnrfRJNS',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-23 11:20:25',
                'updated_at' => '2020-05-23 11:20:26',
            ),
        ));
        
        
    }
}