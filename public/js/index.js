function showAddresses(client) {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        document.getElementById("clientAddress").innerHTML = this.responseText;
    }
    
    xhttp.open("GET", "/addresses?client=" + client);
    xhttp.send();

    document.activeElement.blur()
}