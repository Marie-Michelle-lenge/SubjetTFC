<?php 
    require 'back/config.php';
    if(isset($_POST["intitule"]) && isset($_POST["theme"]) && isset($_POST["problematique"]) && isset($_POST["hypothese"]) && isset($_POST["etatArt"])){
        $intitule=$_POST["intitule"];
        $theme=$_POST["theme"];
        $problematique=$_POST["problematique"];
        $hypothese=$_POST["hypothese"];
        $etatArt=$_POST["etatArt"];
        $annAcad=$_POST["annAcad"];
        if(session_status() == PHP_SESSION_NONE) session_start();
        $matricule = $_SESSION["matricule"];
    

        $duplicate=mysqli_query($conn, 'SELECT * FROM  suject where intitule = "$intitule" ');
        $suject= mysqli_query($conn, 'SELECT * FROM  suject where matricule = "$matricule" ');
        
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('ce sujec exise');</script>";
         } elseif (mysqli_num_rows($suject) > 0) {
            echo "<script> alert('vous avez deja ajoute un suject');</script>";
         }
         else{
            if(session_status() == PHP_SESSION_NONE) session_start();
            $matricule = $_SESSION["matricule"];
            $query= 'INSERT INTO suject(intitule,theme,problematique,hypothese,etatArt,annAcad,matricule) VALUES("$intitule","$llltheme","$problematique","$hypothese","$etatArt","$annAcad","$matricule")';
            mysqli_query($conn,$query);
            
            echo "<script> alert('l'enregistrement a reussi');</script>";
            
            header("Location: /SubjetTFC/gestion-tfc.php");
    }}
    
?>
<!DOCTYPE html>

<html  dir="ltr" lang="fr" xml:lang="fr">
<head>
    <title>Retrouver tout les TFC: Se connecter sur le site</title>
    <link rel="shortcut icon" href="https://www.esisalama.net/elearning/theme/image.php/klass/theme/1632863867/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, ESIS Enseignement en ligne: Se connecter sur le site" />
<link rel="stylesheet" type="text/css" href="https://www.esisalama.net/elearning/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://www.esisalama.net/elearning/theme/styles.php/klass/1632863867_1632863891/all" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/www.esisalama.net\/elearning","sesskey":"p5mrlo0nU7","sessiontimeout":"28800","themerev":"1632863867","slasharguments":1,"theme":"klass","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1632863867","admin":"admin","svgicons":true,"usertimezone":"Afrique\/Lubumbashi","contextid":1,"langrev":1632863867,"templaterev":"1632863867"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/www.esisalama.net\/elearning\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/www.esisalama.net\/elearning\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/www.esisalama.net\/elearning\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/www.esisalama.net\/elearning\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/www.esisalama.net\/elearning\/theme\/yui_combo.php?m\/1632863867\/","combine":true,"comboBase":"https:\/\/www.esisalama.net\/elearning\/theme\/yui_combo.php?","ext":false,"root":"m\/1632863867\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-beautify":{},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/www.esisalama.net\/elearning\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/www.esisalama.net\/elearning\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1632863867\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/www.esisalama.net\/elearning\/lib\/javascript.php\/1632863867\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/www.esisalama.net\/elearning\/lib\/javascript.php\/1632863867\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.8\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<meta name="robots" content="noindex" /><meta name="robots" content="noindex" /><meta name="robots" content="noindex" /><meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-login-index" class="format-site  path-login chrome dir-ltr lang-fr yui-skin-sam yui3-skin-sam www-esisalama-net--elearning pagelayout-login course-1 context-1 notloggedin ">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Passer au contenu principal</a>
</div><script src="https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/babel-polyfill/polyfill.min.js"></script>
<script src="https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/polyfills/polyfill.js"></script>
<script src="https://www.esisalama.net/elearning/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js">
    
</script><script src="https://www.esisalama.net/elearning/theme/jquery.php/core/jquery-3.5.1.min.js"></script>
<script src="https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    <nav id="header" role="banner" class="fixed-top navbar navbar-light bg-faded navbar-expand moodle-has-zindex">

     <div class="container navbar-nav">

        <div data-region="drawer-toggle" class="d-inline-block mr-3">
            <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Panneau latéral</span>
            <span aria-hidden="true"> </span>
            <span aria-hidden="true"> </span>
            <span aria-hidden="true"> </span>
            </button>
        </div>


        <ul class="nav navbar-nav ml-auto">
            <div class="d-none d-lg-block">
                
            </div>
              <!-- navbar_plugin_output -->
            <li class="nav-item">
            
            </li>
            <!-- user_menu -->
            <li class="nav-item d-flex align-items-center">
                <div class="usermenu"><span class="login">connecté.</span></div>
            </li>
        </ul>

       <!-- search_box -->
    </div>

</nav>


<div class="header-main">
    <div class="header-main-content">
        <div class="container">

            <div class="navbar">
                <div class="navbar-inner">
                <div id="logo">
                    <a href="https://www.esisalama.net/elearning/?redirect=0" class="navbar-brand has-logo
                    ">
                    <span class="logo">
                        <img src="//www.esisalama.net/elearning/pluginfile.php/1/theme_klass/logo/1632863867/Logo%20Google%20Education.png" alt="ESIS Elearning">
                    </span>
                    </a>
                </div>

                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>

                <div class="collapse navbar-toggleable-md" id="navbarResponsive">

                <div class="infoarea ">

                    <!-- custom_menu -->
                    <li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-6510b5e3e74926510b5e3c50c86" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Langue" aria-controls="drop-down-menu-6510b5e3e74926510b5e3c50c86">
        Français ‎(fr)‎
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-6510b5e3e74926510b5e3c50c86" aria-labelledby="drop-down-6510b5e3e74926510b5e3c50c86">
                <a class="dropdown-item" role="menuitem" href="https://www.esisalama.net/elearning/login/index.php?lang=en" title="English ‎(en)‎">English ‎(en)‎</a>
                <a class="dropdown-item" role="menuitem" href="https://www.esisalama.net/elearning/login/index.php?lang=fr" title="Français ‎(fr)‎">Français ‎(fr)‎</a>
    </div>
</li>
                    <!-- page_heading_menu -->

                </div>
                </div>
                </div>
            </div>

            <div class="clearfix"></div>
       </div>
    </div>
    
</div>

    <div id="page" class="container-fluid mt-0">
        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12">
                <section id="region-main" class="col-12">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><div class="my-1 my-sm-5"></div>
<div class="row justify-content-center">
<div class="col-xl-6 col-sm-11 push-sm-1">
<div class="card">
    <div class="card-block">
            <h2 class="card-header text-center" ><img src="https://www.esisalama.net/elearning/pluginfile.php/1/core_admin/logo/0x200/1632863867/logo.png" title="ESIS Enseignement en ligne" alt="ESIS Enseignement en ligne"/></h2>
        <div class="card-body">


            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <form class="mt-3" action="" method="post" id="login">
                        <input id="anchor" type="hidden" name="anchor" value="">
                        <script>document.getElementById('anchor').value = location.hash;</script>
                        <input type="hidden" name="logintoken" value="tZC4dejbWg2vHkyI1SG7BY3SKSIoa3ly">
                        <div class="form-group">
                            <label for="username" class="sr-only">
                                    intitule du Suject
                            </label>
                            <input type="text" name="intitule" id="username"
                                class="form-control"
                                value=""
                                placeholder="intiltule du suject">
                        </div>

                        <div class="form-group">
                            <label for="username" class="sr-only">
                                    theme
                            </label>
                            <input type="text" name="theme" id="username"
                                class="form-control"
                                value=""
                                placeholder="Theme">
                        </div>

                        <div class="form-group">
                            <label for="username" class="sr-only">
                                    problematique
                            </label>
                            <input type="text" name="problematique" id="username"
                                class="form-control"
                                value=""
                                placeholder="problematique">
                        </div>

                        <div class="form-group">
                            <label for="username" class="sr-only">
                                    hypothese
                            </label>
                            <input type="text" name="hypothese" id="username"
                                class="form-control"
                                value=""
                                placeholder="hypothese">
                        </div>

                        <div class="form-group">
                            <label for="username" class="sr-only">
                                    etatArt
                            </label>
                            <input type="text" name="etatArt" id="username"
                                class="form-control"
                                value=""
                                placeholder="etatArt">
                        </div>

                        <div class="form-group">
                            <label for="username" class="sr-only">
                                    anneeacademique
                            </label>
                            <input type="text" name="annAcad" id="username"
                                class="form-control"
                                value=""
                                placeholder="Annee Academique">
                        </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Deposer le Suject</button>
                    </form>
                </div>

                
            </div>
        </div>
    </div>
</div>
</div>
</div></div>
                    
                </section>
            </div>
        </div>
    </div>
</div><div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
    <nav class="list-group" aria-label="">
        <ul>
                <li>
                    <a class="list-group-item list-group-item-action  " href="https://www.esisalama.net/elearning/" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                        <div class="ml-0">
                            <div class="media">
                                    <span class="media-left">
                                        <i class="icon fa fa-home fa-fw " aria-hidden="true"  ></i>
                                    </span>
                                <span class="media-body ">Accueil</span>
                            </div>
                        </div>
                    </a>
                </li>
        </ul>
    </nav>
</div><footer id="footer" class="py-1 bg-inverse">
   <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="infoarea">
                        <div class="footer-logo">
                            <a href="https://www.esisalama.net/elearning/?redirect=0">
                                <img src="//www.esisalama.net/elearning/pluginfile.php/1/theme_klass/footerlogo/1632863867/Logo%20Google%20Education.png" alt="klass">
                            </a>
                        </div>
                        
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <h5 class="nopadding">Nous contacter</h5>
                        <p>5 Avenue Femmes Katangaise, Lubumbashi, RDCongo</p>
                        <p><i class="fa fa-phone-square"></i>Téléphone : +(243) 82 226 74 72</p>
                        <p><i class="fa fa-envelope"></i>Courriel : <a class="mail-link" href="mailto:apparitorat@esisalama.org"> apparitorat@esisalama.org</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-media">
                    <h5>ajoutez un réseau social</h5>
                    <ul>
                            <li class="smedia-01">
                                <a href="https://www.facebook.com/EsisOfficiel" target="_blank">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>

                            <li class="smedia-02">
                                <a href="#" target="_blank">
                                    <i class="fa fa-pinterest-square"></i>
                                </a>
                            </li>

                            <li class="smedia-03">
                                <a href="#" target="_blank">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                            </li>

                            <li class="smedia-04">
                                <a href="#" target="_blank">
                                   <i class="fa fa-google-plus-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-foot">
        <div class="container">
                <p>Copyright &copy; ESIS 2021 . Powered by CREDIA</p>
        </div>
    </div>

</footer>

<!--E.O.Footer-->

<div class="tool_dataprivacy"><a href="https://www.esisalama.net/elearning/admin/tool/dataprivacy/summary.php">Résumé de conservation de données</a></div><a href="https://download.moodle.org/mobile?version=2020110904&amp;lang=fr&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Obtenir l'app mobile</a>
<script>
//<![CDATA[
var require = {
    baseUrl : 'https://www.esisalama.net/elearning/lib/requirejs.php/1632863867/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/jquery/jquery-3.5.1.min',
        jqueryui: 'https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://www.esisalama.net/elearning/lib/javascript.php/1632863867/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
require(['core/prefetch']);
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('fr');
});;

require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
    CustomEvents.define('#single_select6510b5e3c50c82', [CustomEvents.events.accessibleChange]);
    $('#single_select6510b5e3c50c82').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f6510b5e3c50c81').submit();
        }
    });
});
;

require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
    CustomEvents.define('#single_select6510b5e3c50c85', [CustomEvents.events.accessibleChange]);
    $('#single_select6510b5e3c50c85').on(CustomEvents.events.accessibleChange, function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f6510b5e3c50c84').submit();
        }
    });
});
;

require(['theme_boost/loader']);
require(['theme_boost/drawer'], function(mod) {
    mod.init();
});
;

;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(1, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});M.util.js_complete("core/first");
});
//]]>
</script>
<script src="https://www.esisalama.net/elearning/lib/javascript.php/1632863867/theme/klass/javascript/theme.js"></script>
<script src="https://www.esisalama.net/elearning/theme/javascript.php/klass/1632863867/footer"></script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Modifi\u00e9 le","name":"Nom","error":"Erreur","info":"Information","yes":"Oui","no":"Non","cancel":"Annuler","confirm":"Confirmer","areyousure":"En \u00eates-vous bien s\u00fbr\u00a0?","closebuttontitle":"Fermer","unknownerror":"Erreur inconnue","file":"Fichier","url":"URL"},"repository":{"type":"Type","size":"Taille","invalidjson":"Cha\u00eene JSON non valide","nofilesattached":"Aucun fichier joint","filepicker":"S\u00e9lecteur de fichiers","logout":"D\u00e9connexion","nofilesavailable":"Aucun fichier disponible","norepositoriesavailable":"D\u00e9sol\u00e9, aucun de vos d\u00e9p\u00f4ts actuels ne peut retourner de fichiers dans le format requis.","fileexistsdialogheader":"Le fichier existe","fileexistsdialog_editor":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint au texte que vous modifiez.","fileexistsdialog_filemanager":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint","renameto":"Renommer \u00e0 \u00ab\u00a0{$a}\u00a0\u00bb","referencesexist":"Il y a {$a} liens qui pointent vers ce fichier","select":"S\u00e9lectionnez"},"admin":{"confirmdeletecomments":"Voulez-vous vraiment supprimer des commentaires\u00a0?","confirmation":"Confirmation"},"debug":{"debuginfo":"Info de d\u00e9bogage","line":"Ligne","stacktrace":"Trace de la pile"},"langconfig":{"labelsep":"&nbsp;"}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"fr"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random6510b5e3c50c88'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random6510b5e3c50c88'); });
})();
//]]>
</script>