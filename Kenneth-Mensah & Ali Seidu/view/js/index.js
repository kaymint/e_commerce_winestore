/**
 * Created by StreetHustling on 1/21/16.
 */
$(document).ready(function(){
    showCategories();
    showWines();
});

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


$('#sidebar').affix({
    offset: {
        top: 100
    }

});


function addWine(){

    var name = $('#inputWineName').val();
    var year = $('#inputWineYear').val();
    var desc = $('#wineDesc').val();

    var winery = $('#wineryName option:selected').val();

    alert(winery);
    var type = $('#wineType option:selected').val();
    var image = desc;


    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=11&name=" +name+
        "&type="+type+"&year="+year+"&winery="+winery+"&desc="+desc+"&image="+image;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        alert("Added Succesfully");
    }
    else{
        alert("Could not Add");
    }
}

$("#adminLogin").click(function(){
    addWine();
});



function getWineries(){

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=9";
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayWineries(obj);
    }
    else{
        return false;
    }
}

function displayWineries(obj){
    var winery = '';
    for(var index in obj.winery){
        winery += '<option value="'+obj.winery[index].winery_id+'">'+
            obj.winery[index].winery_name+'</option>';
    }

    $("#wineryName").append(winery);
}


function getWineTypes(){

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=3";
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayWineTypes(obj);
    }
    else{
        return false;
    }
}

function displayWineTypes(obj){
    var winery = '';
    for(var index in obj.wine_types){
        winery += '<option value="'+obj.wine_types[index].winery_type_id+'">'+
            obj.wine_types[index].wine_type+'</option>';
    }

    $("#wineType").append(winery);
}



function getGrapeVariety(){

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=10";
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayGrapeVariety(obj);
    }
    else{
        return false;
    }
}

function displayGrapeVariety(obj){
    var winery = '';
    for(var index in obj.variety){
        winery += '<option value="'+obj.variety[index].variety_id+'">'+
            obj.variety[index].variety+'</option>';
    }

    $("#wineVariety").append(winery);
}


function getVariety(id){

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=8&id="+id;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        var variety = '<p>';
        for(var index in obj.wines){
            variety += obj.wines[index].variety

            if(index !== (obj.wines.length - 1)){
                variety += ',';
            }
        }
        variety += '</p>';
        $("#modal-wine-variety").html(variety);
    }
    else{
        return false;
    }
}

function viewWineDetails(id){

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=7&id="+id;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayWinesDetails(obj);
    }
    else{
        return false;
    }
}

function displayWinesDetails(obj){
    $(".modal-title").text(obj.wines[0].wine_name);

    var src = [];
    src[0] = "img/edited/sparkling2.jpg";
    src[1] = "img/edited/red.jpg";
    src[2] = "img/edited/fortified1.jpg";
    src[3] = "img/edited/white.jpg";
    src[4] = "img/edited/sweet.jpg";


    if(obj.wines[0].wine_type === "Sparkling"){
        $(".modal-body img").attr("src", src[0]);
    }else if(obj.wines[0].wine_type === "Red"){
        $(".modal-body img").attr("src", src[1]);
    }else if(obj.wines[0].wine_type === "Fortified"){
        $(".modal-body img").attr("src", src[2]);
    }else if(obj.wines[0].wine_type === "White"){
        $(".modal-body img").attr("src", src[3]);
    }else{
        $(".modal-body img").attr("src", src[4]);
    }

    $("#modal-wine-type").text(obj.wines[0].wine_type);
    $("#modal-winnery-name").text(obj.wines[0].winery_name);
    $("#modal-wine-year").text(obj.wines[0].year);
    $("#modal-wine-price").text("$ "+ obj.wines[0].price);
    $("#modal-wine-region").text(obj.wines[0].region_name);
}


function sort(){
    var st = $("#sort_criteria option:selected").val();

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd="+st;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayWinesInDiv(obj);
    }
    else{
        return false;
    }
}


function getWineCategories(){

    var st = $("#wine_category option:selected").val();

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=4&cat="+st;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayWinesInDiv(obj);
    }
    else{
        return false;
    }
}


function showWines(){

    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=1";
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result

        displayWinesInDiv(obj);
    }
    else{
        return false;
    }
}


function showCategories(){
    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=3";
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayCategoryList(obj);
    }
    else{
        return false;
    }
}


function displayCategoryList(obj){
    var categoryList = "";
    for (var index in obj.wine_types){
        categoryList += '<option value='+obj.wine_types[index].wine_type+'>'+
            obj.wine_types[index].wine_type+'</option>';
    }
    $("#wine_category").append(categoryList);
}


function searchWines(){
    var searchType = $("#search_criteria option:selected").val();
    var st = $("#search_input" ).val();
    var theUrl="http://localhost/e_commerce/controller/wine_controller.php?cmd=2&wine="+
        st+"&type="+searchType;
    var obj=sendRequest(theUrl);		//send request to the above url
    if(obj.result===1) {					//check result
        displayWinesInDiv(obj);
    }
    else{
        return false;
    }
}


function displayWines(obj){
    var wineCollection = "";
    for (var index in obj.wines){
        wineCollection += '<tr><td>'+obj.wines[index].wine_name+'</td>';
        wineCollection += '<td>'+obj.wines[index].wine_type+'</td>';
        wineCollection += '<td>'+obj.wines[index].winery_name+'</td>';
        wineCollection += '<td>'+obj.wines[index].year+'</td></tr>';
    }

    $('#wine_collection').html(wineCollection);
}





function displayWinesInDiv(obj){

    var i = 0
    var wineCollection = "";
    for (var index in obj.wines){

        wineCollection += '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> ' +
            '<div class="hovereffect">' ;


        if(obj.wines[index].wine_type === "Sparkling"){
            wineCollection +='<img class="img-responsive" src="img/edited/sparkling2.jpg" alt="Sparkling">';
        }else if(obj.wines[index].wine_type === "Red"){
            wineCollection +='<img class="img-responsive" src="img/edited/red.jpg" alt="Red">';
        }else if(obj.wines[index].wine_type === "Fortified"){
            wineCollection +='<img class="img-responsive" src="img/edited/fortified1.jpg" alt="Fortified">';
        }else if(obj.wines[index].wine_type === "White"){
            wineCollection +='<img class="img-responsive" src="img/edited/white.jpg" alt="White">';
        }else{
            wineCollection +='<img class="img-responsive" src="img/edited/sweet.jpg" alt="Sweet">';
        }


        wineCollection +='<div class="overlay">'+
            '<h2>'+obj.wines[index].winery_name+'<br>' +
            obj.wines[index].year+'</h2>'+

        '<a class="info" href="javascript: showDetails('+obj.wines[index].wine_id+')">View Details</a>'+
        '</div>'+
        '</div>' +
            '<div class="wine_desc"><p>'+obj.wines[index].wine_name+' '+obj.wines[index].wine_type+'' +
            '<span class="pull-right">$' +
            obj.wines[index].price+'<a href="#"><span class="fa fa-shopping-cart"></span></a></span></p></div>'+
        '</div>';

    }

    $('#wine_collection2').html(wineCollection);
}


function showDetails(id){
    viewWineDetails(id);
    getVariety(id);
    $('#myModal').modal('toggle');
}


function showAddForm(){
    getGrapeVariety();
    getWineries();
    getWineTypes();
    $('#addModal').modal('toggle');
}



$("#search_button").click(function(){
    searchWines();
});



