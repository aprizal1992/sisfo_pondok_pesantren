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
    // edit
    $('.edit').click(function() {
        var id = $(this).data('id');
        const get_guru = async () => {
            const getter = await axios.get(`<?= base_url() ?>axios/guruById/${id}`).catch(err => {
                console.log(err);
            });
            const data = getter.data;
            $('#nik').val(data.nik);
            $('#nama_lengkap').val(data.nama_lengkap);
            $('#tmp_lahir').val(data.tmp_lahir);
            $('#tgl_lahir').val(data.tgl_lahir);
            $('#jenis_kelamin').val(data.jenis_kelamin);
            $('#agama').val(data.agama);
            $('#pendidikan').val(data.pendidikan);
            $('#gelar_akademi').val(data.gelar_akademi);
            $('#alamat_rumah').val(data.alamat_rumah);
            $('#telepon').val(data.telepon);
            $('#status_guru').val(data.status_guru);
            $('#status_mengajar').val(data.status_mengajar);
            $('#status_pns').val(data.status_pns);
            $('#id_guru').val(data.id_guru);
        };
        get_guru();
    });
</script>