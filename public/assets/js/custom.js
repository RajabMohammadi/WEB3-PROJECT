

var notify_message;
var datatable;
var selectTwo;
var jalali;


function getdate(type = "full") {


    week = new Array("يكشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه", "شنبه")
    months = new Array("حوت", "دلو", "جدی", "قوس", "عقرب", "میزان", "سنبله", "اسد", "سرطان", "جوزا", "ثور", "حمل");
    today = new Date();
    d = today.getDay();
    day = today.getDate();
    month = today.getMonth() + 1;
    year = today.getYear();
    year = (window.navigator.userAgent.indexOf('MSIE') > 0) ? year : 1900 + year;
    if (year == 0) {
        year = 2000;
    }
    if (year < 100) {
        year += 1900;
    }
    y = 1;
    for (i = 0; i < 3000; i += 4) {
        if (year == i) {
            y = 2;
        }
    }
    for (i = 1; i < 3000; i += 4) {
        if (year == i) {
            y = 3;
        }
    }
    if (y == 1) {
        year -= ((month < 3) || ((month == 3) && (day < 21))) ? 622 : 621;
        switch (month) {
            case 1:
                (day < 21) ? (month = 10, day += 10) : (month = 11, day -= 20);
                break;
            case 2:
                (day < 20) ? (month = 11, day += 11) : (month = 12, day -= 19);
                break;
            case 3:
                (day < 21) ? (month = 12, day += 9) : (month = 1, day -= 20);
                break;
            case 4:
                (day < 21) ? (month = 1, day += 11) : (month = 2, day -= 20);
                break;
            case 5:
            case 6:
                (day < 22) ? (month -= 3, day += 10) : (month -= 2, day -= 21);
                break;
            case 7:
            case 8:
            case 9:
                (day < 23) ? (month -= 3, day += 9) : (month -= 2, day -= 22);
                break;
            case 10:
                (day < 23) ? (month = 7, day += 8) : (month = 8, day -= 22);
                break;
            case 11:
            case 12:
                (day < 22) ? (month -= 3, day += 9) : (month -= 2, day -= 21);
                break;
            default:
                break;
        }
    }
    if (y == 2) {
        year -= ((month < 3) || ((month == 3) && (day < 20))) ? 622 : 621;
        switch (month) {
            case 1:
                (day < 21) ? (month = 10, day += 10) : (month = 11, day -= 20);
                break;
            case 2:
                (day < 20) ? (month = 11, day += 11) : (month = 12, day -= 19);
                break;
            case 3:
                (day < 20) ? (month = 12, day += 10) : (month = 1, day -= 19);
                break;
            case 4:
                (day < 20) ? (month = 1, day += 12) : (month = 2, day -= 19);
                break;
            case 5:
                (day < 21) ? (month = 2, day += 11) : (month = 3, day -= 20);
                break;
            case 6:
                (day < 21) ? (month = 3, day += 11) : (month = 4, day -= 20);
                break;
            case 7:
                (day < 22) ? (month = 4, day += 10) : (month = 5, day -= 21);
                break;
            case 8:
                (day < 22) ? (month = 5, day += 10) : (month = 6, day -= 21);
                break;
            case 9:
                (day < 22) ? (month = 6, day += 10) : (month = 7, day -= 21);
                break;
            case 10:
                (day < 22) ? (month = 7, day += 9) : (month = 8, day -= 21);
                break;
            case 11:
                (day < 21) ? (month = 8, day += 10) : (month = 9, day -= 20);
                break;
            case 12:
                (day < 21) ? (month = 9, day += 10) : (month = 10, day -= 20);
                break;
            default:
                break;
        }
    }
    if (y == 3) {
        year -= ((month < 3) || ((month == 3) && (day < 21))) ? 622 : 621;
        switch (month) {
            case 1:
                (day < 20) ? (month = 10, day += 11) : (month = 11, day -= 19);
                break;
            case 2:
                (day < 19) ? (month = 11, day += 12) : (month = 12, day -= 18);
                break;
            case 3:
                (day < 21) ? (month = 12, day += 10) : (month = 1, day -= 20);
                break;
            case 4:
                (day < 21) ? (month = 1, day += 11) : (month = 2, day -= 20);
                break;
            case 5:
            case 6:
                (day < 22) ? (month -= 3, day += 10) : (month -= 2, day -= 21);
                break;
            case 7:
            case 8:
            case 9:
                (day < 23) ? (month -= 3, day += 9) : (month -= 2, day -= 22);
                break;
            case 10:
                (day < 23) ? (month = 7, day += 8) : (month = 8, day -= 22);
                break;
            case 11:
            case 12:
                (day < 22) ? (month -= 3, day += 9) : (month -= 2, day -= 21);
                break;
            default:
                break;
        }
    }
    if(type == 'full'){
        return (week[d] + " " + day + " " + months[month - 1] + " " + year);
    }
    else if (type == 'year') {
        return year;
    }
    else if (type =="day"){
        return day;
    } else if (type == "month"){
        return months[month - 1]

    } else if (type == "week"){
        return week[d];
    }
}

$(document).ready(function () {
    $('ul.menu>li').each(function (i,v) {

        $(this).click(function () {

            $('.current').removeClass('current');
            $(this).addClass(' current')
        });
    })


     selectTwo=function(){

        $('.select2_1').select2();

    }
     datatable=function () {
        $('#example').dataTable();
    }

     jalali=function () {

        /*================
     JALALI DATEPICKER
     * ===============*/
        var opt={

            // placeholder text

            placeholder: "",

            // enable 2 digits

            twodigit: true,

            // close calendar after select

            closeAfterSelect: true,

            // nexy / prev buttons

            nextButtonIcon: "fa fa-forward",

            previousButtonIcon: "fa fa-backward",

            // color of buttons

            buttonsColor: "پیشفرض ",

            // force Farsi digits

            forceFarsiDigits: true,

            // highlight today

            markToday: true,

            // highlight holidays

            markHolidays: false,

            // highlight user selected day

            highlightSelectedDay: true,

            // true or false

            sync: false,

            // display goto today button

            gotoToday: true

        }


        kamaDatepicker('jalali-datepicker',opt);
         kamaDatepicker('jalali-enddate', opt);
         kamaDatepicker('jalali-startdate', opt);
         /*Ashour*/
         kamaDatepicker('pr_date', opt);
         kamaDatepicker('tat', opt);
    }







});
/*Ebahim*/
$(document).ready(function () {
    $(document).on('change','#employee_id',function () {
        var employeeID=$(this).val();


        $.ajax({

            url:'employeereport/getemployeeinfo',
            type:'get',
            data: {
                'id': employeeID,
            },
            success:function (data) {

                for (var i=0;i<data.length;i++){
                    $('#main').text( "معاش " +'  '  +data[i].first_name +'    '+'  '+ data[i].last_name +'  '+ data[i].salary   );
                    $('#hids').val(data[i].salary);
                    $('#hide').val(data[i].salary);
                }
            }

        });

    });

});
$(document).ready(function(){
    $(document).on('change','#month_id',function(){
        var name=$(this).val();

        var employeeid=$('#employeeid').val();



        $.ajax({

            url:'employeereport/getdat',
            type:'get',
            data:{'id':name,
                'employeeId':employeeid,

            } ,
            success:function(data){
                for (var i = 0;i<data.length ;i++) {




                    $('#barrow').text(data[i].payment_barrow+' قرض دار از ماه  '   +name);

                }
                if (data.length==0) {
                    $('#payment_amount').val("") ;


                    $('#barrow').text("");


                }

                else {
                    $('#payment_amount').css("background-color", "");
                }
            }

        })
    });
});






