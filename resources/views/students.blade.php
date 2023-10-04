<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Students List</h1>
    <table  border="1">
        <tr>
            <td>Name</td>
            <td>Roll</td>
            <td>Phon Number</td>
            <td>Action</td>
        </tr>
        @foreach ($allStudents as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->roll }}</td>
                <td>{{ $item->phon_number }}</td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>