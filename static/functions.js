function ajax(url, callback, data) {
	var request = new XMLHttpRequest();
	request.onreadystatechange = function () {
		if (request.readyState == 4) {
			callback(request.responseText);
		}
	};
	request.open(data ? 'POST' : 'GET', url);
	request.send(data || '');
}

function paymentChange(select) {
	select.parentNode.parentNode.parentNode.className = (/^card-/.test(select.value) ? '' : 'not-card');
}

function buySubmit(url, form) {
	form.button.value = 'Saving';
	ajax(url, function (text) {
		form.button.value = 'Buy';
		alert(text);
	}, new FormData(form));
	return true;
}

function loadOrdered(url) {
	var load = function () {
		setTimeout(function () {
			ajax(url, function (json) {
				var ordered = eval('(' + json + ')');
				for (var id in ordered) {
					document.getElementById('ordered-' + id).innerHTML = ordered[id];
				}
				load();
			});
		}, 10000);
	};
	load();
}
