function ajax() {
    let username = document.getElementById('username').value;
    if (username) {
        let xhttp = new XMLHttpRequest();

       // xhttp.open('GET', '../controller/adminCheck.php?uname=' + username, true);
        xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
                let responseArray = this.responseText.split("+");

                let staffName = responseArray[0];
                let staffNumber = responseArray[1];
                let userName = responseArray[2];

                document.getElementById('search').innerHTML = 'Name: ' + name + ',  username: ' + userName ;
            }
        }
        xhttp.send();
    } else {
        alert("need to enter a user name for search");
    }
}