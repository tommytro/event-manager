
var check = 0;

if(check == 1){
    alert("check"); 
    localStorage.removeItem("eventname");
    localStorage.removeItem("eventdate");
    localStorage.removeItem("eventdesc");
}else if(check == 0){
    
    window.onbeforeunload = function() {
        localStorage.setItem("eventname", $('#eventname').val());
        localStorage.setItem("eventdesc", $('#desc').val());   
        localStorage.setItem("eventdate", $('#eventdate').val());
    }
}

window.onload = function() {
    
    var name = localStorage.getItem("eventname");
    if (name !== null) $('#eventname').val(name);

    var date = localStorage.getItem("eventdate");
    if (date !== null) $('#eventdate').val(date);

    var desc = localStorage.getItem("eventdesc");
    if (desc !== null) $('#desc').val(desc);
}

function clicker(){
    check = 1; 
    alert("here");
};   
    
