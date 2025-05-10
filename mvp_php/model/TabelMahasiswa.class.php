<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

// Kelas yang berisikan tabel dari mahasiswa
class TabelMahasiswa extends DB
{
	function getMahasiswa()
	{
		// Query mysql select data mahasiswa
		$query = "SELECT * FROM mahasiswa";
		
		// Mengeksekusi query
		return $this->execute($query);
	}

	function addMahasiswa($data){
        //query
        $query = "INSERT INTO mahasiswa (nim, nama, tempat, tl, gender, email, telp)
        VALUES ( '{$data['nim']}', '{$data['nama']}', '{$data['tempat']}', '{$data['tl']}', '{$data['gender']}', '{$data['email']}', '{$data['telp']}')";

        //eksekusi query
        return $this->execute($query);
    }

	function deleteMahasiswa($id){
        //query
        $query = "DELETE from mahasiswa where id = '$id'";

        //eksekusi query
        return $this->execute($query);
    }

	function editMahasiswa($id, $data){
    
        //query
        $query = "UPDATE mahasiswa SET nim = '{$data['nim']}', nama = '{$data['nama']}', tempat = '{$data['tempat']}', tl = '{$data['tl']}', gender = '{$data['gender']}', email = '{$data['email']}', telp = '{$data['telp']}' WHERE id = '$id'";
    
        //eksekusi query
        return $this->execute($query);
    }
    
    function getMahasiswaById($id){
        //query untuk mengambil data berdasarkan ID
        $query = "SELECT * FROM mahasiswa WHERE id = '$id'";
        
        // eksekusi query
        return $this->execute($query);
    }
}
