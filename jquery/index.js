$(document).ready(function() {
    // Make an AJAX request to the specified file destination
    $.ajax({
      type: 'POST',
      url: 'dal/dal_index.php',
      data: {
        list_data: 'list_data'
      },
      success: function(response) {
        debugger;
        if (response) {
            $("#card-container").append(response);
        } else {
          showAlert('Failed to load data.', "danger");
        }
      },
      error: function(xhr, status, error) {
        showAlert('Failed to load data: ' + error, "danger");
      }
    });
  });