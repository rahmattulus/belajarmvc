<h2>Daftar Anggota</h2>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
                $no = 1;
                foreach ($data['anggota'] as $agt) {
                ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $agt['id']?></td>
                    <td><?= $agt['nama']?></td>
                    <td><?= $agt['kelas']?></td>
                    <td><?= $agt['jurusan']?></td>
                </tr>
            <?php
                }
            ?>
        
    </tbody>
</table>