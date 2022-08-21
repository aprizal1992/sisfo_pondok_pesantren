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
    $(".text-label").show();
    $(".text-input").hide();
    const updateDataInstansi = async (attr, data) => {
        const getter = await axios.post(`<?= base_url() ?>axios/updateInstansi`, data).catch(err => {
            console.log(err);
        });
        const res = getter.data;
        if (res.status == "success") {

            window.location.reload();

        } else {
            swal({
                title: "Oops!",
                text: res.message,
                icon: "error",
                button: "ok",
            });
        }
    };
    $(".inpType").click(function() {
        $(this).attr('readonly', false);
    });
    $(".inpLabel").click(function() {
        $(this).parent().hide();
        $($(this).data("input")).show();
    });
    $(".inpType").change(function() {
        $(this).attr('readonly', true);
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $('#' + $(this).data("value")).val());
        updateDataInstansi($(this).data("value"), form_data);
    });
    $(".SelectType").change(function() {
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $('#' + $(this).data("value")).val());
        updateDataInstansi($(this).data("value"), form_data);
    });
    // check $(".inpType") focuse out
    $(".inpType").focusout(function() {
        $(this).attr('readonly', true);
    }).focusout();


    // broadcast
    $(".btn-editor-action-broadcast").click(function() {
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $("#broadcast").summernote("code"));
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();

    $('#broadcast').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
    });
    // change broadcast
    $('#broadcast').on('summernote.change', function(we, contents, $editable) {
        $(".btn-editor-action-broadcast").show();
    });

    // sejarah
    $(".btn-editor-action-sejarah").click(function() {
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $("#sejarah").summernote("code"));
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();

    $('#sejarah').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
    });
    // change sejarah
    $('#sejarah').on('summernote.change', function(we, contents, $editable) {
        $(".btn-editor-action-sejarah").show();
    });

    // about
    $(".btn-editor-action-about").click(function() {
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $("#about").summernote("code"));
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();

    $('#about').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
    });
    $('#about').on('summernote.change', function(we, contents, $editable) {
        $(".btn-editor-action-about").show();
    });

    // visi
    $(".btn-editor-action-visi").click(function() {
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $("#visi").summernote("code"));
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();

    $('#visi').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
    });
    // change visi
    $('#visi').on('summernote.change', function(we, contents, $editable) {
        $(".btn-editor-action-visi").show();
    });

    // misi
    $(".btn-editor-action-misi").click(function() {
        const form_data = new FormData();
        form_data.append($(this).data("keydb"), $("#misi").summernote("code"));
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();

    $('#misi').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300
    });
    // change misi
    $('#misi').on('summernote.change', function(we, contents, $editable) {
        $(".btn-editor-action-misi").show();
    });
    // gambar instansi
    $(".btn-upImg").click(function() {
        $("#image").click();
    });
    $("#image").change(function() {
        const form_data = new FormData();
        form_data.append("image", $("#image")[0].files[0]);
        form_data.append("file", "foto");
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();
    // vidio
    $(".btn-upVid").click(function() {
        $("#vidio").click();
    });
    $("#vidio").change(function() {
        const form_data = new FormData();
        form_data.append("video", $("#vidio")[0].files[0]);
        form_data.append("file", "vidio");
        updateDataInstansi($(this).data("value"), form_data);
    }).focusout();
</script>