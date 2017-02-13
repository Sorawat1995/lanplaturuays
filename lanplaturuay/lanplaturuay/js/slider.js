var rotation = 45;

// Rotate it 45 degrees to start webkit only due to laziness
$('.wrap').css('-webkit-transform', 'rotate(' + rotation + 'deg)');

// Becuase I want it to be a square. There's probably a better way
//var width = $('.wrap').css('width');
//$('.wrap').css('height', width);

// Handle the forward and backward rotation
$('#next').click(function() {
  rotation += 90;
  $('.wrap').css(
    '-webkit-transform', 'rotate(' + rotation + 'deg)'
  );
});

$('#prev').click(function() {
  rotation -= 90;
  $('.wrap').css(
    '-webkit-transform', 'rotate(' + rotation + 'deg)'
  );
});