<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>Autocomplete Textbox with PHP & Ajax</h1>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="search-form">
     
          <div id="autocomplete">
            <input type="text" id="city-box" placeholder="Enter City" autocomplete="off">
            <div id="cityList"></div>
          </div>
          <input type="submit" id="search-btn">
        </form>
         
      </td>
    </tr>
    <tr>
      <td id="table-data"></td>
    </tr>
  </table>
    
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type = "text/javascript">
// Jquery Code Starts
     $(document).ready(function(){
        $("#city-box").keyup(function(){
            var city = $(this).val();
            if(city != ''){
                $.ajax({            // Ajax code Starts
                    url: "load-city.php",
                    method: "POST",
                    data: {city: city}, // Sending data means dending var city value in load-city.php.
                    success:function(data){
                    console.log(data);
                    $("#cityList").fadeIn("fast").html(data);
                    }
                })                                                  
            }
            else{
                $("cityList").fadeOut("fast");
            }
        });
        $(document).on('click','#cityList li',function(){
            $('#city-box').val($(this).text());
            $('#cityList').fadeOut();
        });
        $('#search-btn').on('click',function(e){
            e.preventDefault();
            var city = $('#city-box').val();
            if(city == ""){
              alert("Please enter fisrt name");
            }
            else{
             $.ajax({            // Ajax code Starts
                    url: "load-table.php",
                    method: "POST",
                    data: {city: city}, // Sending data means dending var city value in load-city.php.
                    success:function(data){
                    $("#cityList").fadeIn("fast").html(data);
                    }
                })         
            }
        });
    });

</script>
   
</body>

</html>
