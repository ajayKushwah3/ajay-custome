var medicineSelectOption = jQuery('#inchengval');
var medicineSelectData = [];
var selFIArrayChange = [];
var mSTebalData = '';
var mTTDOnCheng = [];
var mTTDOnChengval = 1;
var medicinedata = [{
        "id": 1,
        "name": "Acetaminophen Capsules",
        'disabled': false
    },
    {
        "id": 2,
        "name": "Hydrochlorothiazide",
        'disabled': false

    }, {
        "id": 3,
        "name": "Melatonin Syrup",
        'disabled': false

    }, {
        "id": 4,
        "name": "Trazodone",
        'disabled': false

    }, {
        "id": 5,
        "name": "Ibuprofen",
        'disabled': false

    }, {
        "id": 6,
        "name": "Buprenorphine",
        'disabled': false

    }
];

var medicineTebalData = [{
        "id": 1,
        "name": "Acetaminophen Capsules",

    },
    {
        "id": 2,
        "name": "Hydrochlorothiazide",


    }, {
        "id": 3,
        "name": "Melatonin Syrup",


    }
];

jQuery(document).ready(function() {
    medicineSelectOption.on('select2:close', function() {
        for (var i = 0; i < medicineTebalData.length; i++) {
            var mTDId = medicineTebalData[i].id;
            for (var j = 0; j < medicinedata.length; j++) {
                var mSDId = medicinedata[j].id;
                if (mSDId === mTDId) {
                    medicineSelectData[j].disabled = true;
                }

            }

        }
        select2Init();
    });

    /* ------------------------------------------------------ */
    /* Select add  Init */
    /* ------------------------------------------------------ */
    function generateMedicinedataSelect2(medicinedata) {

        medicinedata.forEach((element, index) => {
            var sfiObj = {
                id: medicinedata[index].id,
                text: medicinedata[index].name,
                disabled: medicinedata[index].disabled,

                // disabled: false
            };
            medicineSelectData.push(sfiObj);
        });
    }
    generateMedicinedataSelect2(medicinedata);
    select2Init();



    /* ------------------------------------------------------ */
    /* Select2 on checng Init */
    /* ------------------------------------------------------ */


    medicineSelectOption.on("change", function() {
        selFIArrayNew = jQuery(this).select2('data');
        var idonch = parseInt(selFIArrayNew[0].id);
        var selFIArrayNewaa = {
            "id": idonch,
            "name": selFIArrayNew[0].text,

        }
        medicineTebalData.push(selFIArrayNewaa);

        medicineTebaltrData(medicineTebalData);
    });





    function select2Init() {
        medicineSelectOption.select2({
            data: medicineSelectData
        });

    }

    /* ------------------------------------------------------ */
    /* tebal fungtion Init */
    /* ------------------------------------------------------ */

    function medicineTebaltrData(medicineTebalData) {
        var mSTebalData = '';
        jQuery('.add-row tbody').html('');

        for (var i = 0; i < medicineTebalData.length; i++) {
            mSTebalData += '<tr id=' + medicineTebalData[i].id + '><td data-title="Product"><div class="cdproductname"><span> ' + medicineTebalData[i].name + '</span></div></td><td data-title="qty" ="quantity"><div class="input-counter"><span class="minus-btn"></span><input type="text" min="1" value="1" step="1" max class="input-text qty text"><span class="plus-btn"></span></div></td><td><a href="javascript:void(0);" class="bscddremoveaction" id=' + medicineTebalData[i].id + '><img src="assets/img/close.svg" alt=""></a></td></tr>';
        }
        jQuery('.add-row tbody').append(mSTebalData);

        jQuery(document).on('click', '.bscddremoveaction', function() {
            var trid = jQuery(this).attr('id');
            medicineTebalData.splice(trid - 1, 1);

            jQuery(this).parent().parent().remove('tr');
        });

    };
    medicineTebaltrData(medicineTebalData);




    /* ------------------------------------------------------ */
    /* quantity add remove  */
    /* ------------------------------------------------------ */
    // jQuery('.input-counter').each(function() {
    //     var spinner = jQuery(this),
    //         input = spinner.find('input[type="text"]'),
    //         btnUp = spinner.find('.plus-btn'),
    //         btnDown = spinner.find('.minus-btn'),
    //         min = input.attr('min'),
    //         max = input.attr('max');

    //     btnUp.on('click', function() {
    //         var oldValue = parseFloat(input.val());
    //         if (oldValue >= max) {
    //             var newVal = oldValue;
    //         } else {
    //             var newVal = oldValue + .5;
    //         }
    //         spinner.find("input").val(newVal);
    //         spinner.find("input").trigger("change");
    //     });
    //     btnDown.on('click', function() {
    //         var oldValue = parseFloat(input.val());
    //         if (oldValue <= min) {
    //             var newVal = oldValue;
    //         } else {
    //             var newVal = oldValue - .5;
    //         }
    //         spinner.find("input").val(newVal);
    //         spinner.find("input").trigger("change");
    //     });
    // });

    jQuery(document).on('click', '.plus-btn, .minus-btn', function() {
        var qty = jQuery(this).parent('.input-counter').find('.qty');

        var val = parseFloat(qty.val());
        var max = parseFloat(qty.attr('max'));
        var min = parseFloat(qty.attr('min'));
        var step = parseFloat(qty.attr('step'));

        if (jQuery(this).is('.plus-btn')) {
            jQuery('.minus-btn').addClass('active_minus');

            if (max && (max <= val)) {
                qty.val(max).change();
            } else {
                qty.val(val + step).change();
                jQuery(this).parent('.input-counter').find('.minus').addClass('active_minus');
            }
        } else {
            if (min && (min >= val)) {
                qty.val(min).change();
            } else if (val > 1) {
                qty.val(val - step).change();
                if ((val - step) <= 1) {
                    jQuery(this).removeClass('active_minus');
                }
            } else if (val == 1) {
                jQuery(this).removeClass('active_minus');
            }
        }
    });
});