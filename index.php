<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title></title>
	<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />  -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.3.1.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.qtip.min.css" />
	<link rel="stylesheet" type="text/css" href="css/tora.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css" />
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.cookie.js"></script>
    <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
    <!--<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>-->
    <script src="js/jquery.mobile-1.3.2.js"></script>	
	<script src="js/jquery.qtip.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>				
	<script src="js/tora.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>	
</head>

<body id='body'>
<div data-role="page" id="main-page">
    <!-- ##################  HEADER ####################### -->
	<div data-role="header" data-theme="a" data-position="fixed" id="header_area" data-tap-toggle="false">
		<a href="#option" data-icon="gear" class="ui-btn-left header-cote" data-iconpos="notext">Options</a>
		<a href="" id='switch-right-menu' data-icon="arrow-r" class="ui-btn-right">סגור</a>
	    <h1>
			<a href="#popupInfo" data-rel="popup" data-role="button" class="ui-icon-alt" data-inline="true" data-transition="pop" data-position-to="window" data-icon="grid">החלף פרק</a>
			<span id="title"></span>
		</h1>
		<div data-role="navbar">
			<ul id='header-button'>
				<li><a id='bt_traduction'    class='bt_navigate'  href="">תירגום</a></li>
				<li><a id='bt_taamim'        class='bt_navigate'  href="">טעמים</a></li>
				<li><a id='bt_other_comment' class='bt_navigate'  href="">פירושים</a></li>												
				<li><a id='bt_rashi'         class='bt_navigate'  href="">עיקרי רשי</a></li>
				<li><a id='bt_explanation'   class='bt_navigate'  href="">ביאורי מילים</a></li>
			</ul>
		</div>
	</div>		
	 <!-- ##################  CONTENT ####################### -->
	<div data-role="content">
		<div id="wrapper">
		<div id="page">
		<!-- ##################  TOC ####################### -->
		<!-- ##################  END TOC      ####################### -->
		<!-- ##################  TEXT CONTENT ####################### -->
		
		<div data-role="popup" id="popupInfo" class="ui-content" data-theme="e" style="max-width:550px;" data-overlay-theme="a" data-theme="a">
			<div id="toc">
			<div id="book">
				<a dir="rtl" id="b1">בראשית</a> | <a id="b2">שמות</a> | <a id="b3">ויקרא</a> | <a id="b4">במדבר</a> | <a id="b5">דברים</a>
			</div>
			<p><hr/></p>
			<div id="parasha">	
			</div>
			<p><hr/></p>
			<div id="prakim">
			</div>				
		</div>
		</div>
		
		<div id="jquery_jplayer_1"></div>
		<div id="daf_info"></div>
		<div id="jp_container_1">
			<a href="#" class="jp-play">Play</a>
			<a href="#" class="jp-pause">Pause</a>
		</div>
				
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id='sidebar1'>
				</div>
				<div id="content" dir='rtl' style='font-size:30px;'>
				</div>	
			<!--<div id='sidebar'>elie</div>-->
		</div> 	<!-- end #page-bgbtm -->
		</div>    <!-- end #page-bgtop -->
		</div>    <!-- end #page -->
		</div>    <!-- end #wrapper -->
	
	</div><!-- div data-role="content" -->
	<!-- ################## FOOTER  ####################### -->
	<div data-role="footer" class="ui-bar" data-position="fixed" data-id="foo1" data-tap-toggle="false">
		<!--  <a  data-mini="true" data-role="button" data-icon="info" id='resume-section'>סיכומים</a>-->
		<div id="controlgroup1" data-role="controlgroup" data-type="horizontal">
    		<input type="checkbox" name="checkbox-resume" id="checkbox-resume" data-mini="true" >
    		<label for="checkbox-resume">הקדמות</label>
    		
    		<input type="checkbox" name="checkbox-datatable" id="checkbox-datatable" data-mini="true" >
    		<label for="checkbox-datatable">table</label>    		
    		
    		<input type="checkbox" name="checkbox-allintro" id="checkbox-allintro" data-mini="true" >
    		<label for="checkbox-allintro">allresume</label> 
    		
		<!--<span style="margin-right:30px;float:right;font-size:50%;">לעילוי נשמת ניסים בן משה הכהן</span>-->
		</div>
		<div id="controlgroup2" data-role="controlgroup" data-type="horizontal">
    		<input type="checkbox" name="checkbox-play-record" id="checkbox-play-record" data-mini="true" >
    		<label for="checkbox-play-record">record</label>
    		
    		<input type="checkbox" name="checkbox-saved-time" id="checkbox-saved-time" data-mini="true" >
    		<label for="checkbox-saved-time">Save</label>
    		
		</div>
		
		
					
	</div><!-- /footer -->
	<!-- ################## END FOOTER  ####################### -->
</div>
<div data-role="page" id="editor-page" >
	<!-- ##################  HEADER ####################### -->
	<div data-role="header" data-theme="a" data-position="fixed" data-tap-toggle="false">
		<h1>
			<a href="#popupInfo" data-rel="popup" data-role="button" class="ui-icon-alt" data-inline="true" data-transition="pop" data-position-to="window" data-icon="bars" data-iconpos="notext"></a>
			<span id="title"></span>
		</h1>
		<div data-role="navbar">
			<ul id='header-button' >
				<li><a id='bt_add_comment' class='btt_navigate' data-theme="e" href="">הוספת פירוש</a></li>
				<li><a id='bt_add_intro' class='btt_navigate' data-theme="e" href="">הקדמה</a></li>												
				<li><a id='bt_add_condense' class='btt_navigate' data-theme="e" href="">מילים מפתח</a></li>
				<li><a id='bt_add_who_who' class='btt_navigate' data-theme="e" href="">מי מדבר ל מי</a></li>
			</ul>
		</div>
	</div>		
	<div data-role="content">
	
	<div id="text-top" dir="rtl"></div>	
	<form id="edit-form"  name="edit-form" data-ajax="false">
	<div class="ui-body ui-body-b">
	
	<!-- Intro  -->
	<div data-role="fieldcontain" class="category-intro">
    	<label for="editor-intro" class='ui-input-text'>Introduction:</label>
    	<input type="text" class="editor-input ui-input-text" id="editor-intro" value="" />
	</div>
	
	<!-- essence  -->
	<div data-role="fieldcontain" class="category-essence">
    	<label for="editor-condense" class='ui-input-text'>Condense:</label>
    	<input type="text" class="editor-input ui-input-text" id="editor-condense" value="" />
	</div>
	
	<!-- who is speaking  -->
	<div data-role="fieldcontain" class="category-who">
    	<label for="editor-who" class='ui-input-text'>who:</label>
    	<input type="text" class="editor-input ui-input-text" id="editor-who" value="" />
	</div>
	
	<!-- Who toWho direction -->	
	<div data-role="fieldcontain" class="category-who">
		<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
			<legend>Comment Type:</legend>
			   <label for="radio-left">&lt;----</label>			   
			   <input type="radio" name="radio-choice-b" id="radio-left" value="other" />
				<label for="radio-both">&lt;---&gt;</label>
			   <input type="radio" name="radio-choice-b" id="radio-both" value="on" checked="checked" />			   
			   <label for="radio-right">---&gt;</label>
			   <input type="radio" name="radio-choice-b" id="radio-right" value="off" />			   
		</fieldset>
	</div>
	
	<!-- who is speaking  -->
	<div data-role="fieldcontain" class="category-who">
    	<label for="editor-towho" class='ui-input-text'>to who:</label>
    	<input type="text" class="editor-input ui-input-text" id="editor-towho" value="" />
	</div>
	
	<!-- Comment Type -->	
	<div data-role="fieldcontain" class="category-comment">
		<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
			<legend>Comment Type:</legend>
			   <label for="radio-explication">ביאור מילים</label>			   
			   <input type="radio" name="radio-choice-b" id="radio-explication" value="other" />
				<label for="radio-rashi">רש"י</label>
			   <input type="radio" name="radio-choice-b" id="radio-rashi" value="on" checked="checked" />			   
			   <label for="radio-other">פירושים אחרים</label>
			   <input type="radio" name="radio-choice-b" id="radio-other" value="off" />			   
		</fieldset>
	</div>

	<!-- Popup Author  -->
	<div data-role="fieldcontain" class="category-comment">
    	<label for="editor-input" class='ui-input-text'>Author:</label>
    	<input type="text" class="editor-input ui-input-text" id="editor-author" value="" />
	</div>			
			
	<!-- Popup Title  -->
	<div data-role="fieldcontain" class="category-comment">
    	<label for="editor-title" class='ui-input-text'>Title:</label>
    	<input type="text" class="editor-input" id="editor-title" value=""  />
	</div>			
	
	<!--  Question Text -->
	<div data-role="fieldcontain" class="category-comment">
    	<label for="name" class='ui-input-text'>Question</label>
    	<textarea class="editor-input" id="editor-question"></textarea>
	</div>

	<!--  Comment Text -->
	<div data-role="fieldcontain" class="category-comment">
    	<label for="editor-comment" class='ui-input-text'>Comment</label>
    	<textarea class="editor-input" id="editor-comment"></textarea>
	</div>
	
	<!--  HTML Content -->
	<div data-role="fieldcontain" class="category-comment">
    	<label for="editor-html" class='ui-input-text'>Html Content</label>
    	<textarea class="editor-input" id="editor-html"></textarea>
	</div>		
	
	<!--  submit button -->	
	<div class="ui-body ui-body-b" >
		<fieldset class="ui-grid-b">
				<div class="ui-block-a"><button type="submit" id="delete-button" data-theme="a" data-mini="true">Delete</button></div>		
				<div class="ui-block-b"><button type="submit" id="cancel-button" data-theme="a" data-mini="true">Cancel</button></div>
				<div class="ui-block-c"><button type="submit" id="submit-button" data-theme="a" data-mini="true">Submit</button></div>
	    </fieldset>
	</div>
	</div>
	</form>
	
	</div><!-- /content -->

	<div data-role="footer" class="ui-bar" data-position="fixed" data-id="foo1" data-tap-toggle="false">
		<h4></h4>
	</div><!-- /footer -->
</div>

<!-- ************************** -->
<div data-role="page" id="option">
    <div data-role="content">
        <form id="option" action="">
            <div data-role="fieldcontain">
                <label for="toggleswitch1">
                    Editor
                </label>
                <select name="toggleswitch1" id="toggles-editor-mode" data-theme="" data-role="slider"
                data-mini="true">
                    <option value="off">
                        Off
                    </option>
                    <option value="on">
                        On
                    </option>
                </select>
               <!--  <label for="toggleswitch2">
                    Goto Automatic Parashat Hashavoua
                </label>
                <select name="toggleswitch2" id="toggles-automatic-current-parasha" data-theme="" data-role="slider"
                data-mini="true">
                    <option value="off">
                        Off
                    </option>
                    <option value="on">
                        On
                    </option>
                </select>-->
                
            </div>
            <input id="return_option" type="submit" value="return">
        </form>
    </div>
</div>
<!-- ****************************** -->
<div data-role="page" id="table-all-comments">
    <div data-role="content">
     <div id="table-x"></div>
    
    
      <br/><br/>
	  <input id="return_option_data_table" type="submit" value="return">
    </div>
</div>
<!-- ****************************** -->
<div data-role="page" id="allIntro">
    <div data-role="content">
       <div id="intro_body"></div>
       
    
      <br/><br/>
	  <input id="return_option_data_table" type="submit" value="return">
    </div>
</div>


</body>
</html>