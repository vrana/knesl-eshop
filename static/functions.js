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
