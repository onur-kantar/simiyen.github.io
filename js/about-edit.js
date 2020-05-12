var isEditable = document.getElementById("HTMLtoPDF").isContentEditable

function Edit() {
    isEditable = !isEditable
    document.getElementById("HTMLtoPDF").contentEditable = isEditable
    if (isEditable) {
        document.getElementById("editButton").innerHTML = "Onayla"
    } else {
        document.getElementById("editButton").innerHTML = "Düzenle"
    }
}