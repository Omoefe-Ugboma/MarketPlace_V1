<div id="footer">
  	<h4> Copyright 2017 &copy; Jooglee Developed by OnePlus Group</h4>
  </div><!--end of footer-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript">
function updateSizes(){
   var sizeString = '';
    for(var i=1;i<=12;i++){
      if($('#size'+i).val() != ''){
         sizeString += $('#size'+i).val()+':'+$('#qty'+i).val()+',';
      }
    }
    $('#sizes').val(sizeString);
 }

 function get_child_options(selected){
    if (typeof selected === 'undefined') {
      var selected = '';
    }

      var parentID = $('#parent').val();
      $.ajax({
        url: '/JoogleeMarket1/JoogleeMarket/MaketPlace2/child_categories.php',
        type: 'POST',
        data:{parentID : parentID, selected: selected},
        success: function(data){
           $('#child').html(data);
        },
        error: function(){alert("Something went wrong with the child options.")},
      });
   }
  $('select[name="parent"]').change(function(){
    get_child_options();
  });
    </script>