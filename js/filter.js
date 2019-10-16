var input0 = document.getElementById('value0');
var input1 = document.getElementById('value1');
var inputs = [input0, input1];

var range = document.getElementById('range');

noUiSlider.create(range, {
	range: {
		min: 250000,
		max: 1000000
	},

	step: 150,

	// Handles start at ...
	start: [250000, 1000000],

	// ... must be at least 300 apart
	margin: 300,

	// Display colored bars between handles
	connect: true,

	// Put '0' at the bottom of the slider
	direction: 'ltr',
	orientation: 'horizontal',

	// Move handle on tap, bars are draggable
	behaviour: 'tap-drag',
	tooltips: true,
	format: wNumb({
		decimals: 0
	})

	// Show a scale with the slider
	// pips: {
	// 	mode: 'steps',
	// 	stepped: true,
	// 	density: 4
	// }
});

range.noUiSlider.on('update', function(values, handle) {
	inputs[handle].value = values[handle];
});
