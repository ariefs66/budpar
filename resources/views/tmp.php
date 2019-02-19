function getUrlParam(name) {
		var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
		return (results && results[1]) || undefined;
	}

	tamu = "<?php if(isset($_REQUEST['guest']))echo $_REQUEST['guest']; ?>";
	kamar = "<?php if(isset($_REQUEST['room']))echo $_REQUEST['room']; ?>";
	hotel = "<?php if(isset($_REQUEST['hotel']))echo $_REQUEST['hotel']; ?>";
	night = "<?php if(isset($_REQUEST['night']))echo $_REQUEST['night']; ?>";
	price = "<?php if(isset($_REQUEST['price']))echo $_REQUEST['price']; ?>";

	var start = getUrlParam('start');
	var end = getUrlParam('end');
	console.log(start+"-"+end)
	if (start != "" && end != "") {
		startDate = start
		endDate = end
	} else {
		startDate = moment().format('YYYY-MM-DD');
		endDate = moment().startOf('day').add(1, 'days').format('YYYY-MM-DD');
	}
