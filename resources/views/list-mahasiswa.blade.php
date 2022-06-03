<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded-bottom rounded-3">
                <div class="container-fluid">
                    <div class="navbar-brand">Daftar Mahasiswa</div>
                </div>
            </nav>

<a href="/form-tambah" class="btn btn-primary mt-3">Tambah</a>

<table class="table table-striped mt-3">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>OPSI</th>
    </tr>
@forelse($data as $row)
    <tr>
        <td>{{ $row->nim }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->kelas }}</td>
        <td>
            <a class="btn btn-danger" href="/hapus/{{ $row->nim }}">Hapus</a>
            <a class="btn btn-warning" href="/form-ubah/{{ $row->nim }}">Ubah</a>
        </td>

    </tr>
@empty
    <tr>
        <td colspan="3">Data Kosong</td>
    </tr>
@endforelse
</table>
        </div>
</body>
</html>