// Custom alert
function showAlert(message, type) {
    const alertBox = document.getElementById('alert-box');
    alertBox.innerHTML = message;
    alertBox.className = `w3-${type} w3-center w3-padding w3-round`;
    alertBox.classList.remove('w3-hide');
    setTimeout(() => {
        alertBox.classList.add('w3-hide');
    }, 3500); // hide the notification after 3 seconds
}
$(document).ready(function() {
    $(document).ajaxStart(function() {
    // console.log('AJAX start triggered');
    $('#overlay').fadeIn();
    }).ajaxStop(function() {
        // console.log('AJAX stop triggered');
        $('#overlay').fadeOut();
    });
});
