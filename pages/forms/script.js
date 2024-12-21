document.getElementById('imageInput').addEventListener('change', function () {
    var files = this.files;
    var previewContainer = document.getElementById('imagePreviewContainer');
    previewContainer.innerHTML = ''; // Clear previous previews

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function (event) {
            var previewElement;

            if (file.type.includes('image')) {
                // For image files, create an <img> element
                previewElement = document.createElement('img');
            } else if (file.type.includes('pdf')) {
                // For PDF files, create an <embed> element
                previewElement = document.createElement('embed');
                previewElement.setAttribute('type', 'application/pdf');
            } else {
                // For other file types, display a message
                previewElement = document.createElement('p');
                previewElement.textContent = 'File type not supported';
            }

            previewElement.setAttribute('src', event.target.result);
            previewElement.setAttribute('class', 'img-thumbnail m-1');

            // Create a container for the preview element
            var thumbnailContainer = document.createElement('div');
            thumbnailContainer.setAttribute('class', 'thumbnail-container');
            thumbnailContainer.appendChild(previewElement);

            // Append the container to the preview container
            previewContainer.appendChild(thumbnailContainer);
        };

        reader.readAsDataURL(file);
    }
});
