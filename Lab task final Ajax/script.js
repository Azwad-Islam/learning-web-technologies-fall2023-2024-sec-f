
function ajax(){
    var EmpName = document.getElementById("EmpName").value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'search.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('show').innerHTML = this.responseText
        }
    }

    xhttp.send('EmpName='+EmpName);
}