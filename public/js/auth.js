document.getElementById('adminsection').style.display="none";
function auth(){
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pass').value;
    if(user=="admin"&&pass=="admin@tales"){
    //var root = window.location.protocol + '//' + window.location.host;

    //var GET_USERS_URL = root + '/AdminPage';
    //window.location.href = GET_USERS_URL;
    document.getElementById('adminsection').style.display="block";
    document.getElementById('adminloginsection').style.display="none";
    }
    else{
    alert('Wrong entry!!');
    }

}