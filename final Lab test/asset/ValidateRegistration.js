function Registrationvalidation() {
    let name = document.getElementById("name").value;
    let ContactNum = document.getElementById("ContactNum").value;
    let username = document.getElementById("UserName").value;
    let password = document.getElementById("pass").value;

    if (!name) {
        alert("Please enter your Name");
        return;
    }if (ContactNum=="") {
        alert("Please enter your Contact Number");
        return;
    }if (!username) {
        alert("Please enter your Username");
        return;
    }if (!password) {
        alert("Please enter your Password");
        return;
    }else {
        register(name, ContactNum , username, password);
    }
}

function register(name, ContactNum , username, password) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/registrationCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        ContactNum: ContactNum,
        username: username,
        password: pass,
    };
    let sendData = JSON.stringify(data);
    console.log(sendData);
    xhttp.send("data=" + sendData);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
            }
            if (response.error) {
            alert("error");
            }
        }
    };
}