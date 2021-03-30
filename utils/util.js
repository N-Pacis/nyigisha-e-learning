$(document).ready(function() {
    $('#editable-table').Tabledit({
        url: 'crud.php',
        columns: {
            identifier: [0, 'student_id'],
            editable: [
                [1, 'student_name'],
                [2, 'student_class']
            ]
        },
        restoreButton:false,
        onSuccess: function(data, textStatus, jqXHR) {
            if (data.action == 'delete') {
                $('#' + data.student_id).remove();
            }
        }
    });
    $('#search_courses').keyup(function(){
        var txt = $(this).val();
        if(txt != ''){
            $.ajax({
                url:'search.php',
                method:'post',
                data:{search:txt},
                dataType:'text',
                success:function(data){
                    $('#result').html(data);
                }
            });
            document.querySelector('.lectures').style.display='none';
        }
        else{
            $('#result').html('');
            document.querySelector('.lectures').style.display='flex';
        }
    });
});