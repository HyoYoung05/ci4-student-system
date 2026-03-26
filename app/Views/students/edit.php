<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Edit Student</h1>

<form action="/students/update/<?= $student['id'] ?>" method="post">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $student['name'] ?>"><br>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?= $student['email'] ?>"><br>
    
    <label>Course:</label>
    <input type="text" name="course" value="<?= $student['course'] ?>"><br>
    
    <button type="submit">Update</button>
</form>