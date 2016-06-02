
var h = 0; //horizontal menu position
var v = 0; //vertical menu position
var curpage = document.getElementById('main-page');
var curh = document.getElementById('h0');
var curv = document.getElementById('v0');

function setAbout() {
	h = 0;
	display();
}
function setRoster() {
    h = 1;
    display();
}
function setForum() {
	h = 2;
	display();
}
function setEvent() {
	h = 3;
	display();
}
function setMeeting() {
    h = 4;
    display();
}
function setResource() {
    h = 5;
    display();
}


function setWG() {
	v = 0;
	display();
}
function setMetadata() {
	v = 2;
	display();
}

function display() {
    if (v == 0)
    {
        document.getElementById('wk1').className = "hide";
    }
    else
    {
        document.getElementById('wk1').className = "show";
    }

	if (v == 0) //main-page
	{
		if (curpage != null)
     	{
         	curpage.className = "hide";
     	}
     	document.getElementById('main-page').className = "show";
     	curpage = document.getElementById('main-page');
	}
	if (h == 0 && v == 2)
	{
		if (curpage != null)
     	{
         	curpage.className = "hide";
     	}
        //http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php for dev
        //http://localhost/wordpress/wp-content/themes/evolve/ajax.php for local
        
        $.ajax({method: 'get',url: "http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php", data: {action: 'metadata_front'}, success: function(result){
            $("#metadata-front").html(result);
        }});
     	document.getElementById('metadata-front').className = "show";
     	curpage = document.getElementById('metadata-front');
	}
    if (h == 5 && v == 2)
    {
        if (curpage != null)
        {
            curpage.className = "hide";
        }
        //http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php for dev
        //http://localhost/wordpress/wp-content/themes/evolve/ajax.php for local
        
        $.ajax({method: 'get',url: "http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php", data: {action: 'metadata_resource'}, success: function(result){
            $("#metadata-resource").html(result);
        }});
        document.getElementById('metadata-resource').className = "show";
        curpage = document.getElementById('metadata-resource');
    }
    if (h == 4 && v == 2)
    {
        if (curpage != null)
        {
            curpage.className = "hide";
        }
        //http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php for dev
        //http://localhost/wordpress/wp-content/themes/evolve/ajax.php for local
        
        $.ajax({method: 'get',url: "http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php", data: {action: 'metadata_meeting'}, success: function(result){
            $("#metadata-meeting").html(result);
        }});
        document.getElementById('metadata-meeting').className = "show";
        curpage = document.getElementById('metadata-meeting');
    }
	if (h == 3 && v == 2)
	{
		if (curpage != null)
     	{
         	curpage.className = "hide";
     	}
     	//http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php for dev
     	//http://localhost/wordpress/wp-content/themes/evolve/ajax.php for local
     	
     	$.ajax({method: 'get',url: "http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php", data: {action: 'event_metadata'}, success: function(result){
            $("#metadata-event").html(result);
        }});
     	document.getElementById('metadata-event').className = "show";
     	curpage = document.getElementById('metadata-event');
	}
	if (h == 2 && v == 2)
	{
		if (curpage != null)
     	{
         	curpage.className = "hide";
     	}
     	//change for dev
     	$.ajax({method: 'get',url: "http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php", data: {action: 'wg_forum'}, success: function(result){
            $("#metadata-forum").html(result);
        }});
     	document.getElementById('metadata-forum').className = "show";
     	curpage = document.getElementById('metadata-forum');
	}
    if (h == 1 && v == 2)
    {
        if (curpage != null)
        {
            curpage.className = "hide";
        }
        //change for dev
        $.ajax({method: 'get',url: "http://52.37.179.170:8000/wp-content/themes/evolve/ajax.php", data: {action: 'metadata_roster'}, success: function(result){
            $("#metadata-roster").html(result);
        }});
        document.getElementById('metadata-roster').className = "show";
        curpage = document.getElementById('metadata-roster');
    }
}



function highlight(el)
{
   	if (curh != null)
    {
        curh.className = "";
    }
    el.className = "highlight";
    curh = el;
}
function highlightv(el)
{
   	if (curv != null)
    {
        curv.className = "";
    }
    el.className = "highlight";
    curv = el;
}

