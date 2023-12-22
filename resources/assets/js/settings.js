import axios from 'axios';

// $(document).ready(function() {
// 	$.ajax({
// 		headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
// 		url: 'https://restcountries.eu/rest/v2/all',
// 		method: 'GET',
// 		success: function(data) {
// 			for (var i = 0; i < data.length; i ++) {
// 				$("#location").append('<option value="' + data[i].name + '">' + data[i].name + '</option>')
// 			}
// 		}
// 	})
// })

document.addEventListener(
	'DOMContentLoaded',
	() => {
		axios.get(
			'https://restcountries.eu/rest/v2/all',
			{
				headers: {
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				},
			}
			
		)
	}
).then(
	(res) => res.json()
).then(
	countries => {
		for (const i = 0; i<countries.length; i++) {
			const ch = document.createElement('option');
			ch.value = countries[i].name;
			ch.innerText = countries[i].name;
			document.querySelector("#location").appendChild(ch)
		}
	}
).catch(e => console.error(e))