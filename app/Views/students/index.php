<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h2>Student List</h2>
    
    <form action="/students" method="get" class="mb-3 d-flex">
        <input type="text" name="keyword" class="form-control me-2" placeholder="Search students...">
        <button type="submit" class="btn btn-secondary">Search</button>
        <a href="/students" class="btn btn-outline-secondary ms-2">Reset</a>
    </form>

    <a href="/students/create" class="btn btn-primary mb-3">Add New Student</a>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['course'] ?></td>
                <td>
                    <a href="/students/edit/<?= $student['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/students/delete/<?= $student['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div class="d-flex justify-content-center">
        <?= $pager->links() ?>
    </div>
</div>