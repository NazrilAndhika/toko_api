<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->db->table('member_token')->truncate();
        $this->db->table('member')->truncate();
        $this->db->table('produk')->truncate();
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');

        $this->db->table('member')->insertBatch([
            [
                'id'       => 1,
                'nama'     => 'Administrator',
                'email'    => 'admin@admin.com',
                'password' => '$2y$10$6.p2/.xrrZzu9dFMCgXbxe.ruguQ93q8jceSXCJ8qtujQhHelRSEm',
            ],
            [
                'id'       => 2,
                'nama'     => 'nazril',
                'email'    => 'nazril@gmail.com',
                'password' => '$2y$10$KQPf6LMaHt2Edfl4Rl6T5eVlqfJorLNcn8wKTP5rWjlTpX2R.HvVO',
            ],
            [
                'id'       => 3,
                'nama'     => 'giska',
                'email'    => 'giska@gmail.com',
                'password' => '$2y$10$bYlRhTHC416NrklE.Zx5GemV0U76s02zJfgJE82HMGC6MWBbu6L02',
            ],
            [
                'id'       => 4,
                'nama'     => 'Alea',
                'email'    => 'ale@gmail.com',
                'password' => '$2y$10$ttMeKNOyayLLQMsOfHxGxO4Aw/ygca5Bw4OgwThdKD.cAlsm4J2U2',
            ],
            [
                'id'       => 5,
                'nama'     => 'Annisa Nur Amelia',
                'email'    => 'amel@gmail.com',
                'password' => '$2y$10$HLj0fkjlCC360K1hrTz9WePF.5lVco/7bgEpGDfWYXel9JF1DxOSe',
            ],
        ]);

        $this->db->table('member_token')->insertBatch([
            ['id' => 1, 'member_id' => 1, 'auth_key' => 'iZeMgB8xnh3TVTBuyapeIauJlmR4HYGv4felTjw41sbrIdGCemTo9Zf1oOfwBObUNvcH69uehIXqbgYJL1rqlgiiGkeuyCN8ku7i'],
            ['id' => 2, 'member_id' => 1, 'auth_key' => 'mAsWxoKjEx9PD22zRpshavnDdJomV3pq3MpL9nCj2JsADVBXANxAQToxVaHH0d6GYCPtibbHM7bkITiCyuJVIn8aWAvP8LQPiBLv'],
            ['id' => 3, 'member_id' => 1, 'auth_key' => '8qCT0vVgn8fzSipK62UrrN19GpeXHlcXWhIiuw87K7ZTvsjrOVq7eGuxPHXEoLVX8EVMH8zr1OGMXqMJ2WAUwA9YmEsX0Q41yGuY'],
            ['id' => 4, 'member_id' => 1, 'auth_key' => 'lGZLFOo1mMXHDiFeF8x075H8FHpMwlPrAVuufWr7a5qAXZr3IDumFzR7BSn0XeBsJWVWlKiXJ63RfjooWMUEIiAlMxaAEUgj3vrW'],
            ['id' => 5, 'member_id' => 1, 'auth_key' => 'TveuPhn8DM51GmaD8lIczQCqXEmIPiN2sdYmJVcW2PhO1KXLckkvmu1j7fPUaaKA1kkKmXaC65Sye62BQXiFGRsNhT1brjiNk2uq'],
            ['id' => 6, 'member_id' => 2, 'auth_key' => '5o25wHOoHhSomRa7YHvpafCKo9jRLXEuqPtkCGF5K4kqzZiVjFWRC7KSkdo2SDxXiTnYr93IHAkXpvcZ4Q5ULoSX94DLIICgUB27'],
            ['id' => 7, 'member_id' => 2, 'auth_key' => '5ghSP8uVQGyiJF3xjiWB5xgOUqFUPGAqDw5Ws9f49N4R7wL4uUOERcdTBycmM25RxaAcJZ4V31edk5KmHzXLVMvBp4XfGHFSLjxP'],
            ['id' => 8, 'member_id' => 2, 'auth_key' => 'GsLPD9qv9SlMdBtIba6vCdWUxUT5xytEJJWuldII9BM7TUjzop5ZlcB6PjfG6E3hl5sH8ISdQy9pqHsZKe8L1C7plENkxzauQ0Hf'],
            ['id' => 9, 'member_id' => 2, 'auth_key' => 'UKJNRzyaxtegzyBnoUfIBfs82ycC5ZgXuuhHHsVgSewY5Wgn9rpaU1yhSZyb0toOoDzjZtqxMYYBbqHmbCULLZkhd1qjwK0Rr8vf'],
            ['id' => 10, 'member_id' => 2, 'auth_key' => '7dZLCQkEKd0wRCGVrk2wEd95ZedNiE7RWx3mz9NmvMwXf3QI4njxiMVFYba6C7y19sgeO6MFLDIyzvIcEcEEYXmQVfdIZ9ZDEi1W'],
            ['id' => 11, 'member_id' => 2, 'auth_key' => 'PIxqb2gubJ8oV4DICU1lR1VUKjf4ngup38oG1W8ImMDB8QWczKvFlxNq4f57BKVmcf2jfgNEj7bzxVZEuHLtIfHXiyqfWw1cMiTN'],
            ['id' => 12, 'member_id' => 3, 'auth_key' => 'AoqUHzhfCOriE3MkvlYxMXqL1P9yzxbitd8ll9J9iWswT4efll6O4h90QndW4kJeIIj0NPvkutb0AxX6ZpKqlpQFZYHzWMiev4RS'],
            ['id' => 13, 'member_id' => 3, 'auth_key' => 'BRQ3cDevGpBw3HRSbHmlfXGESfQAVkIz1ctrNPaX6KWF3jIx398Z9Ri3Qfrs0QOiQpfkDUTwqSGTTpYvaOsPpFEZT0F1HuUIwmC8'],
            ['id' => 14, 'member_id' => 3, 'auth_key' => 'eEdXi6y6BWmPQGKMgi1CusnHU80NxlJYVaxZ9XWNQlrPZrjwo2rsS8C2ILbD3YDZQJFsaepzfzKjsPMhR10PVUQjwKiBDetZlDjQ'],
            ['id' => 15, 'member_id' => 3, 'auth_key' => 'sPaYiVv1uZ5mSSX1Z2vfvghdapwGi3WOGTxPm7EonQqPekLDzaaV9GeFozxVBVM9qeRHjELPn38k2nKRQxyVz8osWkmEw9RJrTUs'],
            ['id' => 16, 'member_id' => 4, 'auth_key' => 'Psa66jgUI2KB5qZyZxYAUuHawDKehqm4rXnVa2XoUeQG3K7GbEZTvPfK5qYN3jaEUYVjBNrHnnGDw6c7cQhY8MqQJ2Q6FA4OT2yh'],
            ['id' => 17, 'member_id' => 2, 'auth_key' => 'rxdXqKP5zGXoNyuuYedxWA9e1nafKpWpTG7701689rwqxQPA6XvK26ChBY4agjGokvJRPHF5dBUD0waLZpgW6W4Tl8UYmH3BcXEt'],
            ['id' => 18, 'member_id' => 2, 'auth_key' => 'P9VU7TZgHh5Emyl0REzF0kbPia0L24WgR23iCc4Cq7cOBJK4mmxBCnMiTLexaP9P9FmJl2GYLdlcN7IZ2GTrhIfys01JPOssetTM'],
            ['id' => 19, 'member_id' => 2, 'auth_key' => 'rd7XolbWkqYTJhjkzXA9SCI2QgmReLjdNPZOIGizPmPVw8R7qovcMdrn5cX1r3E4PPAnHcS2izqhZ2U9GzfjHq08sPAv1KRlmfuN'],
            ['id' => 20, 'member_id' => 5, 'auth_key' => 'AgE9YPBi7hWqbnFMotJ4alX0dH2lse3iczDe4vU49xnQchUXECgyLxDhHvqQJ2oAiw12ATixJwKg7IzyFVT0NQYZHDjdeG9GH6oL'],
        ]);

        $this->db->table('produk')->insertBatch([
            ['id' => 11, 'kode_produk' => '1', 'nama_produk' => 'anduk', 'harga' => 1000],
            ['id' => 12, 'kode_produk' => '2', 'nama_produk' => 'beat', 'harga' => 50000],
            ['id' => 13, 'kode_produk' => '9', 'nama_produk' => 'caac', 'harga' => 99999],
            ['id' => 14, 'kode_produk' => '0909', 'nama_produk' => 'amel', 'harga' => 23000],
        ]);
    }
}
