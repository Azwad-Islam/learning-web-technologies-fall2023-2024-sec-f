//name validation
function CheckString(n1) {
    for (let i = 0; i < n1.length; i++) {
        if (!((n1.charCodeAt(i) >= 65 && n1.charCodeAt(i) <= 90) || (n1.charCodeAt(i) >= 97 && n1.charCodeAt(i) <= 122) || n1[i] == '.' || n1[i] == '-' || n1[i] == ' ')) {
            return false;
        }
    }
    return true;
}
function CheckFirstChar(n1) {
    if(!(n1.charCodeAt(0) >= 65 && n1.charCodeAt(0) <= 90) && !(n1.charCodeAt(0) >= 97 && n1.charCodeAt(0) <= 122)){
        return false;
    }

    return true;
}

function NameValidation() {
    let name = document.getElementById("name").value.trim();

    if (name == "") {
        alert("Name field cannot be empty");
        return;
    } else if (name.split(' ').length < 2) {
        alert("Name must contain at least two words");
        return;
    } else if (!CheckString(name)) {
        alert("Name can only contain a-z, A-Z, dot(.), dash(-), or space");
        return;
    } else if(!CheckFirstChar(name)){
        alert("Must start with a letter");

    } else {
        alert("Name submission was successful");
    }
    
}
//mail validation
function CheckMailString(m1) {
    if(!(m1.includes("@") && m1.includes(".com"))){
        return true;
    }
        
    return false;
}


function checkMail() {
    let mail = document.getElementById('mail').value.trim();

    if (!mail) {
        alert("Email cannot be empty");
    } else if (CheckMailString(mail)) {
        alert("Invalid email address");
    } else {
        alert("Email input Successful");
    }
}

// gender validation
function GenderValidation() {
    let male = document.getElementById("male");
    let female = document.getElementById("female");
    let other = document.getElementById("other");

    if (!male.checked && !female.checked && !other.checked) {
        alert("At least one of the gender has to be selected");
        return;
    }
    else {alert("Gender input successful");}
}

//DOB
function DoBValidation() {
    let d = document.getElementById("day").value;
    let m = document.getElementById("month").value;
    let y = document.getElementById("year").value;
    
    if (!d||!m||!y) {
        alert("No input field can be empty");
        return;
    } else if(!(d>=1 && d<= 31)){
        alert("day not valid");
    }else if(!(m>=1 && m<=12))
    {
        alert("month not valid");
    }else if(!(y>=1900 && y<=2016))
    {
        alert("Year not valid");
    }else 
    {
        alert("DoB input successful");
    }
}

//bloodgroup
function BgValidation() {
    let BloodGroup = document.getElementById("BloodGroup");

    if (BloodGroup.value === "") {
        alert("Blood Group Must be selected");
        return;
    }
    else{alert("Bloodgroup input successful");}
}

//Degree
function DegreeValidation() {
    let SscCheck = document.getElementById("ssc");
    let HscCheck = document.getElementById("hsc");
    let bscCheckbox = document.getElementById("bsc");
    let MscCheckbox = document.getElementById("msc");

    if (!SscCheck.checked && !HscCheck.checked && !bscCheckbox.checked && !MscCheckbox.checked) {
        alert("At least one of the degree has to be selected");
        return;
    }
    else{alert("Degree input successful");}
}

//photo

function ProPicValidation() {
    
    let ProPic = document.getElementById("ProPic").value;

    if (ProPic === "") {
        alert("Picture cannot be empty");
        return;
    }else{
        alert("Picture input input successful");
}
}

function assignmentValidation() {
    NameValidation();
    checkMail();
    GenderValidation();
    DoBValidation();
    BgValidation();
    DegreeValidation() 
    ProPicValidation();

}
