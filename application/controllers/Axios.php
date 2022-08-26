<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Axios extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/login');
    }
    public function wilayah_kabupaten($id)
    {
        $getKabupaten = $this->db->get_where('wilayah_kabupaten', ['provinsi_id' => $id])->result_array();
        echo json_encode($getKabupaten);
    }
    public function wilayah_kecamatan($id)
    {
        $getKecamatan = $this->db->get_where('wilayah_kecamatan', ['kabupaten_id' => $id])->result_array();
        echo json_encode($getKecamatan);
    }
    public function getSiswaByNis($nis)
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan,kelas.id as id_kelas");
        $this->db->join('kelas', 'kelas.id = siswa.kelas');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = siswa.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = siswa.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = siswa.kecamatan');
        $getSiswa = $this->db->get_where('siswa', ["nis" => $nis])->row_array();
        echo json_encode($getSiswa);
    }
    public function deleteSiswa($id)
    {
        $this->db->delete('siswa', ['nis' => $id]);
        echo json_encode(['status' => 'success']);
    }
    public function guruById($id)
    {
        $guru = $this->db->get_where("guru", ["id_guru" => $id])->row_array();
        echo json_encode($guru);
    }
    public function updateInstansi()
    {
        $data = $_POST;
        if (!empty($data['file']) && $data['file'] == "foto") {
            unset($data['file']);
            $upLoad = up("image", "assets/img/sekolah");
            if ($upLoad != false) {
                $data['image'] = $upLoad;
            }
        } else if (!empty($data['file']) && $data['file'] == "vidio") {
            unset($data['file']);
            $upLoad = up("video", "assets/vidio");
            if ($upLoad != false) {
                $data['video'] = $upLoad;
            }
        }
        $up = $this->db->update('instansi', $data);
        if ($up) {
            echo json_encode(['status' => 'success', "message" => "Data berhasil diupdate"]);
        } else {
            echo json_encode(['status' => 'error', "message" => "Data gagal diupdate"]);
        }
    }
    public function posting_news()
    {
        $data = $_POST;
        $upLoad = up("thm", "assets/img/berita");
        if ($upLoad != false) {
            $data['thm'] = $upLoad;
        } else {
            $data['thm'] = "default.jpg";
        }
        $data += [
            "tanggal" => date("Y-m-d"),
            "jam" => date("H:i:s"),
            "created_at" => date("Y-m-d H:i:s"),
        ];
        $up = $this->db->insert('berita', $data);
        if ($up) {
            echo json_encode(['status' => 'success', "message" => "Berita berhasil ditambahkan"]);
        } else {
            echo json_encode(['status' => 'error', "message" => "Berita gagal ditambahkan"]);
        }
    }
    public function update_news()
    {
        $data = $_POST;
        unset($data['id']);
        unset($data['thm']);
        $upLoad = up("thm", "assets/img/berita");
        if ($upLoad != false) {
            $data['thm'] = $upLoad;
        }
        $up = $this->db->update('berita', $data, ['id' => $_POST['id']]);
        if ($up) {
            echo json_encode(['status' => 'success', "message" => "Berita berhasil diupdate"]);
        } else {
            echo json_encode(['status' => 'error', "message" => "Berita gagal diupdate"]);
        }
    }
    public function mediaAction()
    {
        $number_of_files_uploaded = count($_FILES['foto']['name']);
        $files = $_FILES;
        unset($_FILES);
        $imgFoto = [];
        for ($i = 0; $i <  $number_of_files_uploaded; $i++) {
            $_FILES['foto']['name'] = $files['foto']['name'][$i];
            $_FILES['foto']['type'] = $files['foto']['type'][$i];
            $_FILES['foto']['tmp_name'] = $files['foto']['tmp_name'][$i];
            $_FILES['foto']['error'] = $files['foto']['error'][0];
            $_FILES['foto']['size'] = $files['foto']['size'][0];
            $upLoad = up("foto", "assets/img/media");
            if ($upLoad != false) {
                $imgFoto[] = $upLoad;
            }
        }
        $foto = json_encode($imgFoto);
        $data = $_POST;
        if ($data['id'] == "") {
            $data += [
                "tanggal" => date("Y-m-d"),
                "jam" => date("H:i:s"),
                "created_at" => date("Y-m-d H:i:s"),
                "foto" => $foto,
            ];
            $up = $this->db->insert('media', $data);
            if ($up) {
                echo json_encode(['status' => 'success', "message" => "Media berhasil ditambahkan"]);
            } else {
                echo json_encode(['status' => 'error', "message" => "Media gagal ditambahkan"]);
            }
        } else {
            $data += [
                "foto" => $foto,
            ];
            if (count($imgFoto) == 0) {
                unset($data['foto']);
            }
            $up = $this->db->update('media', $data, ['id' => $data['id']]);
            if ($up) {
                echo json_encode(['status' => 'success', "message" => "Media berhasil diupdate"]);
            } else {
                echo json_encode(['status' => 'error', "message" => "Media gagal diupdate"]);
            }
        }
    }
    public function mediaDelete($id)
    {
        $del = $this->db->delete('media', ['id' => $id]);
        if ($del) {
            $this->session->set_flashdata('success', 'Data Berhasil dihapus');
            redirect('Media/index');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal dihapus');
            redirect('Media/index');
        }
    }
    public function getSiswaDaftar($id)
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan,pendaftaran.id as id,pendaftaran.nama as nama");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = pendaftaran.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = pendaftaran.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = pendaftaran.kecamatan');
        $this->db->where("pendaftaran.id", $id);
        $getPendaftaran = $this->db->get_where("pendaftaran")->row_array();
        echo json_encode($getPendaftaran);
    }
    public function delete_guru($id_guru)
    {
        $del = $this->db->delete("guru", [
            "id_guru" => $id_guru
        ]);

        if ($del) {
            $this->session->set_flashdata('success', 'Data Berhasil dihapus');
            redirect('Guru/index');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal dihapus');
            redirect('Guru/index');
        }
    }
}
