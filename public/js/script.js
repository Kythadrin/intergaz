function setActiveNavItem() {
    var navItems = document.getElementsByClassName('nav-link');
    var title = document.title;
    
    for (var i = 0; i <= navItems.length; i++) {
        if (navItems[i].textContent == title) {
            navItems[i].classList.add('active');
        }
    }
}

function showAddresses($client) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("clientAddress").innerHTML = this.responseText;
    }
    xhttp.open("GET", "/addresses?client="+$client);
    xhttp.send();

    document.activeElement.blur()
}