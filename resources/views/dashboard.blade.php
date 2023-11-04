<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS via a CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="card">
    <h2>Welcome To Dashboard</h2>

    <table class="table table-bordered">
        <tr>
            <th>Name:</th>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ auth()->user()->email }}</td>
        </tr>
        <tr>
            <th>Action</th>
            <td colspan="2">
                <a href="logout">Logout</a>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
