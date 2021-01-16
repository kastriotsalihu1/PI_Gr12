$("#mask").css({
    "background-color": "var(--primarycolor)",
    "z-index": "99",
    "position": "absolute",
    "top": "0px",
    "width": "100%",
    "height": "100%",
});

const currentPage = $(location).attr('pathname').split("/")[2];
console.log(currentPage);
$(window).on('load', function () {
    console.log("window loaded")
     $("#mask").fadeOut(600, "linear");
    console.log(currentPage, $(`a[href="${currentPage}"]`).children("i").attr("id"), "loaded");

    // wait a certain time until the elements are trully, fully loaded
    setTimeout(() =>  {$(`a[href="${currentPage}"]`).children("i").addClass("activePage"); console.log("added")} , 300);

    // keep track of what page is open using the navbar (sidebar)
    $(".nav-icons a").on("click", function (event) {
        let destination = $(this).attr("href");
        console.log(destination, currentPage, "clicked");
        if (destination === currentPage) {
            console.log("prevented", $(".activePage"));
            event.preventDefault();
        }
    });
    $("#notification").on("click", function () {
        notificationCount--;
        $("#notification").attr("data-badge", notificationCount);
    });

    
});

