<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <?php if(isset($validation)):?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Data Salah!</strong>
                                    <?= $validation->listErrors(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="fullname"
                                               placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="phone"
                                               placeholder="No. Telp Tanpa 0 / +62">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                           placeholder="Alamat E-Mail">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                               id="Password" placeholder="Kata Sandi">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                               id="repeatPassword" placeholder="Ulangi Kata Sandi Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?=base_url()?>/forgot-password/">Lupa Kata Sandi</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?=base_url()?>">Sudah Punya Akun, Silahkan Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?= $this->endSection() ?>