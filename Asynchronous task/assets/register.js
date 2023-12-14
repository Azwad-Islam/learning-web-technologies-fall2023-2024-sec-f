function register() {
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value; 
    let password = document.getElementById('password').value; 
    let confirmPassword = document.getElementById('confirmPassword').value; 

    if (!name || !phone || !email || !password || !confirmPassword) {
        alert("Please fill in all fields");
    } else if (password !== confirmPassword) {
        alert("Passwords do not match");
    } else {
        ajax(name, phone, email, password);
    }
}

function ajax(name, phone, email, password) {
    let xhttp = new XMLHttpRequest();
    
    xhttp.open('POST', '../controller/register.php', true);
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.send("name=" + name + "&phone=" + phone + "&email=" + email + "&password=" + password);
}