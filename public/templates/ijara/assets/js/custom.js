// НАСТРОЙКА ДОСТУПА

$(function() {

    'use strict'

    // The code below is for demo purposes only.
    // For you to not be confused, please refer to
    // Off-Canvas starter template in Collections

    $('.off-canvas-menu').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $(target).addClass('show');
    });


    $('.off-canvas .close').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.off-canvas').removeClass('show');
    })

    $(document).on('click touchstart', function(e) {
        e.stopPropagation();

        // closing of sidebar menu when clicking outside of it
        if (!$(e.target).closest('.off-canvas-menu').length) {
            var offCanvas = $(e.target).closest('.off-canvas').length;
            if (!offCanvas) {
                $('.off-canvas.show').removeClass('show');
            }
        }
    });

});



// TABLE CONTEXTMENU



// ВХОДЯЩИЕ

$(function() {
    'use strict'



    $('#checkAll').on('change', function(e) {
        if ($(this).is(':checked')) {
            $('.mail-item').addClass('selected');
            $('.mail-item .custom-checkbox input').prop('checked', true);
        } else {
            $('.mail-item').removeClass('selected');
            $('.mail-item .custom-checkbox input').prop('checked', false);
        }
    })

    $('.mail-item .custom-checkbox input').on('change', function(e) {
        if ($(this).is(':checked')) {
            $(this).closest('.mail-item').addClass('selected');
        } else {
            $(this).closest('.mail-item').removeClass('selected');
        }
    })

    $('.mail-item-body').on('click', function(e) {


        if (window.matchMedia('(max-width: 767px)').matches) {
            $('body').removeClass('mail-menu-show');
            $('#mailMenu').removeClass('d-none');
            $('#mainMenu').addClass('d-none');
        }
    })

})

// DATA PICKER
$(function() {
    'use strict'

    $('#datepicker1').datepicker();

    $('#datepicker2').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true
    });

    $('#datepicker3').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        changeMonth: true,
        changeYear: true
    });

    $('#datepicker4').datepicker();

    $('#datepicker5').datepicker({
        showButtonPanel: true
    });

    $('#datepicker6').datepicker({
        numberOfMonths: 2
    });

    var dateFormat = 'mm/dd/yy',
        from = $('#dateFrom')
        .datepicker({
            defaultDate: '+1w',
            numberOfMonths: 2
        })
        .on('change', function() {
            to.datepicker('option', 'minDate', getDate(this));
        }),
        to = $('#dateTo').datepicker({
            defaultDate: '+1w',
            numberOfMonths: 2
        })
        .on('change', function() {
            from.datepicker('option', 'maxDate', getDate(this));
        });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    }


});


// ЗАГРУЗКА ФАЙЛОВ ПО ТИПАМ
$(function() {
    $("#upload_new").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_plan").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_sxema").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_photo").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_xulosa_qurilish").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_xulosa_culture").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_xulosa_ecology").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
    $("#upload_xulosa_xokimiyat").on('click', function(e) {
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
});


$(function() {
    'use strict'

    $('#example1').DataTable({
        language: {
            searchPlaceholder: 'Поиск...',
            sSearch: '',
            lengthMenu: '_MENU_ в списке',
        }
    });

    $('#example2').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });

    $(document).ready(function() {
        var table = $('#land_list_area').DataTable({
            "ajax": "../assets/data/datatable-arrays.txt",
            "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<a class='tx-primary'>Добавить</a>"
            }]
        });

        $('#land_list_area tbody').on('click', 'a', function() {
            var data = table.row($(this).parents('tr')).data();
            console.log(d);

        });


    });

    $('#example4').DataTable({
        'ajax': '../assets/data/datatable-objects.txt',
        "columns": [
            { "data": "ID" },
            { "data": "От" },
            { "data": "Срок" },
            { "data": "Создано" },
            { "data": "Статус" }
        ],
        language: {
            searchPlaceholder: 'Поиск...',
            sSearch: '',
            lengthMenu: '_MENU_ в списке',
        }
    });

    // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

});

// СВОБОДНЫЕ УЧАСТКИ

$(function() {
    $('#free_land_region').simpleTreeTable({
        expander: $('#expander'),
        collapser: $('#collapser'),
        store: 'session',
        storeKey: 'simple-tree-table-basic'
    });
});

// УЧАСТКИ НА АУЦИОНЕ

$(function() {

    $('#send_auction').simpleTreeTable({
        expander: $('#expander'),
        collapser: $('#collapser'),
        store: 'session',
        storeKey: 'simple-tree-table-basic'
    });
    $('#on_auction').simpleTreeTable({
        expander: $('#expander'),
        collapser: $('#collapser'),
        store: 'session',
        storeKey: 'simple-tree-table-basic'
    });
    $('#end_auction').simpleTreeTable({
        expander: $('#expander'),
        collapser: $('#collapser'),
        store: 'session',
        storeKey: 'simple-tree-table-basic'
    });
});


// ПРОФИЛ МЕНЮ
$(function() {

    'use strict'

})

$(function() {

    'use strict'

    $('#profileMenu').on('click', function(e) {
        e.preventDefault();

        $('body').addClass('profile-menu-show');
        $('#mainMenu').removeClass('d-none');
        $(this).addClass('d-none');
    })

})


// COUNT

function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function() {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

jQuery(function($) {
    var fiveMinutes = 60 * 5,
        display = $('#time');
    startTimer(fiveMinutes, display);
});

// LIST land_list_area


 

$(document).ready(function() {
    $(document).on("click", ".opencomment", function() {
        var mycomment = $(this).data('id');
        $(".modal-body #commentdesc").html(mycomment);
    });

    $('#FreeLandAreaChild').DataTable({

        "processing": true,
        "ajax": {
            "url": "../assets/data/lands.json",
            "type": "POST",
            "dataSrc": ""
        },
        "lengthMenu": [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "Все"]
        ],
        "autoWidth": true,
        "responsive": true,
        "lengthChange": true,
        "ordering": false,
        "fnRowCallback": function(nRow, aData, iDisplayIndex) {
            var oSettings = this.fnSettings();
            $("td:first", nRow).html(oSettings._iDisplayStart + iDisplayIndex + 1);
            return nRow;
        },

        "columns": [
            { "data": null, "autoWidth": true },
            { "data": "cad_num", "autoWidth": true },
            { "data": "area", "autoWidth": true },
            { "data": "date_in", "autoWidth": true },
            { "data": "action", "autoWidth": true },
        ],
        columnDefs: [{
            targets: -1,
            render: function(data, type, row, meta) {
                if (type === 'display' && data.length > -1) {
                    return '<span title="' + data + '">' + data.substr(0, 8) + ' <a href="" data-id="' + data + '" data-toggle="modal" class="tx-primary" data-target="#add_land">Добавить</a>';
                } else {
                    return data;
                }
            }
        }],
        "language": {
            "emptyTable": "No Events Found Related To This User"
        }
    });


});

// SEARCH INBOX
(function ($) {
  // custom css expression for a case-insensitive contains()
  jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };


  function listFilter(header, list) { // header is any element, list is an unordered list
    // create and add the filter form to the header
    var form = $("<form>").attr({"class":"filterform","action":"#"}),
        input = $("<input>").attr({"class":"filterinput","type":"text"});
    $(form).append(input).appendTo(header);

    $(input)
      .change( function () {
        var filter = $(this).val();
        if(filter) {
          // this finds all links in a list that contain the input,
          // and hide the ones not containing the input while showing the ones that do
          $(list).find("a:not(:Contains(" + filter + "))").parent().slideUp();
          $(list).find("a:Contains(" + filter + ")").parent().slideDown();
        } else {
          $(list).find("li").slideDown();
        }
        return false;
      })
    .keyup( function () {
        // fire the above change event after every letter
        $(this).change();
    });
  }


  //ondomready
  $(function () {
    listFilter($("#SearchInbox"), $("#inbox"));
  });
}(jQuery));




