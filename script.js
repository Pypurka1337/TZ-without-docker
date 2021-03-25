  
        //ajax запрос calc.php
        $(document).on("submit",'form#form', function(e){
            e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'calc.php',
            data: $(this).serialize(),
            success: function(data){
                $('#message').html(data);
            }
        });
    }); 
  
  /* Локализация datepicker */
  $.datepicker.regional['ru'] = {
    closeText: 'Закрыть',
    prevText: 'Предыдущий',
    nextText: 'Следующий',
    currentText: 'Сегодня',
    monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
    monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
    dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
    dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
    dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
    weekHeader: 'Не',
    dateFormat: 'dd.mm.yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};

$.datepicker.setDefaults($.datepicker.regional['ru']);
$( "#datepicker" ).datepicker({
    inline: true,
});

$(function(){
    $("#datepicker").datepicker({
        minDate: 0
    });
});

$(function(){
    $( "#slider1" ).slider({
    range: 'min',
    min: 1000,
    max: 3000000,
    value: 1000,  
    slide : function(event, ui) {    
    $('#d_amount').val(ui.value);        
        }
    });

    $( "#slider2" ).slider({
    range: 'min',
    min: 1000,
    max: 3000000,
    value: 1000,  
    slide : function(event, ui) {    
    $('#d_r_amount').val(ui.value);        
        }
    });
});