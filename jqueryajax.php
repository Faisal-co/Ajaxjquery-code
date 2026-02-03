
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Jquery</title>
</head>
<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td>
                <h1 id="header">Jquery Ajax</h1> 
            </td>
            <tr>
            <td>
                <input type="button" id="load-button" value="Load Data">
            </td>
            </tr>
          
        </tr>
        <tr>
            <td id="table-load">
                <table border="1" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table>
        <tr></tr>
        <tr></tr>
    </table>
<!-- if use Jquery file -->
<!-- <script type= "text/javascript" src="JS/jquery.js"></script>  -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#load-button").on("click",function(e){
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(result){
                    $("#table-load").html(result);
                }
            });
        });
    });

</script>


</body>
</html>