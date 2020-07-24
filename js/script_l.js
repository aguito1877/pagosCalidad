$.getJSON('js/lang.json', function(json){
    $('.traslate').click(function(){
        let lang = $(this).attr('id');
        $('.lang').each(function(index,value){
            $(this).text(json[lang][$(this).attr('key')]);
        });//cierra each
    });//cierra click
});//Cierra json

$.getJSON('js/lang.json', function(json){
    $('.traslate').click(function(){
        let lang = $(this).attr('id');
        $('.traslate').each(function(index,value){
            $(this).text(json[lang][$(this).attr('key')]);
        });//cierra each
    });//cierra click
});//Cierra json