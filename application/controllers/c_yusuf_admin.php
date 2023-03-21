<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yusuf_admin extends CI_Controller 
{ 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {  
        $data['title'] = 'Tracer Study Admin Page';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['alumni']=$this->db->get('alumni')->result_array();
        $data['sidebar']=$this->db->get('angkatan')->result_array();
        $data['kompetensi'] = $this->db->get('kompetensi')->result_array();
        $data['user_access'] = $this->db->get('user')->result_array();
        $data['angkatan'] = $this->db->get('angkatan')->result_array();

        $this->load->view('templates/v_yusuf_header', $data);
        $this->load->view('templates/v_yusuf_sidebar', $data);
        $this->load->view('templates/v_yusuf_topbar', $data);
        $this->load->view('admin/v_yusuf_index', $data);
        $this->load->view('templates/v_yusuf_footer',$data);
    }

    public function alumni($tahun)
    {
        $data['title'] = 'Data Alumni Page';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['alumni'] = $this->db->get_where('alumni',['tahun_lulus'=>$tahun])->result_array();
        $data['angkatan'] = $this->db->get_where('angkatan',['angkatan_tahun'=> $tahun])->result_array();
        $data['tahun'] = $tahun;
        $data['sidebar']=$this->db->get('angkatan')->result_array();
        $data['kompetensi']=$this->db->get('kompetensi')->result_array();

        $this->load->view('templates/v_yusuf_header', $data);
        $this->load->view('templates/v_yusuf_sidebar', $data);
        $this->load->view('templates/v_yusuf_topbar', $data);
        $this->load->view('alumni/v_yusuf_alumni', $data);
        $this->load->view('templates/v_yusuf_footer',$data);
    }

    public function detailalumni($id)
    {
        $data['title'] = 'Detail Alumni Page';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['alumni'] = $this->db->get_where('alumni',['id'=>$id])->row_array();
        $data['tracer']=$this->db->get('tracer')->result_array();
        $data['sidebar']=$this->db->get('angkatan')->result_array();
        $data['kompetensi']=$this->db->get('kompetensi')->result_array();

        $this->load->view('templates/v_yusuf_header', $data);
        $this->load->view('templates/v_yusuf_sidebar', $data);
        $this->load->view('templates/v_yusuf_topbar', $data);
        $this->load->view('alumni/v_yusuf_detail_alumni', $data);
        $this->load->view('templates/v_yusuf_footer',$data);
    }

    public function tambah_detail($tahun)
    {
        $tambah_detail = array(
            'tracer_status'=>$this->input->post('tracer_status'),
            'tracer_instansi'=>$this->input->post('tracer_instansi'),
            'tracer_departemen'=>$this->input->post('tracer_departemen'),
            'tracer_posisi'=>$this->input->post('tracer_posisi'),
            'tracer_salari'=>$this->input->post('tracer_salari'),
            'tracer_linear'=>$this->input->post('tracer_linear'),
        );
        $this->db->insert('tracer',$tambah_detail);
        redirect('c_yusuf_admin/alumni/'. $tahun);
    }

    public function tambah_alumni($tahun)
    {
        $tambah_alumni = array(
            'tahun_lulus'=>$this->input->post('tahun_lulus'),
            'nis'=>$this->input->post('nis'),
            'nama'=>$this->input->post('nama'),
            'nik'=>$this->input->post('nik'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'tempat_lahir'=>$this->input->post('tempat_lahir'),
            'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
            'email'=>$this->input->post('email'),
            'telepon'=>$this->input->post('telepon'),
            'agama'=>$this->input->post('agama'),
            'kompetensi'=>$this->input->post('kompetensi'),
            'alamat'=>$this->input->post('alamat'),
        );
        $this->db->insert('alumni', $tambah_alumni);
        redirect('c_yusuf_admin/alumni/' .$tahun);
    }

    public function edit_alumni($id,$tahun)
    {
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $nik = $this->input->post('nik');
        $nis = $this->input->post('nis');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');
        $kompetensi = $this->input->post('kompetensi');
        $agama = $this->input->post('agama');

        $update = array(
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tahun_lulus' => $tahun_lulus,
            'tanggal_lahir' => $tanggal_lahir,
            'nik' => $nik,
            'nis' => $nis,
            'email' => $email,
            'telepon' => $telepon,
            'alamat' => $alamat,
            'kompetensi' => $kompetensi,
            'agama' => $agama,
        );
        $this->db->where('id', $id);
        $this->db->update('alumni', $update);
        redirect('c_yusuf_admin/alumni/' . $tahun);
    }

    public function delete_DataAlumni($id,$tahun)
    {
        $this->db->where('id',$id);
        $this->db->delete('alumni');
        redirect('c_yusuf_admin/alumni/'.$tahun);
    }
    
    // akhir data alumni

    // masterdata
    public function masterdata()
    {  
        $data['title'] = 'Tracer Study Masterdata Page';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kompetensi'] = $this->db->get('kompetensi')->result_array();
        $data['sidebar']=$this->db->get('angkatan')->result_array();
        $data['user_access'] = $this->db->get('user')->result_array();
        $data['angkatan'] = $this->db->get('angkatan')->result_array();

        $this->load->view('templates/v_yusuf_header', $data);
        $this->load->view('templates/v_yusuf_sidebar', $data);
        $this->load->view('templates/v_yusuf_topbar', $data);
        $this->load->view('masterdata/v_yusuf_masterdata', $data);
        $this->load->view('templates/v_yusuf_footer',$data);
    }

    public function tambahkompetensi()
    {
        $alias = $this->input->post('alias');
        $kompetensi = $this->input->post('kompetensi');

        $data = array(
            'alias' =>  $alias,
            'kompetensi' =>  $kompetensi,
        );
        $this->db->insert('kompetensi', $data);
        redirect('c_yusuf_admin/masterdata');
    }

    public function editkompetensi()
    {
        $edit_id = $this->input->post('edit_id');
        $edit_alias = $this->input->post('edit_alias');
        $edit_kp = $this->input->post('edit_kp');

        $data = array(
            'alias' =>  $edit_alias,
            'kompetensi' =>  $edit_kp,
        );
        $this->db->where('id', $edit_id);
        $this->db->update('kompetensi', $data);
        redirect('c_yusuf_admin/masterdata');
    }

    public function deletekompetensi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kompetensi');
        redirect('c_yusuf_admin/masterdata');
    }
    // kompetensi

    public function angkatan_delete($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['angkatan_tahun'] = $this->db->get('angkatan')->result_array();

        $this->db->where('angkatan_id', $id);
        $this->db->delete('angkatan');
        redirect('c_yusuf_admin/masterdata');
    }

    public function tambah_angkatan()
    {
        $angkatan_tahun = $this->input->post('angkatan_tahun');

        $data = array(
            'angkatan_tahun' => $angkatan_tahun,
        );
        $this->db->insert('angkatan', $data);
        redirect('c_yusuf_admin/masterdata');
    }

    public function edit_angkatan($id)
    {
        $edit_id = $this->input->post('edit_id');
        $edit_angkatan = $this->input->post('edit_angkatan');

        $update = array(
            'angkatan_tahun' =>  $edit_angkatan,
        );
        $this->db->where('angkatan_id', $edit_id);
        $this->db->update('angkatan', $update);
        redirect('c_yusuf_admin/masterdata');
    }

    // user access
    public function useracces()
    {
        $data['title'] = 'User Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_access'] = $this->db->get('user')->result_array();
    }

    public function useracces_delete($id)
    {
        $data['title'] = 'User Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_access'] = $this->db->get('user')->result_array();

        $this->db->where('id', $id);
        $this->db->delete('user');
        redirect('c_yusuf_admin/masterdata');
    }

    public function useraccess_update()
    {
        $edit_id = $this->input->post('edit_id');
        $edit_name = $this->input->post('edit_name');
        $edit_role = $this->input->post('edit_role');

        $update = array(
            'name' =>  $edit_name,
            'role_id' =>  $edit_role,
        );
        $this->db->where('id', $edit_id);
        $this->db->update('user', $update);
        redirect('c_yusuf_admin/masterdata');
    }
    // akhir masterdata

    // informasi
    public function informasi()
    {  
        $data['title'] = 'Tracer Study Informasi Page';
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/v_daffa_header', $data);
        $this->load->view('templates/v_daffa_sidebar', $data);
        $this->load->view('templates/v_daffa_topbar', $data);
        $this->load->view('pengaturan/v_daffa_informasi', $data);
        $this->load->view('templates/v_daffa_footer',$data);
    }
}