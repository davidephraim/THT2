<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
</head>
<body>
    <table>
        <tr>
            <th>NIK</th>
            <th>Name</th>
            <th>Province</th>
            <th>City</th>
            <th>Phone Number</th>
        </tr>
        <tr>
            <td>{{$datas['nik']}}</td>
            <td>{{$datas['name']}}</td>
            <td>{{$datas['province']}}</td>
            <td>{{$datas['city']}}</td>
            <td>{{$datas['phonenumber']}}</td>
        </tr>
    </table>
</body>
</html>