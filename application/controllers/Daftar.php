<?php
class Daftar extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-Daftar');
        }
    public function cetak()
    {

        $this->form_validation->set_rules('NIM', 'NIM Daftar', 
    'required|min_length[3]', [
        'required' => 'NIM Harus diisi angka',
        'min_lenght' => 'NIM terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-Daftar');
        } else {
            $data = [
                'NIM' => $this->input->post('NIM'),
                'Nama' => $this->input->post('Nama'),
                'Tanggallahir' => $this->input->post('Tanggallahir'),
                'Tempatlahir'  => $this->input->post('Tempatlahir'),
                'Alamat' => $this->input->post('Alamat')
            ];
            
            $this->load->view('view-data-Daftar', $data);
        }
    }
}