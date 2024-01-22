function checkTextareaIsEmpty(event) {
    if ((document.getElementById("form-description").value = "")) {
        event.preventDefault();
        alert("Bình luận đang trống!");
    }
}
