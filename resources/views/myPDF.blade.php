<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid rgb(40, 40, 40);
        }

        table>tr {
            border: 1px solid rgb(40, 40, 40);
        }

        th {
            border: 1px solid rgb(40, 40, 40);
            padding: 0.5rem;
        }

        td {
            border: 1px solid rgb(40, 40, 40);
            padding: 0.5rem;
        }

        img {
            display: block;
            width: 200px;
            height: 200px;
            border-radius: 100px;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <img src="{{ $user->profile_photo_path ? ("storage/" . $user->profile_photo_path) : ("https://ui-avatars.com/api/?name=" . $user->name . "&color=7F9CF5&background=EBF4FF&size=200") }}" alt="{{ $user->name }}">

    <table>
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>About</th>
            <td>{{ $user->about }}</td>
        </tr>
        <tr>
            <th>Skills</th>
            <td>{{ $user->skills }}</td>
        </tr>
        <tr>
            <th>Experience</th>
            <td>{{ $user->experience }}</td>
        </tr>
    </table>
</body>
</html>
