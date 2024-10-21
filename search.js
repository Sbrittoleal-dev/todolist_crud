var search="ler"

document.querySelectorAll(".title").forEach(
    function (item) {
        console.log(item.textContent)
        if (item.textContent.toLowerCase().includes(search.toLowerCase())) {
            console.log("y")
        }
    }
)