<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Country City State Demo</title>
<script src="jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
window.load=$( document ).ready(function() 
{
$.ajax(
{
type:'POST',
url:'tableAjaxData.php',
success:function(html)
{
$('#cat1').html(html);
}
}); 
});  


$( document ).ready(function() 
{

$('#cat1').on('change',function()
{
var cat_id = $(this).val();
if(cat_id)
{
$.ajax(
{
type:'POST',
url:'ajaxData.php',
data:'cat_id='+cat_id,
success:function(html)
{
$('#cat2').html(html);
$('#cat3').html('<option value="">Select</option>');                
}
}); 
}else
{
$('#cat2').html('<option value="">Select</option>');
$('#cat3').html('<option value="">Select</option>'); 
}
});

$('#cat2').on('change',function(){//change state to display all city
var cat2_id = $(this).val();
if(cat2_id){
$.ajax({
type:'POST',
url:'ajaxData.php',
data:'cat2_id='+cat2_id,
success:function(html){
$('#cat3').html(html);
}
}); 
}else{
$('#cat3').html('<option value="">Select</option>'); 
}
});
});
</script>

</head>

<select name="cat1" id="cat1" >
<option value="">Select</option>
</select>
<select name="cat2" id="cat2">
<option value="">Select</option>                            
</select>
<select name="cat3" id="cat3">
<option value="">Select</option>
</select>
     
