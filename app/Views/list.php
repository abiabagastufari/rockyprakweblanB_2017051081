<?= $this->extend('template')?>
<?= $this->section('content')?>
<a href="/create" type="button" class="btn btn-warning mb-3">Tambah data</a>
<table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Created_At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
    foreach($mahasiswa as $mhs): ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $mhs['npm'] ?> </td>
      <td><?= $mhs['nama'] ?> </td>
      <td><?= $mhs['alamat'] ?> </td>
      <td><?= $mhs['deskripsi'] ?> </td>
      <td><?= $mhs['created_at'] ?> </td>
      <td>
      <div class="d-flex">
          <a class="btn btn-warning mr-3" href="/edit/<?=$mhs['id'] ?>">Edit</a>
          <form action="/delete/<?= $mhs['id'] ?>" method="post">
            <input hidden name="_method" value="DELETE" type="hidden">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    <?php $no++; 
    endforeach ?>
  </tbody>
</table>
<?= $this->endSection()?>
