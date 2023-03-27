document.getElementById('newGuests').style.display="none";
function auth(){
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pass').value;
 
    if(user=="user"&&pass=="user47"){
        document.getElementById('newGuests').style.display="block";
        document.getElementById('adminloginsection').style.display="none";
    }
    else{
        document.getElementById('wrong').style.display="block";
    }

}