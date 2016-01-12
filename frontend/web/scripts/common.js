(function(){
	var dropzone = document.getElementById('dropzone');

	var upload = function(files){
		var formData = new FormData();
		formData.append('file', files[0]);
		var request = $.ajax({
			data : formData,
	        url: 'edit/upload',
	        type: 'post',
	        dataType: 'html',
			contentType: false, 
		    processData: false,
	    });

        request.done(function( html ) {
        	$( "#dropzone" ).html('<img src="http://project/frontend/web/images/476.png">');
        });

        request.fail(function( jqXHR, textStatus ) {
        	alert( textStatus );
        });

	};

	dropzone.ondrop = function(e){
		e.preventDefault();
		var img = $("#dropzone").find("img");
		if(img.length != 1){
			this.className = 'dropzone';
			upload(e.dataTransfer.files);
	    }
	};

	dropzone.ondragover = function(){
		this.className = 'dropzone dragover';
		return false;
	};

	dropzone.ondragleave = function(){
		this.className = 'dropzone';
		return false;
	};
}());

