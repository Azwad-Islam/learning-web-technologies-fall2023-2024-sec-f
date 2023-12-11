function loginvalidation(){
    let username= document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let result = document.getElementById("result").value;
     //console.log(username);
    
    if (username === ""){
        alert("enter username");
        return;

    }if(password === ""){
       //return false;
        alert("enter password");
        return;
    }else{
        function ajax() {
            
            let xhttp = new XMLHttpRequest(); 
            let user = {
                 'username':username,
                 'password': password
            }
            let data = JSON.stringify(user);  
            xhttp.open('POST', '../controller/loginCheck.php', true);
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