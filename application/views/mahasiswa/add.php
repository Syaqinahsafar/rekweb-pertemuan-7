<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Add Mahasiswa Data Form
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="matric">Matric</label>
                            <input type="text" name="matric" class="form-control" id="matric">
                            <small class="form-text text-danger"><?= form_error('matric'); ?></small>
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control" id="course" name="course">
                            <option value="Artificial Intelligence">Artificial Intelligence</   option>
                            <option value="Information Management">Information Management</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Networking">Networking</option> 
                            </select>
                        </div>
                        <button type="submit" name="add" class="btn btn-dark float-right">Add Data</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>