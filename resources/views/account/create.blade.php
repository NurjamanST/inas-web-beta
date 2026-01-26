<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store.account') }}" method="post">
        @csrf
        <label for="">Intitusi</label>
        <select name="institution" id="">
            <option selected disabled>Pilih Institusi</option>
            @foreach ($intitution as $institusi)
                <option value="{{ $institusi->institution_id }}">{{ $institusi->institution_name }}</option>
            @endforeach
        </select><br>
        <label for="">Email</label>
        <input type="text" name='email'><br>

        <label for="">Role</label>
        <select name="role" id="">
            <option selected disabled>Pilih Role</option>
            @foreach ($role as $roles)
                <option value="{{ $roles->role_id }}">{{ $roles->role_name }}</option>
            @endforeach
        </select><br>
        <button>Tambah</button>
    </form>
</body>
</html>
