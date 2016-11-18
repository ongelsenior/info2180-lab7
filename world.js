window.onload  = function(){
    
    var link = "";
    var xmlHttpRequest = new XMLHttpRequest();
    var Look = document.getElementById("lookup");
    var displayRes = document.getElementById("result");
    var all = document.getElementById("Check");
    
    Look.addEventListener('click',function(e){
        e.preventDefault();
        var requestQuery = document.getElementById("country").value;
    
     {
    if (all.checked) {
        link = "world.php?allcountry=true";
    }
    else {
        link = "world.php?country="+requestQuery;
    }
    httprequest.onreadystatechange = load;
    xmlHttpRequest.open("GET",link,true);
    xmlHttpRequest.send("");
    
    function Load(){
        if((xmlHttp.readyState === XMLHttpRequest.DONE) && (xmlHttp.status === 200)){
            displayRes.innerHTML = xmlHttp.responseText;
        }
    }
}