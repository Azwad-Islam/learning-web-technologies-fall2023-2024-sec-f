function login() {
    let email = document.getElementById('email').value; 
    let password = document.getElementById('password').value; 
    if (!email) {
        alert("Please enter your email");
    } else if (!password) {
        alert("Please enter your password");
    } else {
        ajax(email, password); 
    }
}

function ajax(email, password) {
    let xhttp = new XMLHttpRequest();
            
    xhttp.open('POST', '../controller/LoginCheck.php', true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.send("email=" + email + "&password=" + password);
}
