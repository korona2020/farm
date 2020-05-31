$(document).ready(function(){
    $(".hamburger .hamburger__inner").click(function(){
        $(".wrapper").toggleClass("active")
    })

    $(".top_navbar .toggleProfile").click(function(){
        $(".profile_dd").toggleClass("active");
    });

    $('ul li a' ).click(function(){
       console.log('yes');
    });
})


