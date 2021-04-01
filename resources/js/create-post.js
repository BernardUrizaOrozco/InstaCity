$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $(placeToInsertImagePreview).html("");
                    $($.parseHTML('<img>')).attr('src', event.target.result).addClass('w-full rounded-md').appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });


    $('.replayTo').on('click', function() {
        $("#caption").val("@"+$(this).data("username")+" ");
        $("#comment_id").val($(this).data("comment_id"));
        console.log($(this).data("comment_id"));
    });
});