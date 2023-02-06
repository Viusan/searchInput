$(document).ready(function(){

  $("input").keyup(function(){
    var searchName = $("input").val();
    $.post("databaseNames.php",{
      searchedName: searchName
    }, function(data, status){
      $("#test").html(data);
    });
  });
});