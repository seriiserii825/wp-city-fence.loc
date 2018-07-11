jQuery(document).ready(function($){
    $('#js-sidebar__list .sidebar__inner-list-link').on('click', function(e){
        e.preventDefault();

        let $this = $(this);
        let parrentEL = $this.closest('.sidebar__list-item');
        let parrentText = parrentEL.text();

        parrentText = parrentText.split(/\r?\n+/)[0];

        let data = {
            action: 'category',
            link: $this.text(),
            parrentText: parrentText
        };

        $.post(catObj.ajaxurl, data, function(response){

        }).done(function(response){
            $('.portfolio__gallery').html(response);
        }).fail(function(){
            alert('error');
        });
    });


});
