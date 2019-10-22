<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Edit Mahasiswa Data Form
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $mahasiswa['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="matric">Matric</label>
                            <input type="text" name="matric" class="form-control" id="matric" value="<?= $mahasiswa['matric']; ?>">
                            <small class="form-text text-danger"><?= form_error('matric'); ?></small>
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control" id="course" name="course">
                                <?php foreach( $course as $c) : ?>
                                    <?php if( $c == $mahasiswa['course'] ) : ?>
                                    <option value="<?= $c; ?>" selected><?= $c; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $c; ?>"><?= $c; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-dark float-right">Edit Data</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>