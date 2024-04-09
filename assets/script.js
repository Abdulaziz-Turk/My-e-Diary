$(document).ready(function () {
  $(".write-diary").click(function () {
    window.location.href = "http://localhost/my-e-diary/write-diary.php";
  });

  $(".read-diary").click(function () {
    window.location.href = "http://localhost/my-e-diary/read-diary.php";
  });

  $(".view-all").click(function () {
    var diaryID = $(this).data("diary-id");
    $.ajax({
      type: "GET",
      url: "get_full_content.php",
      data: { diaryID: diaryID },
      success: function (response) {
        $("#modalBody" + diaryID).html(response);
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
      },
    });
  });
});

function deleteDiary(id) {
  if (confirm("Do you want to delete this diary?")) {
    window.location = "./endpoint/delete-diary.php?diary=" + id;
  }
}
