<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Detail Mahasiswa Data
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['name']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['matric']; ?></h6>
                <p class="card-text"><?= $mahasiswa['email']; ?></p>
                <p class="card-text"><?= $mahasiswa['course']; ?></p>
                <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Back</a>
            </div>
        </div>
        
        </div>
    </div>
</div>