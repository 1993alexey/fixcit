$(document).ready(function(){
    renumberSteps();
})

function renumberSteps(){
    if ($('.step-number').css('display') == 'none') return; // don't renumber if numbers are hidden
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

$(".day-time .time li").click(function() {
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
    $.ajax({
        url:'/html/category/car-types.html',
        type:'HEAD',
        success: function()
        {
            alert('yes');
        }
    });
    const vehicleVal = $("#vehicle > option:selected").val();
    const addOptionsAttr = $("#vehicle > option:selected").attr('no-add-opts');
    var type = $("#type");
    if (vehicleVal != 0){
        type.parent().show();
        var filePath = '/html/category/' + vehicleVal + '-types.html';
        type.load(filePath);
        type.val(0);
        type.trigger('change');
        // Add add options
        if(typeof addOptionsAttr === typeof undefined || addOptionsAttr === false) {
            filePath = '/html/add_options/' + vehicleVal + '-add-options.html';
            $(".add-options-container").load(filePath);
            $(".add-options").show();
            renumberSteps();
        }
    } else {
        type.val(0);
        type.trigger('change');
        type.parent().hide();
        $(".add-options").hide();
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