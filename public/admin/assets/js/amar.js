$("#logofile").change(function () {
    readURL(this, $("#logo"));
});

function readURL(input, img) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            img.attr("src", e.target.result).fadeIn("slow");
        };
        reader.readAsDataURL(input.files[0]);
    }
}
