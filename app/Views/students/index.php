<h1>Student List</h1>
<a href="/students/create">Add New Student</a>
    <form action="/students" method="get">
    <input type="text" name="keyword" placeholder="Search students...">
    <button type="submit">Search</button>
    <a href="/students">Reset</a>
</form>
<br>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
    </tr>
    <?php foreach($students as $student): ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td><?= $student['course'] ?></td>
        <td>
            <a href="/students/delete/<?= $student['id'] ?>">Delete</a>
        </td>
    </tr>
    <td>
        <a href="/students/edit/<?= $student['id'] ?>">Edit</a> | 
        <a href="/students/delete/<?= $student['id'] ?>">Delete</a>
    </td>

    <?php endforeach; ?>
</table>