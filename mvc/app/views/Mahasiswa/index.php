<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?= flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah Data Mahasiswa
            </button>
            <br><br>
                <h3>Daftar Mahasiswa</h3>
               
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a></li>
                    <?php endforeach; ?>
                
            

        </div>
    </div>


</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" >
        </div>

        <div class="form-group">
            <label for="nim">nim</label>
            <input type="number" class="form-control" id="nim" name="nim" >
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" >
        </div>

        <div class="form-group">
            <label for="jurusan">Example select</label>
            <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="hukum">hukum</option>
                <option value="Pariwisata">Pariwisata</option>
                <option value="Perhotelan">Perhotelan</option>
            
            </select>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>