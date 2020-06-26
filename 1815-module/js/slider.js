

$(document).ready(function() {

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
	var accordion = $('.panel-heading a');
	accordion.on('click', function() {
		if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      accordion.removeClass('active');
      $(this).addClass('active');
    };
	});
  
  $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
});