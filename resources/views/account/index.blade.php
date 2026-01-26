<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('create.account') }}">Tambah data</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Institusi</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>
        @forelse ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->institution->institution_name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->role->role_name }}</td>
                <td>
                    <a href="#">View</a>
                    <a href="#">Edit</a>
                    <a href="#">Delet</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Data tidak ditemukan</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
