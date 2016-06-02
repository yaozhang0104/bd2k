function map_init() {  
	//http://52.37.179.170:8000/wp-content/themes/evolve/asset/map for dev
	var dirc = "http://52.37.179.170:8000/wp-content/themes/evolve/asset/map";
	var default_title = 'Explore BD2K Centers';
	var sel_title = default_title;
	var sel_dirc = "/map2.jpg";
	var sel_content = "Mouse over a center to display info. Click to select.";
    var canvas = document.getElementById("map_canvas");
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("my_map");
    var colorhighlight = "#C20000";   
    function centerHTMLDescription(title, full_description, link, link2) {
		return '<a href="' + link + '">' + full_description + '</a><p>Explore ' + title + ' resources <a href="/index.php/' + link2 + '/">here</a>.</p>';
	}
    
    var pic_sure_title = 'PIC-SURE';
    var pic_sure_link = 'http://pic-sure.org';
    var pic_sure_image = new Image();
    pic_sure_image.src = '/map_13.jpg';
    var pic_sure_description = centerHTMLDescription(pic_sure_title,'Patient-Centered Information Commons: Standardized Unification of Research Elements (PIC-SURE)', pic_sure_link, 'picsure');    
    
    var lincs_dcic_title = 'LINCS-DCIC';
    var lincs_dcic_link = 'http://lincs-dcic.org';
    var lincs_dcic_description = centerHTMLDescription(lincs_dcic_title, 'LINCS-BD2K Perturbation Data Coordination and Integration Center', lincs_dcic_link, 'lincs-dcic');
    
    var lincs_transcriptomics_title = 'LINCS';
    var lincs_transcriptomics_link = 'http://www.lincsproject.org/centers/data-and-signature-generating-centers/broad-trx/';
    var lincs_transcriptomics_description = centerHTMLDescription(lincs_transcriptomics_title,'Broad Institute LINCS Center for Transcriptomics', lincs_transcriptomics_link, 'lincs-tg');
    
    var heart_bd2k_title = 'HeartBD2K';
    var heart_bd2k_link = 'http://heartbd2k.org';
    var heart_bd2k_description = centerHTMLDescription(heart_bd2k_title, 'A Community Effort to Translate Protein Data to Knowledge: An Integrated Platform (HeartBD2K)', heart_bd2k_link, 'heartbd2k');
    
    var md2k_title = 'MD2K';
    var md2k_link = 'http://md2k.org';
    var md2k_link_internal = '/index.php/md2k/';
    var md2k_description = centerHTMLDescription(md2k_title, 'Center of Excellence for Mobile Sensor Data-to-Knowledge (MD2K)', md2k_link, 'md2k');
    
    var cpcp_title = 'CPCP';
    var cpcp_link = 'http://cpcp.wisc.edu';
    var cpcp_description = centerHTMLDescription(cpcp_title, 'The Center for Predictive Computational Phenotyping', cpcp_link, 'cpcp');
    
    var knoweng_title = 'KnowEng';
    var knoweng_link = 'http://knoweng.org';
    var knoweng_description = centerHTMLDescription(knoweng_title, 'KnowEng, a Scalable Knowledge Engine for Large-Scale Genomic Data', knoweng_link, 'knoweng');
    
    var ccd_title = 'CCD';
    var ccd_link = 'http://www.ccd.pitt.edu/';
    var ccd_description = centerHTMLDescription(ccd_title, 'Center for Causal Modeling and Discovery of Biomedical Knowledge from Big Data', ccd_link, 'ccd');
    
    var bdtg_title = 'Translational Genomics';
    var bdtg_link = 'https://genomics.soe.ucsc.edu/bd2k';
    var bdtg_description = centerHTMLDescription(bdtg_title, 'Center for Big Data in Translational Genomics', bdtg_link, 'bdtg');
    
    var mobilize_title = 'Mobilize Center';
    var mobilize_link = 'http://mobilize.stanford.edu';
    var mobilize_description = centerHTMLDescription(mobilize_title, 'The National Center for Mobility Data Integration to Insight (The Mobilize Center)', mobilize_link, 'mobilize');
    
    var cedar_title = 'CEDAR';
    var cedar_link = 'http://metadatacenter.org';
    var cedar_description = centerHTMLDescription(cedar_title, 'Center for Expanded Data Annotation and Retrieval (CEDAR)', cedar_link, 'cedar');
    
    var enigma_title = 'ENIGMA';
    var enigma_link = 'http://enigma.ini.usc.edu';
    var enigma_description = centerHTMLDescription(enigma_title, 'ENIGMA Center for Worldwide Medicine, Imaging, and Genomics', enigma_link, 'enigma');
    
    var bdds_title = 'BDDS';
    var bdds_link = 'http://bd2k.ini.usc.edu';
    var bdds_description = centerHTMLDescription(bdds_title, 'Big Data for Discovery Science', bdds_link, 'bdds');
    
    ctx.drawImage(img, 0, 0, 550, 550*img.height/img.width);
function draw() {
    ctx.beginPath();
    ctx.arc(530,88,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("13",530-5.5,88+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(490,99,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("2",490-2.5,99+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(511,96,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("1",511-2.5,96+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(39,202,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("9",39-2.5,202+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(58,212,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("3",58-2.5,212+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(79,218,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("10",79-5.5,218+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(23,132,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("6",23-2.5,132+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(43,135,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("12",43-5.5,135+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(36,155,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("4",36-2.5,155+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(433,136,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("5",433-2.5,136+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(352,142,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("11",352-5.5,142+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(345,105,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("7",345-2.5,105+4);

    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(342,215,10,0,2*Math.PI);
    ctx.strokeStyle = 'red';
    ctx.stroke();
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("8",342-2.5,215+4);
}
    draw();

      function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };
      }
      var canvas = document.getElementById('map_canvas');
      var context = canvas.getContext('2d');
      var arr = [0,0,0,0,0,0,0,0,0,0,0,0,0];
      var waittime = 300;
      canvas.addEventListener('mousemove', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        if (Math.sqrt((mousePos.x-530)*(mousePos.x-530) + (mousePos.y-88)*(mousePos.y-88)) < 10)
        {  
            $("#map_title").html(pic_sure_title);
            if (arr[0] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_13.jpg");
            if (arr[0] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[0] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(pic_sure_description);
        }
        else if (Math.sqrt((mousePos.x-490)*(mousePos.x-490) + (mousePos.y-99)*(mousePos.y-99)) < 10)
        {  
            $("#map_title").html(lincs_transcriptomics_title);
            if (arr[1] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_2.jpg");
            if (arr[1] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[1] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(lincs_transcriptomics_description);
        }
        else if (Math.sqrt((mousePos.x-511)*(mousePos.x-511) + (mousePos.y-96)*(mousePos.y-96)) < 10)
        {  
            $("#map_title").html(lincs_dcic_title);
            if (arr[2] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_1.jpg");
            if (arr[2] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[2] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(lincs_dcic_description);
        }
        else if (Math.sqrt((mousePos.x-39)*(mousePos.x-39) + (mousePos.y-202)*(mousePos.y-202)) < 10)
        {  
            $("#map_title").html(heart_bd2k_title);
            if (arr[3] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_9.jpg");
            if (arr[3] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[3] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(heart_bd2k_description);
        }
        else if (Math.sqrt((mousePos.x-58)*(mousePos.x-58) + (mousePos.y-212)*(mousePos.y-212)) < 10)
        {  
            $("#map_title").html(bdds_title);
            if (arr[4] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_3.jpg");
            if (arr[4] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[4] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(bdds_description);
        }
        else if (Math.sqrt((mousePos.x-79)*(mousePos.x-79) + (mousePos.y-218)*(mousePos.y-218)) < 10)
        {  
            $("#map_title").html(enigma_title);
            if (arr[5] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_10.jpg");
            if (arr[5] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[5] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(enigma_description);
        }
        else if (Math.sqrt((mousePos.x-23)*(mousePos.x-23) + (mousePos.y-132)*(mousePos.y-132)) < 10)
        {  
            $("#map_title").html(cedar_title);
            if (arr[6] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_6.jpg");
            if (arr[6] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[6] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(cedar_description);
        }
        else if (Math.sqrt((mousePos.x-43)*(mousePos.x-43) + (mousePos.y-135)*(mousePos.y-135)) < 10)
        {  
            $("#map_title").html(mobilize_title);
            if (arr[7] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_12.jpg");
            if (arr[7] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[7] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(mobilize_description);
        }
        else if (Math.sqrt((mousePos.x-36)*(mousePos.x-36) + (mousePos.y-155)*(mousePos.y-155)) < 10)
        {  
            $("#map_title").html(bdtg_title);
            if (arr[8] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_4.jpg");
            if (arr[8] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[8] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(bdtg_description);
        }
        else if (Math.sqrt((mousePos.x-433)*(mousePos.x-433) + (mousePos.y-136)*(mousePos.y-136)) < 10)
        {  
            $("#map_title").html(ccd_title);
            if (arr[9] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_5.jpg");
            if (arr[9] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[9] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(ccd_description);
        }
        else if (Math.sqrt((mousePos.x-352)*(mousePos.x-352) + (mousePos.y-142)*(mousePos.y-142)) < 10)
        {  
            $("#map_title").html(knoweng_title);
            if (arr[10] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_11.jpg");
            if (arr[10] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[10] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(knoweng_description);
        }
        else if (Math.sqrt((mousePos.x-345)*(mousePos.x-345) + (mousePos.y-105)*(mousePos.y-105)) < 10)
        {  
            $("#map_title").html(cpcp_title);
            if (arr[11] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_7.jpg");
            if (arr[11] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[11] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(cpcp_description);
        }
        else if (Math.sqrt((mousePos.x-342)*(mousePos.x-342) + (mousePos.y-215)*(mousePos.y-215)) < 10)
        {  
            $("#map_title").html(md2k_title);
            if (arr[12] == 0) {
                $("#map_img").hide();
                $("#map_load").show();
            }
            $("#map_img").attr("src", dirc+"/map_8.jpg");
            if (arr[12] == 0) {
                setTimeout(function(){
                    $("#map_load").hide();
                    $("#map_img").show();
                    arr[12] = 1;
                }, waittime);
            }
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(md2k_description);
        }
        else 
        {
			$("#map_title").html(sel_title);
            $("#map_img").attr("src", dirc+sel_dirc);
            $("#map_img").css("box-shadow","0 1px 5px rgba(0,0,0,.3)");
            $("#map_content").html(sel_content);
        }
      }, false);

      canvas.addEventListener('click', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        //http://52.37.179.170:8000/wp-content/themes/evolve/ for dev
        if (Math.sqrt((mousePos.x-530)*(mousePos.x-530) + (mousePos.y-88)*(mousePos.y-88)) < 10)
        {  
        	sel_title = pic_sure_title;
        	sel_dirc = "/map_13.jpg";
        	sel_content = pic_sure_description;
            draw();
            ctx.beginPath();
            ctx.arc(530,88,10,0,2*Math.PI);
            ctx.strokeStyle = colorhighlight;
            ctx.stroke();
            ctx.fillStyle = colorhighlight;
            ctx.fill();
            ctx.font = "10px roboto";
            ctx.fillStyle = "white";
            ctx.fillText("13",530-5.5,88+4);
        }
        else if (Math.sqrt((mousePos.x-490)*(mousePos.x-490) + (mousePos.y-99)*(mousePos.y-99)) < 10)
        {  
        	sel_title = lincs_transcriptomics_title;
        	sel_dirc = "/map_2.jpg";
        	sel_content = lincs_transcriptomics_description;
             draw();
            ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(490,99,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("2",490-2.5,99+4);
        }
        else if (Math.sqrt((mousePos.x-511)*(mousePos.x-511) + (mousePos.y-96)*(mousePos.y-96)) < 10)
        {  
            sel_title = lincs_dcic_title;
        	sel_dirc = "/map_1.jpg";
        	sel_content = lincs_dcic_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(511,96,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("1",511-2.5,96+4);
        }
        else if (Math.sqrt((mousePos.x-39)*(mousePos.x-39) + (mousePos.y-202)*(mousePos.y-202)) < 10)
        {  
            sel_title = heart_bd2k_title;
        	sel_dirc = "/map_9.jpg";
        	sel_content = heart_bd2k_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(39,202,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("9",39-2.5,202+4);
        }
        else if (Math.sqrt((mousePos.x-58)*(mousePos.x-58) + (mousePos.y-212)*(mousePos.y-212)) < 10)
        {  
            sel_title = bdds_title;
        	sel_dirc = "/map_3.jpg";
        	sel_content = bdds_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(58,212,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("3",58-2.5,212+4);
        }
        else if (Math.sqrt((mousePos.x-79)*(mousePos.x-79) + (mousePos.y-218)*(mousePos.y-218)) < 10)
        {  
            sel_title = enigma_title;
        	sel_dirc = "/map_10.jpg";
        	sel_content = enigma_description;
            draw();    
    ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(79,218,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("10",79-5.5,218+4);
        }
        else if (Math.sqrt((mousePos.x-23)*(mousePos.x-23) + (mousePos.y-132)*(mousePos.y-132)) < 10)
        {  
            sel_title = cedar_title;
        	sel_dirc = "/map_6.jpg";
        	sel_content = cedar_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(23,132,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("6",23-2.5,132+4);
        }
        else if (Math.sqrt((mousePos.x-43)*(mousePos.x-43) + (mousePos.y-135)*(mousePos.y-135)) < 10)
        {  
            sel_title = mobilize_title;
        	sel_dirc = "/map_12.jpg";
        	sel_content = mobilize_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(43,135,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("12",43-5.5,135+4);
        }
        else if (Math.sqrt((mousePos.x-36)*(mousePos.x-36) + (mousePos.y-155)*(mousePos.y-155)) < 10)
        {  
            sel_title = bdtg_title;
        	sel_dirc = "/map_4.jpg";
        	sel_content = bdtg_description;
            draw();
               ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(36,155,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("4",36-2.5,155+4);
        }
        else if (Math.sqrt((mousePos.x-433)*(mousePos.x-433) + (mousePos.y-136)*(mousePos.y-136)) < 10)
        {  
            sel_title = ccd_title;
        	sel_dirc = "/map_5.jpg";
        	sel_content = ccd_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(433,136,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("5",433-2.5,136+4);
        }
        else if (Math.sqrt((mousePos.x-352)*(mousePos.x-352) + (mousePos.y-142)*(mousePos.y-142)) < 10)
        {  
            sel_title = knoweng_title;
        	sel_dirc = "/map_11.jpg";
        	sel_content = knoweng_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(352,142,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("11",352-5.5,142+4);
        }
        else if (Math.sqrt((mousePos.x-345)*(mousePos.x-345) + (mousePos.y-105)*(mousePos.y-105)) < 10)
        {  
            sel_title = cpcp_title;
        	sel_dirc = "/map_7.jpg";
        	sel_content = cpcp_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(345,105,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("7",345-2.5,105+4);
        }
        else if (Math.sqrt((mousePos.x-342)*(mousePos.x-342) + (mousePos.y-215)*(mousePos.y-215)) < 10)
        {  
            sel_title = md2k_title;
        	sel_dirc = "/map_8.jpg";
        	sel_content = md2k_description;
            draw();
                ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.arc(342,215,10,0,2*Math.PI);
    ctx.strokeStyle = colorhighlight;
    ctx.stroke();
    ctx.fillStyle = colorhighlight;
    ctx.fill();
    ctx.font = "10px roboto";
    ctx.fillStyle = "white";
    ctx.fillText("8",342-2.5,215+4);
        }
        else 
        {

        }
      }, false);
}
