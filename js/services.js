$(document).ready(function(){
    renumberSteps();
})

function renumberSteps(){
    if ($('.step-number').css('display') == 'none') return; // don't renumber if numbers are hidden
    const steps = $('.step-number .number');
    let stepNew = 1;
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
    const value = $(this).text();
    $(this).parent().parent().find("button > .display").text(value);
})

$("#type").change(function() {
    const typeVal = $("#type > option:selected").val();
    const vehicleVal = $("#vehicle > option:selected").val();
    const noSpecifics = $("#type > option:selected").attr('no-specifics');
    const specifics = $("#specifics");
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
    const addOptionsAttr = $("#vehicle > option:selected").attr('no-add-options');
    const type = $("#type");
    if (vehicleVal != 0) {
        type.parent().show();
        let filePath = '/html/category/' + vehicleVal + '-types.html';
        type.load(filePath);
        if (type.val()) {
            type.val(0);
            type.trigger('change');
        }
        // Add add options
        if(typeof addOptionsAttr === typeof undefined || addOptionsAttr === false) {
            filePath = '/html/add_options/' + vehicleVal + '-add-options.html';
            $(".add-options-container").load(filePath);
            $(".add-options").show();
            renumberSteps();
        } else {
            $(".add-options").hide();
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

$("#care-type").change(function(){
    const typeVal = $(this).val();
    if (typeVal == 'walk' || typeVal == 'day-care'){
        $(".length").show();
    } else {
        $(".length").hide();
    }

})