// Set global variable for # of additional guests starting at 1
var i = 1;

$(document).ready(function() {

  // Prevent form submission on 'enter' press
  $(window).keydown(function(event) {
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });


  // Hide rsvp form selections until Guest name is provided
  $('#regular-form, #and-form, #family-form').hide();


  // Auto complete guests
  $('#auto-guests').typeahead({
    source: guestNames,
    minLength: 3,
    updater: function(item) {
      $('input[name="guest"]').attr('value', item);
      $('input[name="guest-value"]').val(item);
      $('#proceed1').addClass('reveal');
      $('.guester').text(item);
      return item;
    }
  }).blur(validateSelection);


  // Reveal continuation of form upon click
  $("#proceed1").click(function() {
    $('#screen1').fadeOut(500);
    $('#screen2').fadeIn(1500);
    $(".entry").removeClass('hide');

    // Check contents of guest-name
    var $guestName = $('input[name="guest-value"]').val();
    if($guestName.indexOf('&') > -1) {
      // If the guest name holds '&' show and-form
      $('#and-form').show();
    } else if ($guestName.indexOf('Family') > -1) {
      // If guest name containts 'family' show family-form
      $('#family-form').show();
      $('#invitation-text').text('Family members attending are as follows ...');
    } else {
      // If guest name is singular show form 1
      $('#regular-form').show();
    }
  });


  // Directions
  $("#need-directions").click(function (){
    $("#screen1").hide();
    $('html, body').animate({
      scrollTop: $("#screen4").offset().top
    }, 2000);
  });


  // Full Page functionality
  $('#fullpage').fullpage();


  // Select boxes
  $('.selectpicker').selectpicker({
    style: 'btn-select',
    size: 4
  });


  // Adding Multiple Guests
  $("#add_guest").click(function() {
    $("<div />", { "class":"row", id:"guester"+i })
       .append($('<div class="col-xs-6 col-md-6"><input class="btn-select" placeholder="Guest name" id="guest_' + i + '" name="guest_' + i + '"/></div>'))
       .append($('<div class="col-xs-6 col-md-5"><select class="selectpicker" title="Select a meal for this guest..." id="meal_' + i + '" name="meal_' + i + '" /></select></div>'))
       .append($('<div class="col-xs-1 col-md-1"><a onclick="removeGuest(this);" class="btn green" id="remove_guest' + i + '" style="margin-top: 0;">✕</a></div>'))
       .appendTo("#guests");

    $('#meal_' + i).html('<option>Cedar Plank Salmon</option><option>Beef Tenderloin Tips</option>');
    $('#meal_' + i).selectpicker({
      style: 'btn-select',
      size: 4
    });
    i++;
  });

});


// Remove Additional Guest from guest List
function removeGuest(e) {
  var root = guestList = e.parentNode.parentNode.parentNode;
  var parent = e.parentNode.parentNode;
  root.removeChild(parent);
  i--;
}


// Validate typeahead autocomplete to allow only list values
function validateSelection() {
  if ($.inArray($(this).val(), guestNames) === -1) {
    // alert('Error : The Guest name you provided was not found in registry! Try again.');
    // $('#helping-text').addClass('text-danger').text('The name you provided was not found in our guest list. Please try again.')
  } else {
    $('#helping-text').removeClass('text-danger').text('Guest name found. Please Proceed.')
  }
}
