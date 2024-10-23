$(document).ready(function () {
  $("#file").change(function () {
    if (this.files.length > 0) {
      $("#upload-button").prop("disabled", false).css("opacity", 1);
    } else {
      $("#upload-button").prop("disabled", true).css("opacity", 0.5);
    }
  });

  $("#upload-form").submit(function (e) {
    e.preventDefault(); // Prevent default form submission

    var formData = new FormData(this); // Get form data with files

    $.ajax({
      type: "POST",
      url: "upload_ajax.php", // Target file for upload
      data: formData,
      cache: false,
      contentType: false, // Do not set content type
      processData: false, // Do not process data
      success: function (response) {
        $("#status").html(response); // Show upload status
      },
      error: function () {
        $("#status").html("Terjadi kesalahan saat mengunggah file.");
      },
    });
  });
});
