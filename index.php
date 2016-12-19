<?php 
session_start(); 
 /*
 
$_SESSION["lastlogintimestamp"] = letzter login als TIMESTAMP 
$_SESSION["lastlogintime"] = letzter login als Date format

wenn  $_SESSION["lastlogintimestamp"] älter als 30 min dann wird das passwort neu abgefragt
 */

	$lastOnlineActiv =  $_SESSION["lastOnlineActiv"];
	$zeitjetzt       = time();
	$diffTime        =  $zeitjetzt - $_SESSION["lastOnlineActiv"];

	// echo "lastOnlineActiv => " . $lastOnlineActiv; 
	// echo " ||  zeitjetzt => " . $zeitjetzt; 
	// echo " ||  diffTime => " . $diffTime;  

   
    if ($_SESSION["login"] == 0){ 
        header('Location: starter_login.php'); 
        exit; 
    } 
      
   header("Access-Control-Allow-Headers: x-requested-with");

   $NAME = $_SESSION['username'];
   $IDI  = $_SESSION['idi'];

      
 ?>
<!DOCTYPE html>

<html>

<?php  include  "tpl/site/head.html"; ?>
<style type="text/css">
	    .user-circle { 
			  background-color: aquamarine;
			  width: 70px;
			  height: 70px;
			  padding: 26px 16px;
			  font-size: 15px;
			  line-height: 1.33;
			  border-radius: 35px;
			  margin: 5px 6px;
			}
		 #loadover {
			    z-index: 100000;
				  background-color: rgba(180, 205, 204, 0.65);
				  position: fixed;
				  height: 100%;
				  width: 100%;
				  font-size: 3em;
				  color: black;
				  text-align: -webkit-center;
				  padding-top: 11%;
		  }
        .none { display: none; }
	 </style>
 
<!-- HTML ./head -->
<!--  LOCKSCREEN -->

   <?php
   
   if( $diffTime > 3600 ) {
        
	      include "starter_lockscreen.php";
	      exit; 
	     }   
    

      
   ?>


<!--  LOCKSCREEN ENDE-->

<body class="hold-transition skin-blue sidebar-mini" >


           <div id="loadover" class="overlay none"> 
                <i class="fa fa-refresh fa-spin"></i>
             </div>

          <div id="alert" class="callout callout-info none">
          <h4 id="alertH4">Tip!</h4>

          <p id="alertTXT" >Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
            sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
            links instead.</p>
          </div>


<!-- Site wrapper -->
<div class="wrapper">

   <!-- Main-Header -->
   <?php
      include "tpl/site/main-header.html";
   ?>   
   <!-- /.main-header -->
    <!-- /Main-Sidebar -->                  
   <?php
      include "tpl/site/main-sidebar.html";
   ?> 
    <!-- /.main-sidebar -->

  <!-- Content Wrapper. Contains page content -->

     <?php
     // include "tpl/site/content-wrapper.html";
   ?>
     <div class="content-wrapper">

<section class="content-header">
      <h1 id="cheader"></h1>
      <ol class="breadcrumb" >
        <li><a href="#"><i class="fa fa-hand-o-right"></i> <span id="cbreadcrumb">Hier steht was was der Vorstand im Hintergund schreiben kann.</span></a></li>

        <!-- <li class="active">Blank page</li> -->
      </ol>

    </section>  
    <section class="content" style="margin-top:0px">
			<div id="innerbox">  

      
      
			      <?php
				      include "tpl/module/boxes_4.html";
				   ?>   




   <!--  <div class="row">
        <div class="col-sm-5 col-md-6">
            <input type="text" size="48" name="url" id="url" /> <button onclick="openPopup()">Select file</button>
            <img id="opPreview" src="" alt="">
        </div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
         
				 <div id="ckfinder1"></div>
        </div>
      </div>-->


<div class="row">
        <div class="col-md-4">
           <div id="timelinebox_index" >
				    <?php
				      include "tpl/module/timeline_box.html";
				   ?>   
                 <?php
				      include "tpl/module/carusel_box.html";
				   ?>  
				   </div>

        </div>
        <div class="col-md-4">
              <?php
				      include "tpl/module/timeline_box_AG.html";
				   ?>  
        </div>
        <div class="col-md-4">
         
              <?php
				      include "tpl/module/timeline_box_USER.html";
				   ?>
				   
             
        </div>
      </div>


    <div class="row">
        <div class="col-sm-5 col-md-6">
           <!-- xxxx-->

        </div>
        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
        <!-- ssss-->
				   
       
        </div>
      </div>
             
             
				  

                 <div class="clearfix"></div>
			         <br><br><hr> 

			</div>		


</section> 


  </div>

  <!-- /.content-wrapper -->

  <!-- Content Footer.   -->

     <?php
      include "tpl/site/footer.html";
   ?>

  <!-- /footer -->

  <!-- Control Sidebar rechts -->
      <!-- The Right Sidebar -->
      
     <?php
     include "tpl/site/aside_sidemenu.html";
        //<div w3-include-html="tpl/site/aside_sidemenu.html"></div>
   ?>

   
			

			 <?php
			 /*
				   echo ' <aside id="right_sidebar_box" class="control-sidebar control-sidebar-dark">';
				   echo ' <div id="vorstand_EDIT_Pannel" style="overflow: auto;">';


				    echo '<div>Vorstand Pannel</div>';			     
				    echo '<div class="form-group">';
                echo '  <label>Seitenhinweis</label>';
                echo '  <textarea id="newText_INDEX_note" class="form-control" rows="2" placeholder="Hinweistext für die HFPbase. "></textarea>';
                 echo '  <label>Link oder Artikel wählen</label>';
                echo '<div class="input-group input-group-sm">';

                echo '<input id="save_INDEX_note_link" type="text" class="form-control">';
                echo '    <span class="input-group-btn">';
                echo '      <button  type="button" class="btn btn-info btn-flat" >Artikel wählen</button>';
                echo '    </span>';
                echo '</div>';

                echo '  <button id="save_INDEX_note" type="button" class="btn bg-orange margin">ändern</button>';
                echo '</div>';
				    echo '</div>';
				    */

			?>	    
				    <!--
				    <div class="navbar-fixed-bottom">
				        <form onsubmit="ws.send(MEMBER.idi + '#|#' +  MEMBER.name + '#|#' +$('#inputchat').val()); // console.log('wssend=> '+ MEMBER.idi + '#|#' +  MEMBER.name + '#|#' +$('#inputchat').val() ); $('#inputchat').val(''); return false; ">
				            <input id="inputchat" type="text" class="form-control" placeholder="Text input" style="width: 100%;" maxlength="140" autocomplete="off">
				        </form>
				    </div>

				   -->

		 

			<!-- The sidebar's background -->
			<!-- This div must placed right after the sidebar for it to work-->
			<div class="control-sidebar-bg"> </div>
 <!-- /Control Sidebar rechts -->





</div>
<!-- ./wrapper -->

 

<audio id="mp3in" preload="auto">
<source src="dist/sounds/in.mp3" />
</audio>
<audio id="mp3out" preload="auto">
<source src="dist/sounds/out.mp3" />
</audio>
<audio id="mp3info" preload="auto">
<source src="dist/sounds/info.mp3" />
</audio>
<audio id="mp3anmeldung" preload="auto">
<source src="dist/sounds/es_hat_sich_jemand_angemeldet.mp3" />
</audio>
<audio id="mp3login" preload="auto">
<source src="dist/sounds/login.mp3" />
</audio>


<script type="text/javascript">

var wsUri = "ws://127.0.0.1:9000/server.php"; 	
//var wsUri = "ws://humanistischefriedenspartei.de:4569/server.php"; 	
	websocket = new WebSocket(wsUri); 


</script>

    <?php
      include "tpl/site/javascript_end.html";
   ?>

  
<script type="text/javascript">

 

 $(document).ready(function () {
 

       $(document).ajaxStart(function() { Pace.restart(); });

       //    <<<    Start    >>>
       load_counts("index");	





	websocket.onopen = function(ev) { // connection is open 
		$('#connectstatus').append("<span  style=\"color:green\">Connected!</span>"); //notify user
	
     // USer für alle in den onlinestatus setzen.

	}



	//#### Message received from server?
	websocket.onmessage = function(ev) {

		  console.log( "ev => " + JSON.parse(ev.data) );


			var msg        = JSON.parse(ev.data); //PHP sends Json data
			
			if (msg.color == "USER ABMELDEN") {
				// msg.name = username ; msg.message = userID
				// Den Namen bei allen löschen
				 $("ui"+msg.message).remove();
				 $("#mp3in").get(0).play();
			}
			
			if (msg.color == "NEUE ANMELDUNG") {
				// msg.name = ""    msg.message = HTML code den alle bekommen und eine stimme "neuer User online"
				   
				 $('#countUseronlineBOX').html(  msg.message ); //user in online liste hinzufügen
	          $("#mp3login").get(0).play();
	          
			} else {
				
				//console.log("msg.color => "+msg.color);
				var typ        = msg.type, //message type
				    umsg       = msg.message, //message text
				    uname     = msg.name, //user name
				    UserID_ChatID = msg.color; //userid
				    
				if (UserID_ChatID) {
				     var  ids  = UserID_ChatID.split("#$#"),
			           UserID =ids[0],
			           ChatID =ids[1];
		   
			}
			}
			

			   console.log("msg.type => "+typ);
			   console.log("umsg => "+umsg);
			   //console.log("uname => "+uname);
			   console.log("UserID => "+UserID);
			   console.log("ChatID => "+ChatID);

			 // chatUserID  == MEMBER.idi ?   console.log("beides gleich") :   console.log("nicht gleich ") ;

             if(typ == 'usermsg' && umsg != null) {

			   	     	if (UserID  != MEMBER.idi ) {
			   	     	// fremder
			   	     	         pull_nam = "pull-left";
			   	     	         pull_dat = "pull-right";
			   	     	         right    = "";
			   	     	         var img  = "dist/img/user1-128x128.jpg";
			   	     	} else {
			   	     		// ich
			   	     	         pull_nam = "pull-right";
			   	     	         pull_dat = "pull-left";
			   	     	         right = "right";
			   	     	         
			   	     	         var img = "../../useruploads/profilbilder/"+USER.img;
			   	     	}

			   	     	// console.log("oldname => " + oldname ); 
			   	     	// console.log("newname] => " +  messtxt[1]  );

                         /* CHAT
			   	     	   html='							   <div class="direct-chat-msg '+ right + ' ">';
								html+='							        <div class="direct-chat-info clearfix ">';
								html+='							          <span class="direct-chat-name pointer' + pull_nam +'" onclick="showUser(' + UserID + ')">' + uname + '</span>';
								html+='							          <span class="direct-chat-timestamp ' + pull_dat +'"> jetzt </span>';
								html+='							        </div><!-- /.direct-chat-info -->';
							 	html+='							        <img class="direct-chat-img" src="'+img+'" alt="message user image">';
								html+='							        <div class="direct-chat-text ">';
								html+='							          ' + umsg +'';
								html+='							        </div>';
								html+='							   </div>';
								*/
								
								console.log('$( ".txb:last" ).data("uidi") => '+ $('div.txb:last').data("uidi"));
								
								
								// prüfen ob chat index oder eine chatid (zuur zeit nur von index oder einer ag)
								
							    if (ChatID != "index") {
							    	 if ($('.chatbox_AG'+ChatID +'  div.txb:last').data('uidi') == UserID) {
							    	 	         html=' <div>';										 
										         html+='	 ' + umsg +'';										 
										         html+='</div>';
										         $(".chatbox_AG"+ChatID +" .txb"+$('div.txb:last' ).data("chatid")+"").append(html);
							    	 }
							    	 
							     } else {
							     	 if ($('div.txb:last').data('uidi') == UserID) {
							     	 	         html=' <div>';										 
										         html+='	 ' + umsg +'';										 
										         html+='</div>';
										         $(".txb"+$('div.txb:last' ).data("chatid")+"").append(html);
							     	 } 
							     	 
							     }	
								
								
								
								     // CHAT
							   	     	   html='							   <div class="btxt">';
												html+='							        <div class=" clearfix ">';
												html+='							          <span class="direct-chat-name  pointer hover" onclick="showUser(' + UserID + ')">' + uname + '</span>';
												html+='							          <span class="" style="font-size: xx-small"> jetzt </span>';
												html+='							        </div>';
												html+='							        <div class="">';
												html+='							          ' + umsg +'';
												html+='							        </div>';
												html+='							   </div>';
												  
												  
								 if (ChatID != "index") {
							    	
							    	 $(".chatbox_AG"+ChatID+"").append(html);
							     } else {				  
												  
									 $("#chatside").append(html);
							   }		  
												  
								
								
								
								/*
								if ($('div.txb:last').data('uidi') == UserID) {
									 
										html=' <div>';										 
										         html+='	 ' + umsg +'';										 
										         html+='</div>';
										         
									   if (ChatID != "index") {
                                   $(".txb"+$('div.txb:last' ).data("chatid")+"").append(html);
                                } else {     	
                                
                                   $(".chatbox_AG"+ChatID +" .txb"+$('div.txb:last' ).data("chatid")+"").append(html);
                                }
								} else {
									     
				                          // CHAT
							   	     	   html='							   <div class="btxt">';
												html+='							        <div class=" clearfix ">';
												html+='							          <span class="direct-chat-name  pointer hover" onclick="showUser(' + UserID + ')">' + uname + '</span>';
												html+='							          <span class="" style="font-size: xx-small"> jetzt </span>';
												html+='							        </div>';
												html+='							        <div class="">';
												html+='							          ' + umsg +'';
												html+='							        </div>';
												html+='							   </div>';
												  
											
									    if (ChatID != "index") {
									    	alert("chatbox_AG"+ChatID);
				 								$(".chatbox_AG"+ChatID+"").append(html);
				 								
				 								
				 							} else {
				 								

                                     console.log("warum?"+ChatID);
		  		 								$("#chatside").append(html);
				 								// wenn chat vom user geschlossen dann hinweis setzen und und hochrechnen
				 								
				 								if ($("#ichatb").attr("class") == "box collapsed-box") {
				 								     $("#chat1CountUnread").html( parseInt($("#chat1CountUnread").html()) +1 ).css("display","block"); 	
				 								}
				 							}
				 							

								} */
								 
                    

 							
 								$("#mp3out").get(0).play();
			 			      // console.log("scrollJA=> " + $('#scrollJA').checked);

			             if ($('#id_chatNoScroll').is(':checked') ) {
			                 var element = document.getElementById("sidebar_chat_box");
		                    element.scrollTop = element.scrollHeight;
			              }
                    console.log( $('#chatnotebox') );
                   // NotifiBox mit hinweis füllen wenn user nicht den chat offen hat
                     if ($('#chatnotebox').length != 0 ) {
                     	
                       $('#countchatnotebox').html(parseInt($('#countchatnotebox').html() ) + 1 );
                       $('#countchatnoteboxMulti').html("en");
                       
                     } else {
                     	html = ' <li>';
                       html += '   <a onclick="showChat(\'index\')" href="#hfpchat">';
                       html += '     <i id="chatnotebox" class="fa fa-users text-aqua"></i> <span id="countchatnotebox">1</span> neue Chatnachricht<span id="countchatnoteboxMulti"></span> ';
                       html += '   </a>';
                       html += '</li>';
                         $('#notifiBox').append(html);
                     }                      
                       
                       
                    // NotifiBox mit hinweiszähler hochzählen wenn user nicht den chat offen hat
			         $('.head_notifications, .head_notifications_2').html(( parseInt($('.head_notifications').html() ) + (1) ));
        }


					if(typ == 'system'){
					//	$('#chatside').append("<div class=\"system_msg\">"+umsg+"</div>");
					}


				};

	websocket.onerror	= function(ev){

		   $('#connectstatus').append("<span style=\"color:red\">Error Occurred - "+ev.data+"</span>"); //notify user		   

		    $.ajax({
			     url : "dist/php/hfp.php",
			     type: "POST",
			     data: { typ: "start_websocket" },
			     success:function(data){
			         // console.log(data);

			         websocket = new WebSocket("ws://127.0.0.1:9000/server.php");
			         //websocket = new WebSocket("ws://humanistischefriedenspartei.de:4569/server.php");
			     }
			 });


    }; 

	websocket.onclose 	= function(ev){ 


          	  $('#connectstatus').append("<span style=\"color:orange\">Connection Closed</span>"); //notify user		   
	 };




	   // console.log("chatside hoch => "+$('#chatside').prop('scrollHeight') );
      //        // console.log("#chat-box-body .box-body hoch => "+$('#chat-box-body .box-body').prop('scrollHeight'));


    
     
  
      // SEITE LADEN
      console.log("window.onload  => "+parent.location.hash);
      var hash = parent.location.hash;
       
       console.log("hash  => "+ hash );
       console.log("hash lenght  => "+ hash.length );
       console.log("hash serach  => "+ hash.search("ag"));
     
       
      if (hash.search("user") > 0 ) {
        var id = hash.slice(5,8);
        hash = "#user";
         console.log("user id  => "+ id);
      }
      if (hash.search("ag") > 0) {
        var id = hash.slice(3,5);
        hash = "#ag";
          console.log("ag id  => "+ id);
      }
      if (hash.search("land") > 0) {
        
        hash = "#landesverbaende";
          
      }
     
      
      switch(hash) {
      	 case "#mitglieder":      $("#board_members").click();       break;
      	 case "#todo":            $("#board_todo").click();          break;
      	 case "#arbeitsgruppen":  $("#board_ags").click();           break;
      	 case "#projekte":        $("#board_projects").click();      break;
      	 case "#email":           $("#board_email").click();         break;
      	 case "#newsletter":      $("#board_newsletter").click();    break;
      	 case "#finanzen":        $("#board_finanz").click();        break;
      	 case "#umfragen":        $("#board_umfrage").click();       break;
      	 case "#"+MAIN.name+"":        showSYS();                         break;
      	 case "#user":            showUser(id);                      break;
      	 case "#ag":              showAG(id);                        break;
      	 case "#landesverbaende": $("#board_landesverband").click(); break;
      }
 
 
       
/* 
 window.onbeforeunload = function() {
   return 'Möchten Sie die Seite wirklich verlassen? Sie werden automatisch ausgeloggt!';
};*/
 
 
 


 // LOGOUT 




/*
   speichert die generalen seiten einstellung für einen user
*/
function getSiteSettings() {
 

   console.log("AJAX ( TYP =======> getSiteSettings " );
	     $.ajax({
			   url : "dist/php/hfp.php",
			   type: "POST",
			   data:   {"typ":"getSiteSettings"},
			   success:function(data){ 
			   
			         console.log("getSiteSettings data=> "+data);
			         
						 // 0`userid`, 1`fixLayout`, 2`boxLayout`, 3`menuLeft`, 4`menuLeftHover`, 5`menuRightShow`, 6`menuRightColor`, 7`farbe`
						 // 8infoMailWeek , 9infoMail , 10showOnline , 11noNotes ,  12chatNoScroll
						 
                   var tdata = data.split("#$#")
                       i=0; l = tdata.length;			         
			         
			          for (i;i<l;i++) {
			          	
			          	if (tdata[i] == 1) {
			          		console.log(tdata[i]);
				            switch(i) {
				            	case 1 :  $("#id_fixLayout").click();  break;
				            	case 2 :    $("#id_boxLayout").click();  break;
				            	case 3 :  $("#id_menuLeft").click();  break;
				            	case 4 :  $("#id_menuLeftHover").click();  break;
				            	case 5 :  $("#id_menuRightShow").click();  break;
				            	case 6 :  $("#id_menuRightColor").click();  break;
				            	case 7 :  $("#"+tdata[7]).click();  break;
				            	case 8 :  $("#id_infoMailWeek").click();  break;
				            	case 9 :  $("#id_infoMail").click();  break;
				            	case 10 :  $("#id_showOnline").click();  break;
				            	case 11 :  $("#id_noNotes").click();  break;
				            	case 12 :  $("#id_chatNoScroll").click();  break;
				            	
				            	
				            } // switch
			             
			            } // if
			          } // for
			         
			         
			         
			         
			         // click funtion zum speichern der änderungen für einen user
			         $("#form_generalSettings .pull-right,#form_generalInfoSettings .pull-right, .skinLI").click(function () {
                    
                    
                   
			          
					    	var moreinfo = '';
							$('#form_generalSettings :input[type=checkbox]').each(function() {     
							   moreinfo += '&'+this.name+'='+this.checked;		   
							});
							$('#form_generalInfoSettings :input[type=checkbox]').each(function() {     
							   moreinfo += '&'+this.name+'='+this.checked;		   
							});
				 	
							 if ($(this).attr("class") == "skinLI") {
			              
			                $(".skinLI").data("active","no");
			                $(this).data("active","yes");
			                 moreinfo += "&farbe="+ $(this).attr("id");
			             
			            } else {
			            	 
 
									$("li.skinLI" ).each(function(index ){
									
									  if ($(this).data("active") == "yes") {
									  	  console.log(index + ": " + $(this).data("active") );
										   moreinfo += "&farbe="+ $(this).attr("id");
										  console.log(index + ": " + $(this).attr("id") );
								     }
									});
 
			               	  
			            }
							 console.log("saveSiteSettings > moreinfo => " + moreinfo );
							
							
					         console.log("AJAX ( TYP =======> saveSiteSettings " );
						     $.ajax({
								   url : "dist/php/hfp.php",
								   type: "POST",
								   data:   moreinfo + "&typ=saveSiteSettings",
								   success:function(data){ 
								         console.log("saveSiteSettings data=> "+data);
 
								         
								    } // success
					         });// ajax
							
					    }); // click function
					    
					    
			    } // success
         });// ajax
 
}


 // Seiten Einstellungen  laden 
   getSiteSettings();
   
    }); // document ready

   
   
   // Include W3 Data aktivieren
   w3IncludeHTML();

     
 

     // START CKEDITOR.replace
     function startCKEDITOR() {
                CKEDITOR.replace('editor1', {
             	    //filebrowserBrowseUrl: 'plugins/kcfinder/browse.php?type=Files',
             	    //filebrowserBrowseUrl: 'plugins/kcfinder/browse.php?type=Files',
					     
					      
					      uiColor: '#9AB8F3',
					       disallowedContent: 'img{width,height};',
        
					     filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
					     filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
					     filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					     filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
					        //filebrowserUploadUrl: 'dist/php/upload_img.php?type=Files'
					
					     // plugins: 'wysiwygarea,toolbar,basicstyles,menubutton,link,sourcearea,widget',
					      //plugins: 'wysiwygarea,toolbar,basicstyles,menubutton,link,sourcearea,image2,widget',
                 extraPlugins: 'chart,leaflet,widgettemplatemenu,widgetbootstrap,youtube,videodetector,html5audio,oembed',
           
        
           
				 } );	
			 
 
}


 
  
 function openPopup() {
             CKFinder.popup( {
                 chooseFiles: true,
                 onInit: function( finder ) {
                 	
                     finder.on( 'files:choose', function( evt ) {
                         var file = evt.data.files.first();
                         
                          // Log image data:
                         console.log( '-------------------' );
                         console.log( 'Name:', file.get( 'name' ) );
                         console.log( 'URL:', file.getUrl() );
                         console.log( 'folder:', file.get( 'folder' ) );
         
            
            
                         //document.getElementById( 'url' ).value = file.getUrl();
                          document.getElementById( 'url' ).value = file.getUrl();
                         alert(file.length);
                         $("#opPreview").attr("src",file.getUrl());
                          
                     } );
                     finder.on( 'file:choose:resizedImage', function( evt ) {
                         document.getElementById( 'url' ).value = evt.data.resizedUrl;
                          
                     } );
                 }
             } );
         }

 
        
     </script>
</body>
</html>

</html>
