jQuery(document).ready(function() {
    var dayCountHours = "";
    const dayTotleHours = [{
            "hour": "1",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "2",
            "Time": "Pm",
            "showType": false
        },
        {
            "hour": "3",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "4",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "5",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "6",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "7",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "8",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "9",
            "Time": "pm",
            "showType": false
        },
        {
            "hour": "10",
            "Time": "pm",
            "showType": false
        }

        ,
        {
            "hour": "11",
            "Time": "pm",
            "showType": false
        }

        ,
        {
            "hour": "12",
            "Time": "pm",
            "showType": false
        }

    ];
    var dayCountRooms = "";
    const dayTotleRomes = [{
            "hour": "1",
            "showType": false
        },
        {
            "hour": "2",
            "showType": false
        },
        {
            "hour": "3",
            "showType": false
        },
        {
            "hour": "4",
            "showType": false
        },
        {
            "hour": "5",
            "showType": false
        },
        {
            "hour": "6",
            "showType": false
        },
        {
            "hour": "7",
            "showType": false
        },
        {
            "hour": "8",
            "showType": false
        }



    ];


    var dayinnerHeight = jQuery('.iner-continer').innerHeight();



    var daytotleHours = dayTotleHours.length;
    var dayHoursHieght = dayinnerHeight / daytotleHours;
    var dayHoursHieghta = (dayinnerHeight / dayinnerHeight) * 100;
    var dayHoursHieghtb = dayHoursHieghta / daytotleHours;

    console.log(dayHoursHieghtb);
    var dayharfHours = dayHoursHieght / 2;
    // console.log(dayHoursHieght);
    // console.log(daytotleHours);
    var dayhoursadd = 0;
    for (var i = 0; i < dayTotleHours.length; i++) {
        dayCountHours += '<div class="cuntsHours" style=" position: absolute;width: 100%;height: ' + dayHoursHieghtb + '%; top: ' + dayhoursadd + '%;">' + dayTotleHours[i].hour + '</div>';
        dayhoursadd = dayHoursHieghtb + dayhoursadd;

    }

    var dayinnerwidth = jQuery('.cHeader').innerWidth();
    var daytotleRooms = dayTotleRomes.length;
    var dayoneRoomsW = dayinnerwidth / daytotleRooms;
    var dayRoomsCart = 0;
    for (var i = 0; i < dayTotleRomes.length; i++) {
        dayCountRooms += '<div class="cuntsRomes" style="width: ' + dayoneRoomsW + 'px; left: ' + dayRoomsCart + 'px;">' + dayTotleHours[i].hour + '</div>';
        dayRoomsCart = dayoneRoomsW + dayRoomsCart;
    }


    jQuery('.left-cart').append(dayCountHours);
    jQuery('.right-cart').append(dayCountHours);
    jQuery('.cHeader').append(dayCountRooms);
});