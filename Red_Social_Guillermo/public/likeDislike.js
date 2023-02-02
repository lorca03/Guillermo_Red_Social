$(document).ready(function(){
    $('#like').css('cursor', 'pointer');
    $('#dislike').css('cursor', 'pointer');
    function like(){
        $('#like').unbind('click').click(function(){

            $(this).attr('id','dislike');
            $(this).attr('src', '/images/favoritoNo.png');

            $.ajax({
                url: '/dislike/'+$(this).data('id'),
                type: 'GET',

            })
             dislike();
        })}

    like();



    function dislike(){
        $('#dislike').unbind('click').click(function(){

            $(this).attr('id','like');
            $(this).attr('src', '/images/favorito.PNG');
            $.ajax({
                url: '/like/'+$(this).data('id'),
                type: 'GET',

            })
             like();
        })}

    dislike();
});

