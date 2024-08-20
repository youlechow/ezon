<!DOCTYPE html>
<html>
<head>
    <title>Namelist</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Chinese Name</th>
                <th>English Name</th>
                <th>Contact No</th>
            </tr>
        </thead>
        <tbody>
            @foreach($namelists as $namelist)
                <tr>
                    <td>{{ $namelist->chineseName }}</td>
                    <td>{{ $namelist->englishName }}</td>
                    <td>{{ $namelist->contactNo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
