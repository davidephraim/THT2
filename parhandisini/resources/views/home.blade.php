<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Census Center</title>
</head>
<body>
    <form action="{{ route('dashboard-admin') }}" method="post">
        @csrf
        <table>
            <tr>
                <th>NIK</th>
                <th>Name</th>
                <th>Province</th>
                <th>City</th>
                <th>Phone Number</th>
            </tr>
            <tr>
                <td><input type="number" name="nik"></td>
                <td><input type="text" name="name"></td>
                <td><input type="text" name="province"></td>
                <td><input type="text" name="city"></td>
                <td><input type="number" name="phonenumber"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>