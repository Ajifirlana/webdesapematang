
$(function(){
    $(".select2").select2();
    $('.datepicker').datetimepicker({format : "DD/MM/YYYY"});("00-00-0000");
});


var showNotify = function($title, $message){
    
    $.notify({
        icon: $base_url + '/img/success.png',
        title: $title,
        message: $message
    },{
        placement: {
            from: "bottom"
        },
        animate:{
            enter: "animated fadeInUp",
            exit: "animated fadeOutDown"
        },
        offset:{
            x:20,
            y:50
        },
        type: 'minimalist',
        delay: 4500,
        icon_type: 'image',
        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0} alert-dismissible" role="alert">' +
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
            '<img data-notify="icon" class="img-circle pull-left">' +
            '<span data-notify="title">{1}</span>' +
            '<span data-notify="message">{2}</span>' +
        '</div>'
    });

}

var showAlert = function($title, $message){

    $.notify({
        icon: $base_url + '/img/warning.png',
        title: $title,
        message: $message
    },{
        placement: {
            from: "bottom"
        },
        animate:{
            enter: "animated fadeInUp",
            exit: "animated fadeOutDown"
        },
        offset:{
            x:20,
            y:50
        },
        type: 'minimalist',
        delay: 4500,
        icon_type: 'image',
        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0} alert-dismissible" role="alert">' +
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
            '<img data-notify="icon" class="img-circle pull-left">' +
            '<span data-notify="title">{1}</span>' +
            '<span data-notify="message">{2}</span>' +
        '</div>'
    });
}

var startLoading = function(){
    $(".loading-panel").html("<i class='fa fa-spinner fa-spin' style='font-size:1.2em; color:#019597;'></i> <span style=' color:#019597;'>Data Sedang Diproses..</span>");
}

var stopLoading = function(){
    $(".loading-panel").html('');
}

var currencyFormat = function (num) {
    return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

var getValueCurrency = function (str){
    $str_new = str.replace("Rp", "");
    $str_new = str.replace("", "");
    $str_new = str.replace(",", "");
    if(!$str_new || $str_new==''){
        return 0.00;
    }
    return parseFloat($str_new).toFixed(2);
}

$(".date-input").mask("00/00/0000",{ placeholder:"dd/mm/yyyy"});

var formatRupiah  = function (angka, prefix)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   = number_string.split(','),
        sisa    = split[0].length % 3,
        rupiah  = split[0].substr(0, sisa),
        ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}

$(".rupiah").number(true,2);
$(".numerik").mask("#", {reverse: true});
$(".numerik3").mask("999", {reverse: true});
$(".tahun").mask("0000", {reverse: true});