$(".meridiems").click(function() {
  $(this).text($(this).text() == 'PM' ? 'AM' : 'PM');
})

$(".row-time li").click(function() {
  var value = $(this).text();
  $(this).parent().parent().find("button > .display").text(value);
})

$("#type").change(function(){
  // Check for availability of specifics
  const noSpecifics = $("#type > option:selected").attr('no-specifics');
  if (typeof noSpecifics !== typeof undefined && noSpecifics !== false) {
    $("#specifics").parent().addClass("tg-hide");
    return;
  } else {
    $("#specifics").parent().removeClass("tg-hide");
  }
  var typeSelected = $("#type > option:selected").val();
  const service = $("#type").attr("service");
  var filePath = '/html/' + service + "-" + typeSelected + '-specifics.html';
  if (typeSelected != 0) {
    $('#specifics').load(filePath);
    $("#specifics").removeAttr("disabled");
  } else {
    $("#specifics").val(0);
    $("#specifics").attr("disabled", "");
  }
})

$(".vehicle-select").change(function(){
  $(".content-container").removeClass("tg-hide");
})