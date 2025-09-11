function doChangeView(clicked_id) {
    const section = clicked_id;

    var myElement = document.querySelector('[section=' + section + ']');
    var myFlag = document.querySelector('[indicator=' + section + ']');

    myElement.classList.toggle("show-grids");
    myFlag.classList.toggle("fa-ellipsis-h");
}