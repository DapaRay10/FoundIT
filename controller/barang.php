<?php

    require_once "../modals/barang.php";

    $barang = new Barang();
    


  // Fungsi untuk menampilkan halaman upload gambar
 


    // cek jika ada id_barang, tipekamar, desk pada request
    // jika ada id kamar maka cleanstring
    // jika tidk ada maka kosongkan

    $id_barang= isset($_POST["id_barang"]) ? cleanString($_POST["id_barang"]): "";
    $type_found = isset($_POST["type_found"]) ? cleanString($_POST["type_found"]): "";
    $desk = isset($_POST["desk"]) ? cleanString($_POST["desk"]): "";
    // $gambar = isset($_FILES["gambar"]["name"]) ? cleanString($_FILES["gambar"]['name']): "";
    // $gambar_tmp = $_FILES["gambar"]["tmp_name"];
    // move_uploaded_file($gambar_tmp, $path . $gambar);
    // move_uploaded_file($gambar_tmp, "../public/uploads" . $gambar);
    
    
    
    // struktur kendali CRUD
    switch ($_GET["action"]){
        case 'saveOrEdit' :
            if(empty($id_barang)){
                // jika $id-kamar tidak ada pada request, jalankan method insert
                $response = $barang->insert($type_found, $desk, $gambar);
            }else{
                // jika $id_barangada, jalankan method edit
                $response = $barang->update($id_barang, $type_found, $desk, $gambar);
            }
            break;
            
            case 'get_data' :
                $response = $barang->get_data();

                $data = Array();

                while($row = $response->fetch_object()){
                    $data = array(
                        "0"=>$row->type_found,
                        "1"=>$row->desk,
                        "2"=>$row->gambar_tmp,
                        // "3"=>'<button class="btn btn-info btn-sm" onclick="show('.$row->id_barang.')" title="Edit Data"><i class="fa fa-pencil"></i></button>
                        // <button class="btn btn-info btn-sm" onclick="delete_data('.$row->id_barang.')" title="Delete Data"><i class="fa fa-trash"></i></button>'
                    );
                    
                }
                $view = new View('../dashboard/html/form_hilang.php', $data);
                $view->render();
            $result = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data
            );
            echo json_encode($result);
            break;

            case 'show' :
                $response = $barang->show($id_barang);
                echo json_encode($response);
            break;

            case 'delete_data' :
                $response = $barang->delete_data($id_barang);
            break;

            
            
    }
