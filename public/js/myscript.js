$(document).ready(function(){
    $(".hamburger .hamburger__inner").click(function(){
        $(".wrapper").toggleClass("active")
    })

    $(".top_navbar .toggleProfile").click(function(){
        $(".profile_dd").toggleClass("active");
    });

    $('#dtHorizontalExample').DataTable({"scrollX": true});
    $('.dataTables_length').addClass('bs-select');
})


