function topUpCheck() {
    let amount = document.getElementById('amount').value;
    let pass = document.getElementById('Password').value;

    if (amount === '') {
        alert("Please enter the amount to be deposited");
    } else if (pass === '') {
        alert("Please enter your password");
    } else if (!Number.isInteger(parseInt(amount))) {
        alert("Please enter a valid amount");
    } else {
        function ajax() {
            // Create a new XMLHttpRequest object
            let xhttp = new XMLHttpRequest();

            // Define the request method, URL, and set it to be asynchronous
            xhttp.open('POST', 'TopUPCheck.php', true);

            // Set the request header
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Define the callback function to handle the response
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    // Handle the response, for example, display an alert
                    alert(this.responseText);
                }
            }

            // Correct the parameters passed in the send method
            xhttp.send('amount=' + amount + '&pass=' + pass);
        }

        // Call the ajax function to initiate the request
        ajax();

        // Display a success message
        alert("Top-up successful!");
    }
}
