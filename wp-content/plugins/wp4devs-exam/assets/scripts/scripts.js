jQuery(document).ready(function($) {
  $('.like-button').on('click', function(e){
      e.preventDefault() ;

      let toon_id = jQuery(this).attr('id') ;

      // AJAX Magic
      jQuery.ajax({
          type: 'post',
          dataType: 'json',
          url: wp4dev_ajax_object.ajax_url,
          data: {
              action:'wp4dev_upvote_toon', // PHP function
              post_id: toon_id // we need to make this dynamic
          },
          success: function(msg){
              //console.log(msg) ;
          }
      });

      // Update like counter without page refresh and prevent further voting
      let currentCount = parseInt( $('#like-counter').text() ) ;
      
      if (isNaN(currentCount) === false) {
        $('#like-counter').text(++currentCount) ;
        $('.like-button').text('You voted for this toon!') ;
        $('.like-button').attr('href', '') ;
        $('.like-button').attr('href', 'javascript:void(0)');
        $('.like-button').off('click');
      }      

  });
});