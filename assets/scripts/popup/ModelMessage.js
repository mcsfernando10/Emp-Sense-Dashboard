//type = 1 : Success
//type = 2 : Warning
//type = 3 : Error
//type = 4 : Confirm
function showModalMessage(Title, Message, type, callback) {
	if(type == 1) {
		bootbox.dialog({
			message: '<img src="/knowyourdoctor/img/success_icon.png" width="48px" height="48px" style="margin-right: 10px"/>' +
			Message,
			buttons: {
				ok: {
					label: "OK",
					className: "btn-info",
					callback: function (result) {
						result = true;
						callback&&callback(result);
					}
				}
			}
		});
	}
	else if(type == 2) {
		bootbox.dialog({
			message: '<img src="/knowyourdoctor/img/warning_icon.png" width="48px" height="48px" style="margin-right: 7px"/>' +
			Message,
			buttons: {
				ok: {
					label: "OK",
					className: "btn-info",
					callback: function (result) {
						result = true;
						callback&&callback(result);
					}
				}
			}
		});
	}
	else if(type == 3) {
		bootbox.dialog({
			message: Message,
			title: '<img src="/knowyourdoctor/img/error_icon.png" width="48px" height="48px" style="margin-right: 7px"/>' +
			Title,
			buttons: {
				ok: {
					label: "OK",
					className: "btn-info",
					callback: function (result) {
						result = true;
						callback&&callback(result);
					}
				}
			}
		});
	}
	else if(type == 4) {
		bootbox.dialog({
			message: Message,
			title: '<img src="/knowyourdoctor/img/question_mark_icon.png" width="30px" height="30px" />' + Title,
			buttons: {
				yes: {
					label: "Yes",
					className: "btn-info",
					callback: function (result) {
						result = true;
						callback&&callback(result);
					}
				},
				no: {
					label: "No",
					className: "btn-default",
					callback: function (result) {
						result = false;
						callback&&callback(result);
					}
				}

			}
		});
	}
}

function showEmployeeChurn(title,message){
	bootbox.dialog({
            title:title,
            message:message,            
            buttons: {
                OK: {
                    
                }
            }
        }
	);
	
}