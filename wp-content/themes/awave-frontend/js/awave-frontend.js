/* SLIDERS - Source: http://seiyria.com/bootstrap-slider/ */

/* Function for adding a space every third nr */
function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

/* Setting default values */
var extrasum = 695;
var mathMoney = 5000;
var mathPeriod = 1;

/* Lånesumma slider */
$("#sliderSum").slider();
$("#sliderSum").on("slide", function(slideEvt) {
	$("#sliderSumSliderVal").text(slideEvt.value);

	/* Getting and setting slider values */
	var mathMoney = $('#sliderSum').slider('getValue');
	var mathPeriod = $('#sliderPeriod').slider('getValue');

	/* Calculate and add added cost */
	var extrasum = Math.floor(mathMoney / 7.19);
	$("#sumextra").text(numberWithSpaces(extrasum));

	/* Total payback */
	$("#sumkostnad").text(numberWithSpaces(slideEvt.value + extrasum));

	/* Calculate invoices */
	var mathTotal = mathMoney + extrasum;
	var mathVal = Math.floor( mathTotal / mathPeriod )
	$("#sumdel").text(numberWithSpaces(mathVal));

});

/* Låneperiod slider */
var realValues = ["", "30 dagar", "1 år", "2 år", "3 år", "4 år"];
$('#sliderPeriod').slider({
	max: 5,
	min: 1,
	step: 1,
	formatter: function(val) {
	  return realValues[val];
	}
})
.on('change', function(data){
	$("#sliderPeriodSliderVal").text(realValues[data.value.newValue]);
	$("#sumper").text(data.value.newValue);

	/* Getting and setting slider values */
	var mathMoney = $('#sliderSum').slider('getValue');
	var mathPeriod = $('#sliderPeriod').slider('getValue');

	/* Calculate and add added cost */
	var extrasum = Math.floor(mathMoney / 7.19);

	/* Calculate invoices */
	var mathTotal = mathMoney + extrasum;
	var mathVal = Math.floor( mathTotal / mathPeriod )
	$("#sumdel").text(numberWithSpaces(mathVal));

	/* Adjust "Faktura"-grammar */
	if (mathPeriod == 1) {
		$("#sumfak").text("faktura");
	} else {
		$("#sumfak").text("fakturor");
	}

});

/* Smooth scroll for anchor buttons */
$(document).on('click', 'a', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});