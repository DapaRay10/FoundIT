<?php
require_once '../../config/conf.php';
?>

<head>

    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet"
        />
    
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    
        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../assets/css/demo.css" />
    
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
        <!-- Page CSS -->
    
        <!-- Helpers -->
        <script src="../assets/vendor/js/helpers.js"></script>
    
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../assets/js/config.js"></script>
</head>

<body>
<div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Input Laporan Kehilanganmu</h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori</label>
                        <div class="col-sm-3">
                            <div class="btn-group">
                                <button
                                    class="btn btn-primary dropdown-toggle"
                                    type="button"
                                    id="defaultDropdown"
                                    data-bs-toggle="dropdown"
                                    data-bs-auto-close="true"
                                    aria-expanded="false"
                                    >
                                    Kategori
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                  
                                    <li><a class="dropdown-item" href="javascript:void(0)">Barang</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Hewan Peliharaan</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Orang</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Barang</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" autocomplete="off" required placeholder="Nama Barang *Dompet,Handphone,dll" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Merk</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Isi dengan tanda '-' bila tidak ada Merk"
                              required
                              autocomplete="off"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              placeholder="Masukkan deskripsi warna, keadaan, tanda dsb"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-3">
                        <label for="formFile" class="form-label">Foto barang</label>
                        <input class="form-control" type="file" id="formFile" />
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</body>