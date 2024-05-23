function previewImages(event) {
    const files = event.target.files;
    const previewList = document.getElementById("preview-list");
    previewList.innerHTML = "";

    for (const file of files) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const listItem = document.createElement("li");
            const img = document.createElement("img");
            img.src = e.target.result;
            img.style.maxWidth = "100px";
            img.style.maxHeight = "100px";
            listItem.appendChild(img);
            previewList.appendChild(listItem);
        };
        reader.readAsDataURL(file);
    }
}
