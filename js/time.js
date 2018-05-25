function addSpecifics(item, type = 0){
  item.empty();
  var opt0 = `
    <option value="0">Select Specifics</option>
    <option value="1">Small</option>
    <option value="2">Big</option>`;
  var opt1 = `
    <option value="0">Select Specifics</option>
    <option value="1">2 Seats</option>
    <option value="2">4 Seats</option>
    <option value="3">6 Seats</option>`;
  if (!type) {
    item.append(opt0);
  } else {
    item.append(opt1);
  }
}

$(".meridiems").click(function() {
  $(this).text($(this).text() == 'PM' ? 'AM' : 'PM');
})

$(".row-time li").click(function() {
  var value = $(this).text();
  $(this).parent().parent().find("button > .display").text(value);
})

$("#type").change(function(){
  var typeSelected = $("#type > option:selected").val();
  if (typeSelected == 0) {
    $("#specifics").attr("disabled", "");
  } else {
    if (typeSelected == 1){
      addSpecifics($("#specifics"));
    } else {
      addSpecifics($("#specifics"), 1);
    }
    $("#specifics").removeAttr("disabled");
  }
})