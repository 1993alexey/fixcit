$(document).ready(function(){
    renumberSteps();
});

function renumberSteps(){
    if ($('.step-number').css('display') === 'none') return; // don't renumber if numbers are hidden
    const steps = $('.step-number .number');
    let stepNew = 1;
    steps.each(function(){
        if ($(this).parent().parent().css('display') !== 'none'){
            $(this).text(stepNew++);
        }
    })
}

$(".meridiems").click(function() {
  $(this).text($(this).text() === 'PM' ? 'AM' : 'PM');
});

$(".day-time .time li").click(function() {
    const value = $(this).text();
    $(this).parent().parent().find("button > .display").text(value);
});

$("#type").change(function() {
    const typeSelected = $("#type > option:selected");
    const vehicleVal = $("#vehicle > option:selected").val();
    const specifics = $("#specifics");
    const typeVal = typeSelected.val();
    const noSpecifics = typeSelected.attr('no-specifics');
    if (typeVal !== '0' && (typeof noSpecifics === typeof undefined || noSpecifics === false)){
        const filePath = '/html/' + vehicleVal + "-" + typeVal + '-specifics.html';
        specifics.load(filePath);
        specifics.parent().show();
        // If type is school, change type specifics to grade
        if (typeVal === "school"){
            $(".content-title.type-specifics").text("Grade");
        } else {
            $(".content-title.type-specifics").text("Type Specifics");
        }
    } else {
        specifics.val(0);
        specifics.parent().hide();
    }
    renumberSteps();
});

$("#vehicle").change(function() {
    const vehicleSelected = $("#vehicle > option:selected");
    const vehicleVal = vehicleSelected.val();
    const addOptionsAttr = vehicleSelected.attr('no-add-options');
    const type = $("#type");
    const addOptions = $(".add-options");
    if (vehicleVal !== '0') {
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
            addOptions.show();
            renumberSteps();
        } else {
            addOptions.hide();
            renumberSteps();
        }
    } else {
        type.val(0);
        type.trigger('change');
        type.parent().hide();
        addOptions.hide();
    }
    renumberSteps();
});

$("#care-type").change(function(){
    const typeVal = $(this).val();
    const lengthControl = $(".length");
    if (typeVal === 'walk' || typeVal === 'day-care'){
        lengthControl.show();
    } else {
        lengthControl.hide();
    }

});