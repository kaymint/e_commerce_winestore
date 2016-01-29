/**
 * Created by StreetHustling on 1/27/16.
 */

/**
 * This function sends a JSON request to a given url and
 * convert the response into a JSON Object
 * @param u: the url to the page to send the JSON response
 */
function sendRequest(u){
    // Send request to server
    //u a url as a string
    //async is type of request
    var obj=$.ajax({url:u,async:false});
    //Convert the JSON string to object

    var result=$.parseJSON(obj.responseText);

    return result;	//return object
}


function validateUser(user, pass){

    var theUrl="http://localhost/e_commerce/controller/admin_controller.php?cmd=2&user="+
        user+"&pass="+pass;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===0) {					//check result
       alert('Invalid User');
    }else{
        localStorage.setItem("admin", "admin");

        alert(localStorage.getItem("admin"));
        window.location.href = "http://localhost/e_commerce/view/wine_view.php";
    }
}


$("#adminLogin").click(function(){
    var username = $("#inputUsername").val();
    var password = $("#inputPassword").val();
    validateUser(username, password);
});