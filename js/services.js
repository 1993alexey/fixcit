$(document).ready(function(){
    renumberSteps();
})

function renumberSteps(){
    var steps = $('.step-number .number');
    var stepNew = 1;
    steps.each(function(){
        if ($(this).parent().parent().css('display') !== 'none'){
            $(this).text(stepNew++);
        }
    })
}

$(".meridiems").click(function() {
  $(this).text($(this).text() == 'PM' ? 'AM' : 'PM');
})

$(".row-time li").click(function() {
  var value = $(this).text();
  $(this).parent().parent().find("button > .display").text(value);
})

$("#type").change(function() {
    const typeVal = $("#type > option:selected").val();
    const vehicleVal = $("#vehicle > option:selected").val();
    const noSpecifics = $("#type > option:selected").attr('no-specifics');
    var specifics = $("#specifics");
    if (typeVal != 0 && (typeof noSpecifics === typeof undefined || noSpecifics === false)){
        const filePath = '/html/' + vehicleVal + "-" + typeVal + '-specifics.html';
        specifics.load(filePath);
        specifics.parent().show();
    } else {
        specifics.val(0);
        specifics.parent().hide();
    }
    renumberSteps();
})

$("#vehicle").change(function() {
    const vehicleVal = $("#vehicle > option:selected").val();
    var type = $("#type");
    if (vehicleVal != 0){
        type.parent().show();
        const filePath = '/html/' + vehicleVal + '-types.html';
        type.load(filePath);
        type.val(0);
        type.trigger('change');
    } else {
        type.val(0);
        type.trigger('change');
        type.parent().hide();
    }
    renumberSteps();
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