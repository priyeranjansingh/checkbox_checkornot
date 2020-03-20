/*
* replce classname with your classname on click function
*/

//here is code for get each checkbox function is checked or not
jQuery('.classname').on('click',function(){
    var filter='';
    $("input:checkbox").each(function(){
       var $this = $(this);
       if($this.is(":checked")){
          var fil = $this.attr("id");
          var filtr=$("#"+fil).val();
          filter+=filtr+",";
       }
    });
  });
