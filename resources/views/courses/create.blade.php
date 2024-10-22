<!-- resources/views/courses/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Add New Course</h1>
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label for="credit_hrs">Credit Hours</label>
                <input type="number" class="form-control" name="credit_hrs" required>
            </div>
            <button type="submit" class="btn btn-success">Add Course</button>
        </form>
    </div>
</body>
</html>
