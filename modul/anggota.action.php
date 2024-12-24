<?php

    if(isset($_POST["simpan"])){
        $q=$db->prepare("insert into anggota set id_anggota=?, nama=?, tmp_lahir=?, tgl_lahir=?, alamat=?");
        $qok=$q->execute([$_POST["id_anggota"],$_POST["nama"],$_POST["tmp_lahir"],$_POST["tgl_lahir"],$_POST["alamat"]]);

        if($qok){
            $_SESSION["notif"]="Data Berhasil disimpan.";
            redirectto("?p=anggota");
            die();
        }else{
            $_SESSION["notif"]="Data gagal disimpan.";
            redirectto("?p=anggota");
            die();
        }
    }

    if(isset($_POST["ubah"])){
        try {
            $q=$db->prepare("update anggota set id_anggota=?, nama=?, tmp_lahir=?, tgl_lahir=?, alamat=? where id_anggota=?");
            $q->execute([$_POST["id_anggota"], $_POST["nama"], $_POST["tmp_lahir"], $_POST["tgl_lahir"], $_POST["alamat"], $_POST["id_anggota"]]);
        
            $_SESSION["notif"]="Data Berhasil diperbaharui.";
            redirectto("?p=anggota");
            die();
        
        } catch(Exception $e) {
            echo "Error : ".$e->getMessage();
        }
    }
    
    
    
    if(isset($_GET["action"]) && $_GET["action"] == "hapus"){
        try {
            $q=$db->prepare("delete from anggota where id_anggota=?");
            $q->execute([$_GET["id"]]);
            $_SESSION["notif"]="Data Berhasil dihapus.";
            redirectto("?p=anggota");
            die();
        } catch(Exception $e) {
            $_SESSION["notif"]="Data Gagal dihapus. Error: ".$e->getMessage();
            redirectto("?p=anggota");
            die();
        }
    }
    

?>