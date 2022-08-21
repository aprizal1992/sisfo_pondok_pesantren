<?php if (!empty($this->session->flashdata("success"))) : ?>
    <script>
        swal({
            title: "Berhasil",
            text: "<?= $this->session->flashdata("success") ?>",
            icon: "success",
            button: "ok",
        });
    </script>
<?php endif ?>
<?php if (!empty($this->session->flashdata("error"))) : ?>
    <script>
        swal({
            title: "Oops!",
            text: "<?= $this->session->flashdata("error") ?>",
            icon: "error",
            button: "ok",
        });
    </script>
<?php endif ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    });
    // get wilayah_kabupaten
    $('#provinsi').change(function() {
        var id = $(this).val();
        const get_wilayah_kabupaten = async () => {
            const getter = await axios.get(`<?= base_url() ?>axios/wilayah_kabupaten/${id}`).catch(err => {
                console.log(err);
            });
            const data = getter.data;
            $('#kabupaten').html('');
            $('#kabupaten').append(`<option value="">Pilih Kabupaten</option>`);
            data.forEach(element => {
                $('#kabupaten').append(`<option value="${element.id}">${element.nama}</option>`);
            });
        };
        get_wilayah_kabupaten();
    });
    // get wilayah_kecamatan
    $('#kabupaten').change(function() {
        var id = $(this).val();
        const get_wilayah_kecamatan = async () => {
            const getter = await axios.get(`<?= base_url() ?>axios/wilayah_kecamatan/${id}`).catch(err => {
                console.log(err);
            });
            const data = getter.data;
            $('#kecamatan').html('');
            $('#kecamatan').append(`<option value="">Pilih Kecamatan</option>`);
            data.forEach(element => {
                $('#kecamatan').append(`<option value="${element.id}">${element.nama}</option>`);
            });
        };
        get_wilayah_kecamatan();
    });
    // edit data
    $(".edit").click(function() {
        var key = $(this).data("id");
        $("#nis_old").val(key);
        $("#nis").val(key);
        const GetSiswa = async () => {
            const getter = await axios.get(`<?= base_url() ?>axios/getSiswaByNis/${key}`).catch(err => {
                console.log(err);
            });
            if (getter?.status ?? 400 == 200) {
                const data = getter.data;
                $("#nama_siswa").val(data.nama_siswa);
                $("#jk").val(data.jk);
                $("#alamat").val(data.alamat);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#provinsi").val(data.provinsi);
                const get_wilayah_kabupaten = async (prov, kab, kec) => {
                    const _getter = await axios.get(`<?= base_url() ?>axios/wilayah_kabupaten/${prov}`).catch(err => {
                        console.log(err);
                    });
                    const data = _getter.data;
                    $('#kabupaten').html('');
                    $('#kabupaten').append(`<option value="">Pilih Kabupaten</option>`);
                    data.forEach(element => {
                        $('#kabupaten').append(`<option value="${element.id}">${element.nama}</option>`);
                    });
                    $("#kabupaten").val(kab);
                    const get_wilayah_kecamatan = async (kab, kec) => {
                        const __getter = await axios.get(`<?= base_url() ?>axios/wilayah_kecamatan/${kab}`).catch(err => {
                            console.log(err);
                        });
                        const data = __getter.data;
                        $('#kecamatan').html('');
                        $('#kecamatan').append(`<option value="">Pilih Kecamatan</option>`);
                        data.forEach(element => {
                            $('#kecamatan').append(`<option value="${element.id}">${element.nama}</option>`);
                        });
                        $("#kecamatan").val(kec);
                    };
                    get_wilayah_kecamatan(kab, kec);
                };
                get_wilayah_kabupaten(data.provinsi, data.kabupaten, data.kecamatan);
                $("#agama").val(data.agama);
                $("#tahun_masuk").val(data.tahun_masuk);
                $("#kelas").val(data.id_kelas);
                $("#status_siswa").val(data.status_siswa);
            }
        };
        GetSiswa();
    });
    // delete data
    $(".delete").click(function() {
        var key = $(this).data("id");
        swal({
            title: "Apakah anda yakin?",
            text: "Data akan dihapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                const DeleteSiswa = async () => {
                    const getter = await axios.delete(`<?= base_url() ?>axios/deleteSiswa/${key}`).catch(err => {
                        console.log(err);
                    });
                    if (getter?.status ?? 400 == 200) {
                        swal("Data berhasil dihapus!", {
                            icon: "success",
                        });
                        location.reload();
                    }
                };
                DeleteSiswa();
            } else {
                swal("Data batal dihapus!");
            }
        });
    });
</script>