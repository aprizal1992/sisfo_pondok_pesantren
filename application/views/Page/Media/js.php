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
    $('#keterangan').summernote({
        placeholder: '',
        tabsize: 2,
        height: 100
    });

    function editMedia(no) {
        var id = $(this).data("id");
        $("#id").val(id);
        $('#judul').val($('#judul_' + no).html());
        $('#tanggal').val($('#tanggal_' + no).html());
        $('#jam').val($('#jam_' + no).html());
        $('#keterangan').summernote('code', $('#keterangan_' + no).html());
    }

    function imgShow(data) {
        const img = JSON.parse(data ?? '[]');
        var html = '';
        img.forEach(function(value) {
            html += `<div class="col-6 mb-2"><a href="<?= base_url() ?>assets/img/media/${value}" target="_blank"><img src="<?= base_url() ?>assets/img/media/${value}" style="width:100%; height:250px" class="img-fluid" alt=""></a></div>`;
        });
        $('#imgShow').html(html);
    }
    $("#actions").click(function() {
        const form_data = new FormData();
        form_data.append('judul', $("#judul").val());
        form_data.append('tanggal', $("#tanggal").val());
        form_data.append('keterangan', $("#keterangan").summernote("code"));
        $.each($("#foto")[0].files, function(key, file) {
            form_data.append('foto[]', file);
        });
        if ($("#id").val() != "") {
            form_data.append('id', $("#id").val());
        }
        const posts = async () => {
            const push = await axios.post(`<?= base_url() ?>axios/mediaAction`, form_data).catch(err => {
                console.log(err);
            });
            if (push.status == 200) {
                swal({
                    title: "Berhasil",
                    text: "",
                    icon: "success",
                    button: "ok",
                });
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } else {
                swal({
                    title: "Oops!",
                    text: "gagal",
                    icon: "error",
                    button: "ok",
                });
            }
        };
        posts();
    });

    function deleteMedia(id) {
        // get method
        swal({
            title: "Apakah anda yakin?",
            text: "Data ini akan dihapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = `<?= base_url() ?>axios/mediaDelete/${id}`;
            } else {
                swal("Data batal dihapus!");
            }
        });
    }
</script>