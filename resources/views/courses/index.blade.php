<!-- resources/views/courses/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Course List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Credit Hours</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->credit_hrs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    </div>
</body>
</html>
