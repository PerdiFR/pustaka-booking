<?php
class sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-sepatu');
        }
    public function cetak()
    {

        $this->form_validation->set_rules('nama', 'Nama Pembeli', 
    'required|min_length[3]', [
        'required' => 'Nama Harus diisi',
        'min_lenght' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-sepatu');

        } else {
            $this->load->model('modelsepatu');
            $harga = $this->modelsepatu->harga();
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'harga' => $harga,
                'size'  => $this->input->post('size')
            ];

            $this->load->view('view-data-sepatu', $data);
        }
    }
}
