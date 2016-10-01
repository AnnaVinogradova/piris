/**
 * Created by anna on 10/1/16.
 */

function deleteUser(e) {
    var id = e.target.value;
    $.post(
        "delete_user.php",
        {
            id: id,
        },
        function (data) {
            if(data){
                e.target.parentNode.remove();
            }
        }
    )
}