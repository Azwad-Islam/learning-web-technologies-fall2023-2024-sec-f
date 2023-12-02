function ajax() {
    let username = document.getElementById('username').value;
    if (username) {
        let xhttp = new XMLHttpRequest();

        xhttp.open('GET', '../controller/adminCheck.php?uname=' + username, true);
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                let responseArray = this.responseText.split("+");

                let name = responseArray[0];
                let contactNumber = responseArray[1];
                let username = responseArray[2];
                let password = responseArray[3];

                document.getElementById('search').innerHTML = 'Name: ' + name + ',  username: ' + username ', pass: '+ password ;
            }
        }
        xhttp.send();
    } else {
        alert("need to enter a user name for search");
    }
}