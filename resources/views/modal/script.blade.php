<script>
    var btn_view = $('.btn_view')
    btn_view.click(function(){
        var data_name = $(this).attr('data-name')
        var data_lname = $(this).attr('data-lname')
        var data_email = $(this).attr('data-email')
        $('#fname').val(data_name)
        $('#lname').val(data_lname)
        $('#email').val(data_email)
    });

    $('.btn_edit').click(function(){
        var data_id = $(this).attr('data-id')
        var data_name = $(this).attr('data-name')
        var data_lname = $(this).attr('data-lname')
        var data_email = $(this).attr('data-email')
        $('#edit_id').val(data_id)
        $('#edit_fname').val(data_name)
        $('#edit_lname').val(data_lname)
        $('#edit_email').val(data_email)
    });

    $('.btn_del').click(function(){
        var data_id = $(this).attr('data-del-id')
        var data_name = $(this).attr('data-name')
        $('#id').val(data_id)
        $('#del_fname').val(data_name)
    });
</script>
