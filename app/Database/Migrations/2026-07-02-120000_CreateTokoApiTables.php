<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTokoApiTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('member', true);

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'member_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'auth_key' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('member_id');
        $this->forge->createTable('member_token', true);

        $this->db->query(
            'ALTER TABLE `member_token` ' .
            'ADD CONSTRAINT `member_token_member_id_foreign` ' .
            'FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ' .
            'ON UPDATE CASCADE'
        );

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'kode_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('produk', true);
    }

    public function down()
    {
        $this->forge->dropTable('produk', true);
        $this->forge->dropTable('member_token', true);
        $this->forge->dropTable('member', true);
    }
}
