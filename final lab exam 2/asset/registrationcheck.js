function registrationvalidation(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let conpass = document.getElementById("conpass").value;
    let buyer = document.getElementById("radio1").value;
    let seller = document.getElementById("radio2").value;
    let usertype;
    if (username === ""){
        alert("enter username");
        return;

    }else if(password === ""){
       //return false;
        alert("enter password");
        return;
    }else if(conpass===""){
        alert("enter confirm pass");
        return;
    }else if(password!=conpass){
        alert("password doesnt match");
    }else if(buyer===""){
        usertype==="seller";
    }else if(seller===""){
        usertype==="buyer";
    }
    else{
        function ajax() {
            
            let xhttp = new XMLHttpRequest(); 
            let user = {
                 'username':username,
                 'password': password,
                 'usertype':usertype
            }
            let data = JSON.stringify(user);  
            xhttp.open('POST', '../controller/registrationCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('result').innerHTML=this.responseText;
                }
            }

            
            xhttp.send('user='+data);
        }
        ajax();
        return true;
    }
}
