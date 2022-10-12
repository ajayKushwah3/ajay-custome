$(function() {
    $("#allFacets").sortable({
        connectWith: "ul",
        placeholder: "placeholder",
        delay: 150
    })
});

$('#add-more1').click(function() {
    var adda1 = $(this).attr('add1');
    $(this).attr('add1', parseInt(adda1) + 1);
    var cnta1 =
        '<div class="facet-container dContecnta1' + adda1 + '" id="left-b"><div class="left box-a"><label>Box ' + adda1 + '</label><div class="min-box"><ul id="allFacets' + adda1 + '" class="facet-list"><li class="facet click-aj-a"><span>Facet ' + adda1 + '1</span> <span><i class="fa fa-pencil" aria-hidden="true"></i></span></li><li class="facet click-aj-a"><span>Facet ' + adda1 + '2</span> <span><i class="fa fa-pencil" aria-hidden="true"></i></span></li><li class="facet click-aj-a"><span>Facet ' + adda1 + '3</span> <span><i class="fa fa-pencil" aria-hidden="true"></i></span></li></ul><a href="javascript:void(0);" class="btn-teg-l on-chang-in" idd="' + adda1 + '" ida="' + adda1 + '">+ Add a card</a><div class="box-as ' + adda1 + '"><form action=""><textarea name="text" rows="2"></textarea><div class="rio-nm"><button class="btn-theme" type="submit">Add card</button> <a href="javascript:void(0);" class="clear on-chang-out" ida="' + adda1 + '"><i class="fa fa-times" aria-hidden="true"></i></a></div></form></div></div></div></div>';
    $('.dContecnta1').append(cnta1)
    $('.on-key-box').keyup(function() {
        $(this).addClass('active')
    });
    $("#allFacets" + adda1).sortable({
        connectWith: "ul",
        placeholder: "placeholder",
        delay: 150
    })
})

function removeRowa1(id) {
    $('.dContecnta1' + id).remove()
}
$(function() {
    $("#left-b").sortable({
        connectWith: ".box-a",
        placeholder: "placeholder",
        delay: 150
    })

});
$(document).on('click', '.click-aj-a', function() {
    $('.min-acti-box-right').addClass('active');
});

$(document).on('click', '.close-mod', function() {
    $('.min-acti-box-right').removeClass('active');
});


$(document).on('click', '.on-chang-in', function() {
    var ida = $(this).attr('idd');
    $('.on-chang-in').removeClass('active');
    $('.box-as').removeClass('active');
    $('.' + ida).addClass('active');
    $(this).addClass('active');
});
$(document).on('click', '.on-chang-out', function() {
    var idc = $(this).attr('ida');
    $('.' + idc).removeClass('active');
    $('.on-chang-in').removeClass('active');
});