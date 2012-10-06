$(function() {

    $.timepicker.regional['cs'] = {
        timeOnlyTitle: 'Vyberte čas',
        timeText: 'Čas',
        hourText: 'Hodiny',
        minuteText: 'Minuty',
        secondText: 'Vteřiny',
        currentText: 'Nyní',
        closeText: 'Zavřít',
        timeFormat: 'h:m',
        ampm: false
    };
    $.timepicker.setDefaults($.timepicker.regional['cs']);


    $('input[data-dateinput-type]').dateinput({
        datetime: {
            dateFormat: 'd.m.yy',
            timeFormat: 'h:mm'
        },
        'datetime-local': {
            dateFormat: 'd.m.yy',
            timeFormat: 'h:mm'
        },
        date: {
            dateFormat: 'd.m.yy'
        },
        month: {
            dateFormat: 'MM yy'
        },
        week: {
            dateFormat: "w. 'týden' yy"
        },
        time: {
            timeFormat: 'h:mm'
        }

    });

});