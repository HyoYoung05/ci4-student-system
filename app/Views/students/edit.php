<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h1 class="mb-4">Edit Student</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/students/update/<?= $student['id'] ?>" method="post">
                <div class="mb-3">
                    <label class="form-label fw-bold">Name:</label>
                    <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Email:</label>
                    <input type="email" name="email" value="<?= $student['email'] ?>" class="form-control" required>
                </div>
                
                <div class="mb-4">
                    <label class="form-label fw-bold">Course:</label>
                    <input type="text" name="course" value="<?= $student['course'] ?>" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-success">Update Student</button>
                <a href="/students" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>