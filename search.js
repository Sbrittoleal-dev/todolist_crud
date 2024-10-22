function buscar (event) {
    var search=event.target.value

    document.querySelectorAll(".title").forEach(
        function (item) {
            if (item.textContent.toLowerCase().includes(search.toLowerCase())) {
                item.parentElement.style.display = "block"
            } else {
                item.parentElement.style.display = "none"
            }
        }
    )
}

document.getElementById ("searchbar").addEventListener('input', buscar)