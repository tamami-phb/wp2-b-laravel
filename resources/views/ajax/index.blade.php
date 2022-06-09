<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded-bottom rounded-3 mt-3">
                <div class="container-fluid">
                    <div class="navbar-brand">Tambah Data</div>
                </div>
            </nav>

            <div class="mt-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
            </div>
            <div class="mt-3">
                <label for="nama" class="form-label">NAMA</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA">
            </div>
            <div class="mt-3">
                <label for="kelas" class="form-label">KELAS</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="KELAS">
            </div>
            <button class="btn btn-primary mt-3" id="btnSimpan">Simpan</button>
            
</div>
<div class="container">
<table class="table table-striped mt-3">
    <thead>
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>OPSI</th>
    </tr>
</thead>
<tbody id="isi"></tbody>
</table>
</div>

<script>
$(document).ready(function() {
       refresh(); 
});

$(document).on('click', '#btnSimpan', function() {
    mhs = new Object();
    mhs.nim = $("#nim").val();
    mhs.nama = $("#nama").val();
    mhs.kelas = $("#kelas").val();
    $.post("/ajax/simpan", mhs, function(resp) {
        console.info(resp);
        refresh();
    });
});

$(document).on('click', "#hapus", function() {
    nim = $(this).attr('nim');
    $.get('/ajax/hapus/' + nim, function(resp) {
        refresh();
    });
});

function refresh() {
    $("#nim").val("");
    $("#nama").val("");
    $("#kelas").val("");
    $.get("/ajax/get-all-data", function(resp) {
            isi = "";
            for(i=0; i<resp.length; i++) {
                isi += "<tr>" + 
                    "<td>" + resp[i].nim + "</td>" + 
                    "<td>" + resp[i].nama + "</td>" + 
                    "<td>" + resp[i].kelas + "</td>" + 
                    '<td><button id="hapus" nim="' + resp[i].nim + '" class="btn btn-danger">Hapus</button>'+
                    '<button id="edit" nim="' + resp[i].nim + '" class="btn btn-warning">Ubah</button></td>';
                "</tr>";
            }
            $("#isi").html(isi);
    });
}
</script>
</body>
</html>