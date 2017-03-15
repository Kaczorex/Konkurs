  $( function() {
       $( "#datepicker" ).datepicker({
      altField: "#alternate",
      altFormat: "DD, d MM, yy"
    });
      $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    });
   