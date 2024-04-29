<?=$this->extend("layout")?>
  
<?=$this->section("content")?>
  
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Masuk</h5>
                    <?php if(session()->getFlashdata('error')):?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif;?>
                    <form action="<?php echo base_url('/login'); ?>" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            <p class="text-center">Belum punya akun? <a href="<?php echo base_url('/'); ?>">Daftar di sini</a><p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
</div>
  
<?=$this->endSection()?>    