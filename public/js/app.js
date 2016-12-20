Dropzone.options.addImages = {
	maxFilesize: 2, //MB
	acceptedFiles: 'image/*', // Any image types only
	success: function(file, response) {
		if (file.status == 'success') {
			handleDropzoneFileUpload.handleSuccess(response);
		} else {
			handleDropzoneFileUpload.handleError(response);
		}
	}
};

var handleDropzoneFileUpload = {
	handleError: function(response) {
		console.log(response);
	},
	handleSuccess: function(response) {
		var imageList = $('#gallery-images ul');
		var imageSrc = baseUrl + '/gallery/images/thumbs/' + response.file_name;
		$(imageList).append('<li><a href="' + imageSrc + '"><img src="' + imageSrc + '"></a></li>');
	} 
};


$(document).ready(function() {
	console.log('Document is ready!!');
});