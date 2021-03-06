<?php

use Illuminate\Database\Seeder;
//use database\seeds\NotesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(MenusTableSeeder::class);
        //$this->call(UsersAndNotesSeeder::class);
        $this->call('MenusTableSeeder');
        $this->call('UsersAndNotesSeeder');
        $this->call('FolderTableSeeder');
    }
}
