$(document).ready(function () {
    $('#example').DataTable();
});

$(document).ready(function () {
    $('#service-table').DataTable();
});

$(document).ready(function () {
    $('#files-table').DataTable();
});

$(document).ready(function () {
    $('#service-type').DataTable();
});

$(document).ready(function () {
    $('.jqdata-table').DataTable();
});

function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var imagePreview = document.getElementById('imagePreview');
        var image = document.createElement('img');
        image.src = reader.result;
        image.style.maxWidth = '200px';
        image.style.maxHeight = '200px';
        imagePreview.innerHTML = '';
        imagePreview.appendChild(image);
    };
    reader.readAsDataURL(input.files[0]);
}

function blogpreviewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var imagePreview = document.getElementById('blogpreviewImage');
        var image = document.createElement('img');
        image.src = reader.result;
        image.style.maxWidth = '200px';
        image.style.maxHeight = '200px';
        imagePreview.innerHTML = '';
        imagePreview.appendChild(image);
    };
    reader.readAsDataURL(input.files[0]);
}

function featuredImagePreview(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var imagePreview = document.getElementById('featuredImagePreview');
        var image = document.createElement('img');
        image.src = reader.result;
        image.style.maxWidth = '200px';
        image.style.maxHeight = '200px';
        imagePreview.innerHTML = '';
        imagePreview.appendChild(image);
    };
    reader.readAsDataURL(input.files[0]);
}

function partnerpreviewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function () {
        var imagePreview = document.getElementById('partnerpreviewImage');
        var image = document.createElement('img');
        image.src = reader.result;
        image.style.maxWidth = '200px';
        image.style.maxHeight = '200px';
        imagePreview.innerHTML = '';
        imagePreview.appendChild(image);
    };
    reader.readAsDataURL(input.files[0]);
}

$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
        var files = e.target.files,
            filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                "<br/><span class=\"remove\">Remove image</span>" +
                "</span>").insertAfter("#files");
            $(".remove").click(function(){
                $(this).parent(".pip").remove();
            });
            
            // Old code here
            /*$("<img></img>", {
                class: "imageThumb",
                src: e.target.result,
                title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/
            
            });
            fileReader.readAsDataURL(f);
        }
        console.log(files);
        });
    } else {
        alert("Your browser doesn't support to File API")
    }
});