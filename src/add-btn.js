//KW field
$( "#btn-kw" ).click(function() {
    if($('#ta-kw').val()=='') {
        $('#ta-kw').append($('#tb-kw').val().replace(/[^A-Za-z\s]+/g, ''));
        $('#tb-kw').val('');
    }
    if(!$('#ta-kw').val()=='') {
        if(!$('#tb-kw').val()==''){
            $('#ta-kw').append(', '+$('#tb-kw').val().replace(/[^A-Za-z\s]+/g, ''));
            $('#tb-kw').val('');
        }
    }
});
$( "#btn-kw-sub" ).click(function() {
    var ta = $('#ta-kw').val()
    var slice = ta.slice(0, ta.lastIndexOf(","));
    $('#ta-kw').val(slice);
});






//URL field
$( "#btn-url" ).click(function() {
    if($('#ta-url').val()=='') { //if text area is blank
        $('#ta-url').append($('#tb-url').val());
        $('#tb-url').val('');
    }
    if(!$('#ta-url').val()=='') { //if text area is not blank
        if(!$('#tb-url').val()==''){
            $('#ta-url').append(', '+$('#tb-url').val());
            $('#tb-url').val('');
        } 
    }
    else alert('here');
});
$( "#btn-url-sub" ).click(function() {
    var tau = $('#ta-url').val()
    if (tau.indexOf(',') != -1) {
        var sliceu = tau.slice(0, tau.lastIndexOf(","));
        $('#ta-url').val(sliceu);
    }
});