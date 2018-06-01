$(".meridiems").click(function() {
  $(this).text($(this).text() == 'PM' ? 'AM' : 'PM');
})

$(".row-time li").click(function() {
  var value = $(this).text();
  $(this).parent().parent().find("button > .display").text(value);
})

$("#type").change(function() {
    // var specificsDisplay = toggleSelectGroup($(this).find(":selected"), $("#specifics"));

    const typeVal = $("#type > option:selected").val();
    const vehicleVal = $("#vehicle > option:selected").val();
    var specifics = $("#specifics");
    if (typeVal != 0){
        const filePath = '/html/' + vehicleVal + "-" + typeVal + '-specifics.html';
        specifics.load(filePath);
    } else {
        specifics.val(0);
    }
})

$("#vehicle").change(function() {
    const vehicleVal = $("#vehicle > option:selected").val();
    var type = $("#type");
    if (vehicleVal != 0){
        type.parent().show();
        const filePath = '/html/' + vehicleVal + '-types.html';
        type.load(filePath);
    } else {
        type.val(0);
        type.trigger('change');
        type.parent().hide();
    }
});

function toggleSelectGroup(checkItem, toggleItem){
    // Check for availability of specifics
    const noSpecifics = checkItem.attr('no-specifics');
    if (typeof noSpecifics !== typeof undefined && noSpecifics !== false) {
        toggleItem.parent().hide();
        return 0;
    } else {
        toggleItem.parent().show();
        return 1;
    }
}