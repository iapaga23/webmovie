var settings = {
               rows: 5,
               cols: 15,
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 35,
               seatHeight: 35,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };

var tprice = [120,150,200,220,120,150,200,220];
var food1 = [100];
var food2 = [120];
var food3 = [150];
var drink1 = [25];
var drink2 = [50];
var drink3 = [50];
$('#btnTicket').click(function() {
    $('div#invisible').show(500);
    $('div#visible').hide();
    $('div#visible2').hide();
    $("#ticket").prop("readonly", true);
    $('#movie option:not(:selected)').prop('disabled', true);
    $("#orig").prop("readonly", true);
    $("#caramel").prop("readonly", true);
    $("#choco").prop("readonly", true);
    $("#water").prop("readonly", true);
    $("#coke").prop("readonly", true);
    $("#tea").prop("readonly", true);
});

var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (j + i * settings.cols + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
            };


            var bookedSeats = [1, 2, 24, 25, 26];
            init(bookedSeats);

var nseat = 1;
$('#movie').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML =amt + '.00';
    document.getElementById("amountTotal").innerHTML = amt + '.00';
});
$('#ticket').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});
$('#orig').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});
$('#caramel').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById('orig').value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});
$('#choco').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});
$('#water').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});
$('#coke').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});
$('#tea').on('input', function() {
    nseat = document.getElementById("ticket").value;
    watch = document.getElementById("movie").value;
    orig =  document.getElementById("orig").value;
    caramel = document.getElementById("caramel").value;
    choco = document.getElementById("choco").value;
    water = document.getElementById("water").value;
    coke = document.getElementById("coke").value;
    tea = document.getElementById("tea").value;
    var amt = nseat * tprice[watch] + (food1 * orig) + (food2 * caramel) + (food3 * choco) + (drink1 * water) + (drink2 * coke) + (drink3 * tea);
    document.getElementById("amount").innerHTML = amt + '.00';
    document.getElementById("amountTotal").innerHTML =  amt + '.00';
});

    var selSeat = 0;

    $('.' + settings.seatCss).click(function () {

    if ($(this).hasClass(settings.selectedSeatCss)){
        alert('This seat is already reserved');
    }
    else if($(this).hasClass(settings.selectingSeatCss)){
        $(this).removeClass(settings.selectingSeatCss);
        selSeat--;
    }
    else if(nseat-selSeat==0)
        alert('You have already selected ' + nseat + ' seat(s)');
    else
    {
        $(this).toggleClass(settings.selectingSeatCss);
        selSeat++;
    }
    });

$('#btnShow').click(function () {
    var str = [];
    $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
    });
    alert(str.join(','));
})

var mySeats;

$('#btnShowNew').click(function () {
    var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');
        str.push(item);
    });
    alert(str.join(','));

    mySeats = JSON.stringify(str);

})