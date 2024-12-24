<?php

    if(isset($_POST["simpan"])){
        $q=$db->prepare("insert into buku set judul=?, kategori=?, pengarang=?, penerbit=?, tgl_terbit=?, jmlh_halaman=?");
        $qok=$q->execute([$_POST["judul"], $_POST["kategori"], $_POST["pengarang"], $_POST["penerbit"], $_POST["tgl_terbit"], $_POST['jmlh_halaman']]);

        if($qok){
            $_SESSION["notif"]="Data Berhasil disimpan.";
            redirectto("?p=buku");
            die();
        }else{
            $_SESSION["notif"]="Data gagal disimpan.";
            redirectto("?p=buku");
            die();
        }
    }

    if(isset($_POST["ubah"])){
        try {
            $q=$db->prepare("update buku set judul=?, kategori=?, pengarang=?, penerbit=?, tgl_terbit=?, jmlh_halaman=? where id_buku=?");
            $q->execute([$_POST["judul"], $_POST["kategori"], $_POST["pengarang"], $_POST["penerbit"], $_POST["tgl_terbit"], $_POST["jmlh_halaman"], $_POST["id_buku"]]);
        
            $_SESSION["notif"]="Data Berhasil diperbaharui.";
            redirectto("?p=buku");
            die();
        
        } catch(Exception $e) {
            echo "Error : ".$e->getMessage(); 
        }
    }
    
    if(isset($_GET["action"]) && $_GET["action"] == "hapus"){
        try {
            $q=$db->prepare("delete from buku where id_buku=?");
            $q->execute([$_GET["id"]]);
            $_SESSION["notif"]="Data Berhasil dihapus.";
            redirectto("?p=buku");
            die();
        } catch(Exception $e) {
            $_SESSION["notif"]="Data Gagal dihapus. Error: ".$e->getMessage();
            redirectto("?p=buku");
            die();
        }
    }

?>