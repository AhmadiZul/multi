<script type="text/javascript">
    
$(document).ready(function() {
    $(".ipt_pass a").on("click", function(event) {
        event.preventDefault();
        var parent = $(this).parent().parent().parent();
        if(parent.find("input:eq(0)").attr("type") == "text"){
            parent.find("input:eq(0)").attr("type", "password");
            parent.find("i:eq(0)").addClass( "mdi mdi-eye" );
            parent.find("i:eq(0)").removeClass( "mdi mdi-eye-off" );
        }else if(parent.find("input:eq(0)").attr("type") == "password"){
            parent.find("input:eq(0)").attr("type", "text");
            parent.find("i:eq(0)").removeClass( "mdi mdi-eye" );
            parent.find("i:eq(0)").addClass( "mdi mdi-eye-off" );
        }
    })
});    
</script>