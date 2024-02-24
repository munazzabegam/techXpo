const formControls = document.querySelectorAll('.form-control');
var editBtn = document.getElementById('editBtn');
var saveBtn = document.getElementById('saveBtn');

for (let i = 0; i < formControls.length; i++) {
    formControls[i].disabled = true;
}


function enableEditing(){
    for (let i = 0; i < formControls.length; i++) {
        formControls[i].disabled = false;
    }
    saveBtn.style.display="block";
    editBtn.style.display="none";
    
}