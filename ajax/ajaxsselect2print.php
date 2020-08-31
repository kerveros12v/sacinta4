<?php
function ajaxs_select2(){
$r=  "
<script>
$(document).ready(function() {
    $('.selector').select2(

    );
});

</script>";
return $r;
}
echo ajaxs_select2();
?>