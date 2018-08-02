$(document).ready(function(){
    $('#dateholder').mask("00/00/0000", {placeholder: "dd/mm/year"});
    $('#phoneholder').mask('(000) 000-00-00', {placeholder: "(0xx) xxx-xx-xx"});
    $('#example').DataTable();
});