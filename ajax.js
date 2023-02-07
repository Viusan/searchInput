$(document).ready(function(){ //Functions loads only when the page has loaded

  $("input").keyup(function(){ //Keyup uses function every time the input field changes value
    var searchName = $("input").val(); //Put what ever is in the input field into a variable
    $.post("databaseNames.php",{ //Send the data to databaseNames.php through post variable
      searchedName: searchName //The post variable
    }, function(data, status){ //Displays data
      $("#test").html(data);
    });
  });
});