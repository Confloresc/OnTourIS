document.getElementById("contrato").addEventListener("keyup", getContratoID)

function getContratoID(){

    let inputCP = document.getElementById("contrato").value
    let lista = document.getElementById("lista")

    let url = "XXX.php"
    let formData = new FormData()
    formData.append("contrato", inputCP)

    fetch(url, {
        method: "POST",
        body: formData,
        mode: "cors"
    }).then(response => response.jason())
    .then(data => {
        lista.style.display = "block"
        lista.innerrHTML = data

    })

    .catch(err => console.log(err))
}