function getDnsEntries() {
	$.ajax({
		url: 'php/getDns.php',
		type: "GET",
		success: function(response, textStatus, xhr) {
			var result = eval(response);
			console.log(result);
			$("#apiBody").val(JSON.stringify(result));
			prettyPrint("apiBody");
		}
	});
}

function updateDnsEntries() {
	var updatedApiJson = $("#updatedApiBody").val();
	
	$.ajax({
		url: 'php/putDns.php',
		type: "POST",
		data: {
			"data": updatedApiJson
		},
		success: function(response, textStatus, xhr) {
			var result = eval(response);
			if(result === true) {
				alert("DNS Updated");
			}
			console.log("DNS Updated = " + result);
		}
	});
}

function filterDnsEntries() {
	var filterCount = 0;
	var filter = $("#filterText").val();
	var apiBody = $("#apiBody").val();
	
	if(apiBody !== "") {
		var updatedApiJson = JSON.stringify(JSON.parse(apiBody.trim()));
		
		if(filter !== "") {
			var apiJson = JSON.parse(apiBody);
			
			if(apiJson != null && apiJson.length) {
				tempJson = apiJson.filter(function(entry, index, arr) {
					if(!entry.name.includes(filter)) {
						return entry;
					}
				});
				
				updatedApiJson = JSON.stringify(tempJson);
				filterCount = apiJson.length - tempJson.length;
				//console.log("Updated = " + JSON.stringify(updatedApiJson));
			}
		}
		
		if($("#filterCountText").length) {
			$("#filterCountText").html('Filtered ' + filterCount + ' entries');
		} else {
			$("#filterText").parent().addClass("has-success");
			$("#filterText").parent().append('<p id="filterCountText" class="help-block">Filtered ' + filterCount + ' entries</p>');
		}
		
		$("#updatedApiBody").val(updatedApiJson);
		prettyPrint("updatedApiBody");
		console.log("Filtered = " + filterCount);
	}
}

function prettyPrint(divId) {
	var ugly = document.getElementById(divId).value;
	var obj = JSON.parse(ugly);
	var pretty = JSON.stringify(obj, undefined, 4);
	document.getElementById(divId).value = pretty;
}