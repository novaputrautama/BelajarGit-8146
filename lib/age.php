<?php


require_once('m_siswa.php');


class Age{
	
	private $tgl_lahir;
	private $umur;
	
	public function Age($umur){
		$this->umur = $umur;
	}
	
	
	public function convertUmur(){
		
		$tahun = $this->umur/360;
		$sisa_tahun = $this->umur%360;
		$bulan = $sisa_tahun/30;
		$sisa_bulan = $sisa_tahun%30;
		
		echo $tahun." tahun" . $bulan . " bulan" . $sisa_bulan . "hari";
		
		
	}
	
		
}

?>