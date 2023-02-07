function hola(event){
    if (event.id=='like'){
        fetch('http://redsocial.local.com/dislike/'+event.alt)
        event.src='images/favoritoNo.png'
        event.id='Nolike'
    }else{
        fetch('http://redsocial.local.com/like/'+event.alt)
        event.src='images/favorito.png'
        event.id='like'
    }
}

// $(document).ready(function(){
//     $('#like').css('cursor', 'pointer');
//     $('#dislike').css('cursor', 'pointer');
//     function like(){
//         $('#like').unbind('click').click(function(){
//
//             $(this).attr('id','dislike');
//             $(this).attr('src', '/images/favoritoNo.png');
//
//             $.ajax({
//                 url: '/dislike/'+$(this).data('id'),
//                 type: 'GET',
//
//             })
//              dislike();
//         })}
//
//     like();
//
//
//
//     function dislike(){
//         $('#dislike').unbind('click').click(function(){
//
//             $(this).attr('id','like');
//             $(this).attr('src', '/images/favorito.PNG');
//             $.ajax({
//                 url: '/like/'+$(this).data('id'),
//                 type: 'GET',
//
//             })
//              like();
//         })}
//
//     dislike();
// });

