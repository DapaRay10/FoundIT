<?php

    require "../config/conf.php";

    Class Barang
    {
        public function __construct()
        {
            
        }
        public function get_data()
        {
            $sql = "SELECT barang.id_barang,
                    barang.type_found,
                    barang.fasilitas_kamar,
                    found.type_found,
                    barang.gambar,
                    FROM barang INNER JOIN found ON
                    barang.type_found = found.id_user";
            return runQuery($sql);
        }

        public function insert($type_found, $desk, $gambar)
        {
            $sql = "INSERT INTO barang (type_found, fasilitas_kamar, gambar) VALUES ('$type_found', '$desk', '$gambar')";
            return runQuery($sql);
        }

        public function update($id_barang, $type_found, $desk, $gambar)
        {
            $sql = "UPDATE barang SET type_found='$type_found', fasilitas_kamar='$desk', gambar='$gambar' WHERE id_barang = '$id_barang'";
            return runQuery($sql);
        }
        
        public function show($id_barang)
        {
            $sql = "SELECT * FROM barang WHERE id_barang='$id_barang'";
            return runQueryRow($sql);
        }

        public function delete_data($id_barang)
        {
            $sql = "DELETE FROM barang WHERE id_barang='$id_barang'";
            return runQuery($sql);
        }
    }
