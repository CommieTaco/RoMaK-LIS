$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('no-margin');
        $('#navbar').toggleClass('no-margin');
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    
});

