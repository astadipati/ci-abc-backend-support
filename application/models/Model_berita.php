<?php

Class Model_berita extends CI_Model{

    public $table = "berita";

    function tampilkan_berita(){
        $query = $this->db->query("SELECT id, substring(foto, -10) as foto, judul_berita, 
        date_format(tanggal_posting, '%d/%m/%Y') as tanggal_posting, SUBSTRING(isi_berita, 1, 200) as isi_berita, penulis FROM berita ORDER BY id DESC");
        return $query; 
    }

    function tampil_berita_paging(){
        $query = $this->db->query("SELECT id_surat, DATE_FORMAT(agenda, '%d %M %Y ')AS agenda, no_surat, asal_surat, isi, kode, indeks, 
        DATE_FORMAT(tgl_surat,'%d %M %Y ')AS tgl_surat, DATE_FORMAT(tgl_diterima,'%d %M %Y ')AS tgl_diterima,
        file,keterangan 
        FROM tabel_surat_masuk ORDER BY id_surat DESC");
        return $query; 
    }

    
    function save(){
        $data = array(
            'foto'=>$this->input->post('foto', TRUE),
            'judul_berita'=>$this->input->post('judul_berita', TRUE),
            'tanggal_posting'=>$this->input->post('tanggal_posting', TRUE),
            'isi_berita'=>$this->input->post('isi_berita', TRUE),
            'penulis'=>$this->input->post('penulis', TRUE)
        );
        // print_r($data);
        $this->db->insert($this->table, $data);

    }

    function update(){
            $data = array(
                'foto'=>$this->input->post('foto', TRUE),
                'judul_berita'=>$this->input->post('judul_berita', TRUE),
                'tanggal_posting'=>$this->input->post('tanggal_posting', TRUE),
                'isi_berita'=>$this->input->post('isi_berita', TRUE),
                'penulis'=>$this->input->post('penulis', TRUE)
            );

        $id = $this->input->post('id');
        $this->db->where('id', $id);
        // print_r($data);
        $this->db->update($this->table, $data);

    }
}