<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $this->table( 'users' )
            ->addColumn( 'username' , 'string' , [
                'default' => null,
                'limit' => 32,
                'null' => false,
            ])
            ->addColumn( 'password' , 'string' , [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn( 'fullname' , 'string' , [
                'default' => null,
                'limit' => 128,
                'null' => true,
            ])
            ->addColumn( 'role' , 'string' , [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn( 'created' , 'datetime' , [
                'default' => null,
                'null' => false,
            ])
            ->addColumn( 'updated' , 'datetime' , [
                'default' => null,
                'null' => false,
            ])
            ->addIndex([
                'username',
            ],
            [
                'name' => 'UNIQUE_USERNAME',
                'unique' => true,
            ])
            ->create();
    }
}
