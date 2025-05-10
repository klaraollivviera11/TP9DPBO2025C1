<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("KontrakView.php");
include("presenter/ProsesMahasiswa.php");

class TampilMahasiswa implements KontrakView
{
	private $prosesmahasiswa; // Presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosesmahasiswa = new ProsesMahasiswa();
	}

	function tampil()
	{
		$this->prosesmahasiswa->prosesDataMahasiswa();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosesmahasiswa->getNim($i) . "</td>
			<td>" . $this->prosesmahasiswa->getNama($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTempat($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTl($i) . "</td>
			<td>" . $this->prosesmahasiswa->getGender($i) . "</td>
			<td>" . $this->prosesmahasiswa->getEmail($i) . "</td> 
			<td>" . $this->prosesmahasiswa->getTelp($i) . "</td>
			<td>
				<a href='index.php?id_edit=" . $this->prosesmahasiswa->getId($i) . "' class='btn btn-warning'>Edit</a>
				<a href='index.php?id_hapus=" . $this->prosesmahasiswa->getId($i) . "' class='btn btn-danger'>Hapus</a>
			</td> </tr>";
		}

		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		$nama_aksi = "Tambah Mahasiswa";
		$button_aksi = "Add";
		$submit_aksi = "Tambah Mahasiswa";

		// jika ada id edit
		if(isset($_GET['id_edit'])){
			// ambil data mahasiswa yang akan diedit
			$this->prosesmahasiswa->editTampilMahasiswa($_GET['id_edit']);

			// mengambil indeks terakhir karen data mahasiswanya terdapat di indeks terakhir
			$lastIndex = $this->prosesmahasiswa->getSize() - 1;

			// Mengganti value form dengan data yang sudah diproses
			$this->tpl->replace("DATA_ID", $this->prosesmahasiswa->getId($lastIndex));
			$this->tpl->replace("DATA_NIM", $this->prosesmahasiswa->getNim($lastIndex));
			$this->tpl->replace("DATA_NAMA", $this->prosesmahasiswa->getNama($lastIndex));
			$this->tpl->replace("DATA_TEMPAT", $this->prosesmahasiswa->getTempat($lastIndex));
			$this->tpl->replace("DATA_TL", $this->prosesmahasiswa->getTl($lastIndex));
					
			$this->tpl->replace("DATA_GENDER_LAKI", $this->prosesmahasiswa->getGender($lastIndex) == "Laki-laki" ? "selected" : "");
			$this->tpl->replace("DATA_GENDER_PEREMPUAN", $this->prosesmahasiswa->getGender($lastIndex) == "Perempuan" ? "selected" : "");
				
			$this->tpl->replace("DATA_EMAIL", $this->prosesmahasiswa->getEmail($lastIndex));
			$this->tpl->replace("DATA_TELP", $this->prosesmahasiswa->getTelp($lastIndex));
			
			$nama_aksi = "Edit Mahasiswa";
			$button_aksi = "Edit";
			$submit_aksi = "Edit Mahasiswa";
		}

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);
		$this->tpl->replace("NAMA_AKSI", $nama_aksi);
		$this->tpl->replace("BUTTON_AKSI", $button_aksi);
		$this->tpl->replace("SUBMIT_AKSI", $submit_aksi);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	// add data
	function addData(){
		$this->prosesmahasiswa->addMahasiswa($_POST);
	}

	// delete data
	function deleteData(){
		$this->prosesmahasiswa->deleteMahasiswa($_GET['id_hapus']);
	}

	// edit data
	function editData(){
		$this->prosesmahasiswa->editMahasiswa($_POST['id'], $_POST);
	}
}
