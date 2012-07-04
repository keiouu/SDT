$(function() {   
   $("#sdt-enable").click(function() {
       // Toggle SDT mode
       if (_SDT_STATUS == 0) {
           toggle_sdt(1);
           $(this).html("Disable SDT");
       } else {
           toggle_sdt(0);
           $(this).html("Enable SDT");
       }
   });
});
