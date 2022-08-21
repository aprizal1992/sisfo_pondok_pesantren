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
    $('#artikel').summernote({
        placeholder: '',
        tabsize: 2,
        height: 500
    });
    $("#save_news").click(function() {
        const form_data = new FormData();
        form_data.append("judul", $("#judul").val());
        form_data.append("artikel", $("#artikel").summernote("code"));
        form_data.append("thm", $("#thm").prop("files")[0]);
        // axios asynx
        const posting = async () => {
            const response = await axios.post("<?= base_url('Axios/posting_news') ?>", form_data);
            if (response.data.status == "success") {
                swal({
                    title: 'Berhasil',
                    text: 'Berita berhasil ditambahkan',
                    icon: "success",
                    button: "ok",
                }).then(() => {
                    window.location.href = "<?= base_url('Berita/index') ?>";
                });
            } else {
                swal({
                    title: 'Gagal',
                    text: 'Berita gagal ditambahkan',
                    icon: "error"
                });
            }
        }
        posting();
    });
    $("#update_news").click(function() {
        const form_data = new FormData();
        form_data.append("id", $("#id").val());
        form_data.append("judul", $("#judul").val());
        form_data.append("artikel", $("#artikel").summernote("code"));
        form_data.append("thm", $("#thm").prop("files")[0]);
        // axios asynx
        const posting = async () => {
            const response = await axios.post("<?= base_url('Axios/update_news') ?>", form_data);
            if (response.data.status == "success") {
                swal({
                    title: 'Berhasil',
                    text: 'Berita berhasil diupdate',
                    icon: "success",
                    button: "ok",
                }).then(() => {
                    window.location.href = "<?= base_url('Berita/index') ?>";
                });
            } else {
                swal({
                    title: 'Gagal',
                    text: 'Berita gagal diupdate',
                    icon: "error"
                });
            }
        }
        posting();
    })
</script>