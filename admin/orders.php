<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>

<div class="container fetch_order_test">



</div>


<!-- Modal -->
<div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-text="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update Status</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <input type="hidden" name="" class="o_id">
        <input type="hidden" name="" class="order_id">
        <input type="hidden" name="" class="customer_name">
        <input type="hidden" name="" class="user_id">
        
        <select class="form-control order_status">
              <option value="0">Pending</option>
              <option value="1">Confirm</option>
              <option value="3">Delivered</option>
              <option value="2">Cancel</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_status">Update</button>
      </div>
    </div>
  </div>
</div>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</html>
<script type="text/javascript">

  fetch_order_test();
function fetch_order_test(){
  $.ajax({
    url:'pages/fetch_order_test.php',
    method:'POST',
    success:function(data){
      $('.fetch_order_test').html(data);
    }

  })
}


  // $('.open_modal').click(function(){

$(document).on('click', '.open_modal', function(){
    var id = $(this).attr("id");
    var cust_name = $('.cust_name'+id).val();
    var cust_order_id = $('.cust_order_id'+id).val();
    var user_id = $('.user_id'+id).val();
    $('.order_id').val(cust_order_id);
    $('.customer_name').val(cust_name);
    $('.o_id').val(id);
    $('.user_id').val(user_id);
  });



  $('.update_status').click(function(){
    var status = $('.order_status').val();
    var o_id = $('.o_id').val();
    var order_id = $('.order_id').val();
    var customer_name = $('.customer_name').val();
    var user_id = $('.user_id').val();

    $.ajax({
      url:'../php/update_order_status_admin.php',
      method:'POST',
      data:{status:status, o_id:o_id, order_id:order_id, customer_name:customer_name, user_id:user_id},
      success:function(data){
        alert(data);
        fetch_order_test();
      }
    })
  });



</script>