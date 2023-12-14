function loginValidation() {
    let id = document.getElementById("id").value.trim();
    let password = document.getElementById("password").value.trim();

    if (id === "" || password === "") {
        alert("ID or password field cannot be empty");
        return;
    } else {
        function ajax() {
            // Create a new XMLHttpRequest object
            let xhttp = new XMLHttpRequest();
            let userInfo = {
                'id': id,
                'pass': password
            }
            let data = JSON.stringify(userInfo);
        
            // Log data and request details for debugging
            console.log('Sending data:', data);
            console.log('Request URL:', '../controller/loginCheck.php');
        
            // asynchronous
            xhttp.open('POST', '../controller/loginCheck.php', true);
            // Set the request header
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function () {
                console.log('Ready state:', this.readyState);
                console.log('HTTP status:', this.status);
        
                if (this.readyState == 4 && this.status == 200) {
                    console.log('Response:', this.responseText);
                    let response = JSON.parse(this.responseText);
        
                    if (response.success) {
                        alert("Login successful!");
                        window.location.href = response.redirect; // Redirect to the specified URL
                    } else {
                        console.log(response.debug); // Log the debug information
                        alert("Login failed. Please check your credentials.");
                    }
                }
            }
        
            xhttp.send('data=' + encodeURIComponent(data));
        }

        ajax();
    }
}
