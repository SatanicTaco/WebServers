function validate(){
    var first = document.getElementById('first').value;
    var last = document.getElementById('last').value;
    var cut = document.getElementById('cut').value;
    var doneness = document.getElementById('doneness').value;
    string = document.getElementById('cut').value;
    string = document.getElementById('doneness').value;

    if(first=="" || last=="" || cut=="" || doneness==""){
        alert('Please fill in all fields');
        return false;
    }
    
    else{
        return true
    }
}