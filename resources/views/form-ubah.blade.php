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
                    <div class="navbar-brand">Ubah Data</div>
                </div>
            </nav>

            <form action="/ubah" method="POST">
                @csrf
            <div class="mt-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="{{ $mhs->nim }}" readonly>
            </div>
            <div class="mt-3">
                <label for="nama" class="form-label">NAMA</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA" value="{{ $mhs->nama }}">
            </div>
            <div class="mt-3">
                <label for="kelas" class="form-label">KELAS</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="KELAS" value="{{ $mhs->kelas }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
</div>
</body>
</html>