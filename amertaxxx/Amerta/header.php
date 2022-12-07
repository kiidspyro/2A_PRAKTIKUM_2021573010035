        <nav class="navbar navbar-expand navbar-light bg-white sticky-top">
            <div class="container-lg">
                <a class="navbar-brand" href=".">
                    <i class="bi bi-newspaper"></i>
                    Amerta
                </a>
                <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $hasil['username']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword">
                                        <i class="bi bi-key-fill"></i></i> Ubah Password</a></li>

                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalProfile">
                                        <i class="bi bi-person-circle"></i> Profile</a></li>

                                <li><a class="dropdown-item" href="logout">
                                        <i class="bi bi-box-arrow-left"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal Ubah Password-->
        <div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="post">

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required name="username" value="<?php echo $_SESSION['username_decafe'] ?>">
                                        <label for="floatingInput">Username</label>
                                        <div class="invalid-feedback">
                                            Masukkan username
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" required name="passwordlama">
                                        <label for="floatingInput">Password Lama</label>
                                        <div class="invalid-feedback">
                                            Masukkan Password Lama
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" required name="passwordbaru">
                                        <label for="floatingInput">Password Baru</label>
                                        <div class="invalid-feedback">
                                            Masukkan password baru
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" required name="repasswordbaru">
                                        <label for="floatingInput">Ulangi password baru</label>
                                        <div class="invalid-feedback">
                                            ayo Ulangi password baru
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="12345">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- Akhir Modal Ubah Password-->

        <!-- Modal Profile-->
        <div class="modal fade" id="ModalProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-circle"></i> Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="proses/proses_profile.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input disabled type="text" class="form-control" id="floatingInput" placeholder="your name" name="nama" value="<?php echo $hasil['nama'] ?>">
                                        <label for="floatingInput">Nama</label>
                                        <div class="invalid-feedback">
                                            Nama
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $hasil['username'] ?>">
                                        <label for="floatingInput">Username</label>
                                        <div class="invalid-feedback">
                                            username
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                        <select disabled name="level" class="form-select" aria-label="default select example" id="" required>
                                            <?php
                                            $data = array("owner/admin", "kasir", "pelayan", "dapur");
                                            foreach ($data as $key => $value) {
                                                if ($row['level'] == $key + 1) {
                                                    echo "<option selected value='$key'>$value</option>";
                                                } else {
                                                    echo "<option value='$key'>$value</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <label for="floatingInput">Level User</label>
                                        <div class="invalid-feedback">
                                            Pilih Level User
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxx" name="nohp" value="<?php echo $hasil['nohp'] ?>">
                                        <label for="floatingInput">No Hp</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating">
                                <textarea disabled class="form-control" id="" style="height: 100px;" name="alamat"><?php echo $hasil['alamat'] ?></textarea>
                                <label for="floatingInput">Alamat</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Profile-->