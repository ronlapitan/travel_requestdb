jQuery(function($) {
  function toggleSelect() {
    var $val = $('#sel2').val();

    if ($('.sel2_hide').is(':visible')) {
      $('.sel2_hide').fadeOut();
    }

    if ($val == 'Yes') {
      $('#calendarHide').fadeIn();
    } 
  }
  $(document).ready(function() {
    $('.sel2_hide').hide(); // hides the two input boxes
    toggleSelect(); // automatically called on page load
    $('#sel2').on('change', toggleSelect); 
  });
});