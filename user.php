<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="bi bi-plus-lg"></i> Tambah User
    </button>
    <div class="row">
        <div class="table-responsive" id="user_data">
            
        </div>
        <!-- Awal Modal Tambah-->
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput3" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Tambah-->
    </div>
</div>

<script>
$(document).ready(function(){
    load_data();
    function load_data(hlm){
        $.ajax({
            url : "user_data.php",
            method : "POST",
            data : {
                hlm: hlm
            },
            success : function(data){
                $('#user_data').html(data);
            }
        })
    }
    
    $(document).on('click', '.halaman', function(){
        var hlm = $(this).attr("id");
        load_data(hlm);
    });
});
</script>

<?php
include "upload_foto.php";

//jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi password dengan MD5
    $foto = '';
    $nama_foto = $_FILES['foto']['name'];

    //jika ada file yang dikirim  
    if ($nama_foto != '') {
        //panggil function upload_foto untuk cek spesifikasi file yg dikirimkan user
        $cek_upload = upload_foto($_FILES["foto"]);

        //cek status true/false
        if ($cek_upload['status']) {
            //jika true maka message berisi nama file foto
            $foto = $cek_upload['message'];
        } else {
            //jika false maka message berisi pesan error, tampilkan dalam alert
            echo "<script>
                alert('" . $cek_upload['message'] . "');
                document.location='admin.php?page=user';
            </script>";
            die;
        }
    }

    //cek apakah ada id yang dikirimkan dari form
    if (isset($_POST['id'])) {
        //jika ada id, lakukan update data dengan id tersebut
        $id = $_POST['id'];

        // Cek apakah password diubah
        if ($_POST['password'] != '') {
            $password = md5($_POST['password']);
        } else {
            $password = $_POST['password_lama'];
        }

        if ($nama_foto == '') {
            //jika tidak ganti foto
            $foto = $_POST['foto_lama'];
        } else {
            //jika ganti foto, hapus foto lama (jika ada)
            if ($_POST['foto_lama'] != '') {
                unlink("img/" . $_POST['foto_lama']);
            }
        }

        $stmt = $conn->prepare("UPDATE user 
                                SET 
                                username = ?,
                                password = ?,
                                foto = ?
                                WHERE id = ?");

        $stmt->bind_param("sssi", $username, $password, $foto, $id);
        $simpan = $stmt->execute();
    } else {
        //jika tidak ada id, lakukan insert data baru
        //cek apakah username sudah ada
        $cek_username = $conn->prepare("SELECT username FROM user WHERE username = ?");
        $cek_username->bind_param("s", $username);
        $cek_username->execute();
        $hasil_cek = $cek_username->get_result();

        if ($hasil_cek->num_rows > 0) {
            echo "<script>
                alert('Username sudah digunakan, gunakan username lain!');
                document.location='admin.php?page=user';
            </script>";
            die;
        }

        $stmt = $conn->prepare("INSERT INTO user (username, password, foto)
                                VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $username, $password, $foto);
        $simpan = $stmt->execute();
    }

    if ($simpan) {
        echo "<script>
            alert('Simpan data sukses');
            document.location='admin.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Simpan data gagal');
            document.location='admin.php?page=user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}

//jika tombol hapus diklik
if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $foto = $_POST['foto'];

    if ($foto != '') {
        //hapus file foto
        unlink("img/" . $foto);
    }

    $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");

    $stmt->bind_param("i", $id);
    $hapus = $stmt->execute();

    if ($hapus) {
        echo "<script>
            alert('Hapus data sukses');
            document.location='admin.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Hapus data gagal');
            document.location='admin.php?page=user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>