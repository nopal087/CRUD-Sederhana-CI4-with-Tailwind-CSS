<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berandas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'warna' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('berandas');
    }

    public function down()
    {
        $this->forge->dropTable('berandas');
    }
}
