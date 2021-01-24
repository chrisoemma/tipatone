<!DOCTYPE html>
<html lang="en-US" class="no-js">
    
     <?php require_once('session.php'); ?>

<?php include_once 'head.php'; ?>

<?php

function display_msg($msg =''){
   $output = array();
   if(!empty($msg)) {
      foreach ($msg as $key => $value) {
         $output  = "<div class=\"alert alert-{$key}\">";
         $output .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>";
         $output .= remove_junk(first_character($value));
         $output .= "</div>";
      }
      return $output;
   } else {
     return "" ;
   }
}

?>

 

    <body class="home page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-260 masthead-fixed full-width home_absolute_header grid">
        <!-- page preloader -->
        <div class="preloader">
            <div class="preloader_image to_animate" data-animation="pulse"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
            <i class="rt-icon2-cross2"></i>
        </span>
            </button>
            <div class="widget widget_search">

                <form role="search" method="get" class="search-form form-inline" action="#">
                    <div class="form-group">
                        <label>
                            <input type="search" class="search-field form-control" placeholder="Search" value="" name="s" title="Search for:" />
                        </label>
                    </div>
                    <button type="submit" class="search-submit theme_button">
                        <span class="screen-reader-text">Search</span>
                    </button>
                </form>
            </div>
        </div>
        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding">
            </div>
        </div>
        <!-- eof .modal -->

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas" class="wide">
            <div id="box_wrapper">
                <!-- template sections -->
                <?php include_once 'header.php'; ?>
                    <p>&nbsp;</p>
                    <!-- eof .page_header -->
                    <div class="fw-page-builder-content">
                        <!--                <section id="section-42678b9" class="fw-main-row section  section_padding_top_0 section_padding_bottom_0 columns_padding_15 fullwidth-section horizontal-paddings-0">
                    <h3 class="hidden"> Slider</h3>
                    <div class="section-overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <link href="https://fonts.googleapis.com/css?family=Muli:400%2C700%7CPlayfair+Display:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                            <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                 START REVOLUTION SLIDER 5.4.7.3 fullwidth mode 
                                <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.3">
                                    <ul>
                                         SLIDE  
                                        <li data-index="rs-2" data-transition="cube-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="uploads/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide-1" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                             MAIN IMAGE 
                                            <img src="uploads/slide1.jpg" alt="" title="slide1" width="1920" height="980" data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                             LAYERS 

                                             LAYER NR. 1 
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-40" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['543','295','295','309']" data-width="['none','none','none','339']" data-height="['none','none','none','122']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 24px; font-weight: 400; color: #a5a5a5; letter-spacing: 0px;font-family:Muli;">Our Law Firm believes that client's success determines our own.
                                                <br> So we ensure both by collaborating with our clients to achieve their goals. </div>

                                             LAYER NR. 2 
                                            <div class="tp-caption   tp-resizeme" id="slide-2-layer-41" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['408','185','185','140']" data-fontsize="['62','42','42','34']" data-lineheight="['62','44','44','36']" data-letterspacing="['-1','-1','-1','0']" data-width="['none','none','none','322']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 62px; line-height: 62px; font-weight: 400; color: #ffffff; letter-spacing: -1px;font-family:Playfair Display;">The International Law Firm for Business </div>

                                             LAYER NR. 3 
                                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-2-layer-42" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['503','265','265','277']" data-width="90" data-height="4" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(200,172,72);"> </div>

                                             LAYER NR. 4 
                                            <div class="tp-caption rev-btn " id="slide-2-layer-44" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['645','445','445','480']" data-letterspacing="['0','','','']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/webdesign-finder.com\/flavius\/about","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2700,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(212,190,111);bc:rgb(212,190,111);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[16,16,16,16]" data-paddingright="[38,38,38,38]" data-paddingbottom="[16,16,16,16]" data-paddingleft="[38,38,38,38]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Muli;text-transform:uppercase;background-color:rgb(200,172,72);border-color:rgb(200,172,72);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Read more </div>
                                        </li>
                                         SLIDE  
                                        <li data-index="rs-12" data-transition="cube" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="uploads/slide2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide-2" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                             MAIN IMAGE 
                                            <img src="uploads/slide2.jpg" alt="" title="slide2" width="1920" height="980" data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                             LAYERS 

                                             LAYER NR. 5 
                                            <div class="tp-caption   tp-resizeme" id="slide-12-layer-40" data-x="['center','center','center','center']" data-hoffset="['0','1','1','0']" data-y="['top','top','top','top']" data-voffset="['528','310','310','309']" data-width="['none','none','none','339']" data-height="['none','none','none','122']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 24px; font-weight: 400; color: #a5a5a5; letter-spacing: 0px;font-family:Muli;">We aim to support families in resolving their own disputes.
                                                <br> We ensure professional consultancy and result. </div>

                                             LAYER NR. 6 
                                            <div class="tp-caption   tp-resizeme" id="slide-12-layer-41" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['393','200','200','140']" data-fontsize="['62','42','42','34']" data-lineheight="['62','46','46','36']" data-letterspacing="['-1','-1','-1','0']" data-width="['859','576','576','322']" data-height="['74','55','55','none']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 859px; max-width: 859px; max-width: 74px; max-width: 74px; white-space: nowrap; font-size: 62px; line-height: 62px; font-weight: 400; color: #ffffff; letter-spacing: -1px;font-family:Playfair Display;">Great Lawyers. Great Law Firm. </div>

                                             LAYER NR. 7 
                                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-12-layer-42" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['488','280','280','260']" data-width="90" data-height="4" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(200,172,72);"> </div>

                                             LAYER NR. 8 
                                            <div class="tp-caption rev-btn " id="slide-12-layer-44" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['630','460','460','480']" data-letterspacing="['0','','','']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/webdesign-finder.com\/flavius\/about","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2700,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(212,190,111);bc:rgb(212,190,111);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[16,16,16,16]" data-paddingright="[38,38,38,38]" data-paddingbottom="[16,16,16,16]" data-paddingleft="[38,38,38,38]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Muli;text-transform:uppercase;background-color:rgb(200,172,72);border-color:rgb(200,172,72);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Read more </div>
                                        </li>
                                         SLIDE  
                                        <li data-index="rs-13" data-transition="3dcurtain-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="uploads/slide3-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide-3" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                             MAIN IMAGE 
                                            <img src="uploads/slide3.jpg" alt="" title="slide3" width="1920" height="980" data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                             LAYERS 

                                             LAYER NR. 9 
                                            <div class="tp-caption   tp-resizeme" id="slide-13-layer-40" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['528','310','310','309']" data-width="['none','none','none','339']" data-height="['none','none','none','122']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 24px; font-weight: 400; color: #a5a5a5; letter-spacing: 0px;font-family:Muli;">We have experts all over the world
                                                <br>and they are ready to help you anytime and anywhere. </div>

                                             LAYER NR. 10 
                                            <div class="tp-caption   tp-resizeme" id="slide-13-layer-41" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['393','200','200','140']" data-fontsize="['62','42','42','34']" data-lineheight="['62','50','50','36']" data-letterspacing="['-1','-1','-1','0']" data-width="['828','551','551','328']" data-height="['75','56','56','81']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 828px; max-width: 828px; max-width: 75px; max-width: 75px; white-space: nowrap; font-size: 62px; line-height: 62px; font-weight: 400; color: #ffffff; letter-spacing: -1px;font-family:Playfair Display;">We Know Immigration Matters </div>

                                             LAYER NR. 11 
                                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-13-layer-42" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['488','280','280','266']" data-width="90" data-height="4" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(200,172,72);"> </div>

                                             LAYER NR. 12 
                                            <div class="tp-caption rev-btn " id="slide-13-layer-44" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['630','460','460','480']" data-letterspacing="['0','','','']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"http:\/\/webdesign-finder.com\/flavius\/about","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2700,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(212,190,111);bc:rgb(212,190,111);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[16,16,16,16]" data-paddingright="[38,38,38,38]" data-paddingbottom="[16,16,16,16]" data-paddingleft="[38,38,38,38]" style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Muli;text-transform:uppercase;background-color:rgb(200,172,72);border-color:rgb(200,172,72);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Read more </div>
                                        </li>
                                    </ul>
                                    <script>
                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                        var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>
                                <script>
                                    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                    var htmlDivCss = "";
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement("div");
                                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                                <script type="text/javascript">
                                    if (setREVStartSize !== undefined) setREVStartSize({
                                        c: '#rev_slider_2_1',
                                        responsiveLevels: [1240, 1024, 778, 480],
                                        gridwidth: [1240, 1024, 778, 480],
                                        gridheight: [980, 640, 550, 600],
                                        sliderLayout: 'fullwidth'
                                    });

                                    var revapi2,
                                        tpj;
                                    (function() {
                                        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
                                        else onLoad();

                                        function onLoad() {
                                            if (tpj === undefined) {
                                                tpj = jQuery;
                                                if ("off" == "on") tpj.noConflict();
                                            }
                                            if (tpj("#rev_slider_2_1").revolution == undefined) {
                                                revslider_showDoubleJqueryError("#rev_slider_2_1");
                                            } else {
                                                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                    sliderType: "standard",
                                                    jsFileLocation: "theme/plugins/rev-slider/js/",
                                                    sliderLayout: "fullwidth",
                                                    dottedOverlay: "none",
                                                    delay: 9000,
                                                    particles: {
                                                        startSlide: "first",
                                                        endSlide: "last",
                                                        zIndex: "1",
                                                        particles: {
                                                            number: {
                                                                value: 80
                                                            },
                                                            color: {
                                                                value: "#ffffff"
                                                            },
                                                            shape: {
                                                                type: "circle",
                                                                stroke: {
                                                                    width: 0,
                                                                    color: "#ffffff",
                                                                    opacity: 1
                                                                },
                                                                image: {
                                                                    src: ""
                                                                }
                                                            },
                                                            opacity: {
                                                                value: 0.1,
                                                                random: true,
                                                                min: 0.1,
                                                                anim: {
                                                                    enable: false,
                                                                    speed: 3,
                                                                    opacity_min: 0,
                                                                    sync: false
                                                                }
                                                            },
                                                            size: {
                                                                value: 2,
                                                                random: false,
                                                                min: 30,
                                                                anim: {
                                                                    enable: false,
                                                                    speed: 40,
                                                                    size_min: 1,
                                                                    sync: false
                                                                }
                                                            },
                                                            line_linked: {
                                                                enable: true,
                                                                distance: 150,
                                                                color: "#ffffff",
                                                                opacity: 0.05,
                                                                width: 1
                                                            },
                                                            move: {
                                                                enable: true,
                                                                speed: 6,
                                                                direction: "none",
                                                                random: true,
                                                                min_speed: 6,
                                                                straight: false,
                                                                out_mode: "out"
                                                            }
                                                        },
                                                        interactivity: {
                                                            events: {
                                                                onhover: {
                                                                    enable: false,
                                                                    mode: "repulse"
                                                                },
                                                                onclick: {
                                                                    enable: false,
                                                                    mode: "repulse"
                                                                }
                                                            },
                                                            modes: {
                                                                grab: {
                                                                    distance: 400,
                                                                    line_linked: {
                                                                        opacity: 0.5
                                                                    }
                                                                },
                                                                bubble: {
                                                                    distance: 400,
                                                                    size: 40,
                                                                    opacity: 0.4
                                                                },
                                                                repulse: {
                                                                    distance: 200
                                                                }
                                                            }
                                                        }
                                                    },
                                                    navigation: {
                                                        keyboardNavigation: "off",
                                                        keyboard_direction: "horizontal",
                                                        mouseScrollNavigation: "off",
                                                        mouseScrollReverse: "default",
                                                        onHoverStop: "off",
                                                        touch: {
                                                            touchenabled: "on",
                                                            touchOnDesktop: "off",
                                                            swipe_threshold: 75,
                                                            swipe_min_touches: 50,
                                                            swipe_direction: "horizontal",
                                                            drag_block_vertical: false
                                                        },
                                                        bullets: {
                                                            enable: true,
                                                            hide_onmobile: true,
                                                            hide_under: 480,
                                                            style: "flavius",
                                                            hide_onleave: false,
                                                            direction: "vertical",
                                                            h_align: "right",
                                                            v_align: "center",
                                                            h_offset: 10,
                                                            v_offset: 0,
                                                            space: 5,
                                                            tmp: ''
                                                        }
                                                    },
                                                    responsiveLevels: [1240, 1024, 778, 480],
                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                    gridwidth: [1240, 1024, 778, 480],
                                                    gridheight: [980, 640, 550, 600],
                                                    lazyType: "none",
                                                    parallax: {
                                                        type: "scroll",
                                                        origo: "enterpoint",
                                                        speed: 400,
                                                        speedbg: 0,
                                                        speedls: 0,
                                                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 47, 48, 49, 50, 51, 55],
                                                    },
                                                    shadow: 0,
                                                    spinner: "off",
                                                    stopLoop: "off",
                                                    stopAfterLoops: -1,
                                                    stopAtSlide: -1,
                                                    shuffle: "off",
                                                    autoHeight: "off",
                                                    disableProgressBar: "on",
                                                    hideThumbsOnMobile: "off",
                                                    hideSliderAtLimit: 0,
                                                    hideCaptionAtLimit: 0,
                                                    hideAllCaptionAtLilmit: 0,
                                                    debugMode: false,
                                                    fallbacks: {
                                                        simplifyAll: "off",
                                                        nextSlideOnWindowFocus: "off",
                                                        disableFocusListener: false,
                                                    }
                                                });
                                            }; /* END OF revapi call */

                                            RsParticlesAddOn(revapi2);

                                        }; /* END OF ON LOAD FUNCTION */
                                    }()); /* END OF WRAPPING FUNCTION */
                                </script>
                                <script>
                                    var htmlDivCss = unescape(".flavius.tp-bullets%20%7B%0A%20%20%20%20width%3A%2070px%20%21important%3B%0A%20%20%20%20text-align%3A%20center%3B%0A%20%20%20%20display%3A%20block%3B%0A%20%20%20%20height%3A%20auto%20%21important%3B%0A%7D%0A%40media%28min-width%3A%201680px%29%20%7B%0A.flavius.tp-bullets%20%7B%20%0A%20%20%20%20transform%3A%20matrix%281%2C%200%2C%200%2C%201%2C%20-170%2C%20-15%29%20%21important%3B%0A%7D%0A%7D%0A%0A.flavius%20.tp-bullet%20%7B%0A%09width%3A70px%3B%0A%09height%3Aauto%3B%0A%20%20%20%20padding%3A%205px%200%3B%0A%20%20%20%20left%3A%20auto%20%21important%3B%0A%20%20%20%20right%3A%20auto%20%21important%3B%0A%20%20%20%20background%3A%20transparent%3B%0A%20%20%20%20text-align%3A%20center%3B%0A%09position%3Arelative%3B%0A%7D%0A.flavius%20.tp-bullet%3Abefore%20%7B%0A%09position%3Aabsolute%3B%0A%20%20%20%20left%3A%2050%25%20%21important%3B%0A%20%20%20%20transform%3A%20translateX%28-50%25%29%20%21important%3B%0A%09content%3A%22%20%22%3B%0A%09width%3A50px%3B%0A%09height%3A2px%3B%0A%20%20%20%20background%3A%23a5a5a5%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20%20%20transition%3A%20all%200.2s%20ease%200s%3B%0A%7D%0A.flavius%20.tp-bullet%3Ahover%3Abefore%2C%0A.flavius%20.tp-bullet.selected%3Abefore%20%7B%0A%09background%3A%20%23c8ac48%3B%0A%20%20%20%20width%3A70px%3B%0A%09height%3A4px%3B%0A%7D%0A%0A");
                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                            </div>
                             END REVOLUTION SLIDER 
                        </div>
                    </div>
                </section>-->
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <section id="section-d0a72da" class="fw-main-row section  section_padding_top_65 section_padding_bottom_100 columns_padding_0 background_cover mobile-overlay">
                            <h3 class="hidden"> About</h3>
                            <div class="section-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div id="da4e9aa" class="col-xs-12 col-md-6 to_animate fw-column" data-animation="fadeInUp">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="img-wrap with_divider divider_1 "><img src="uploads/number_01.png" alt="uploads/number_01.png" class="with_divider divider_1 " /></div>

                                            <div id="divider-1ad0d4b" class="fw-divider-space "></div>

                                            <div class="special-heading text-left">
                                                <h2 class="section_header margin_0  ">
    <span class="highlight regular text-transform-none ">
        Welcome to Tipatone </span>
    </h2>
                                            </div>

                                            <div id="divider-0840d59" class="fw-divider-space "></div>

                                            <div class="special-heading text-left">
                                                <p class=" paragraph">
                                                    <span class="darkgrey regular text-transform-none ">
                                            Tipatone Limited is a full service digital agency. With providing full services based on data driven advertising, brand presence and social media advertising we create well rounded up story in order to fulfill your goals.   
                                            </span>
                                                </p>
                                            </div>
                                            <div id="divider-167690d" class="fw-divider-space "></div>
                                            <div class="text-block shortcode ">
                                                <p>
                                                    It was established in 2017 . Our team consists of people with various expertise and interests, with a great number of projects behind us. Along those projects comes great experience but knowledge as well – in the field of Internet marketing, programming, design and Public Relations.
                                                </p>

                                                <p>We strongly believe that a trusted relationship is built on the foundation of shared values and deep understanding of our clients’ needs. Thus, we blend professional expertise with the business objectives of our clients and develop a strong grasp of their businesses before coming up with bespoke solutions.</p>

                                            </div>

                                            <!--                                    <div class="fw-theme-signature">
                                        <div class="text-part">
                                            <h4 class="section_header">Paul Small</h4>
                                            <div class="desc highlight">Founder of the Flavius</div>
                                        </div>
                                        <div class="img-part">
                                            <img src="uploads/signature.png" alt="Paul Small">
                                        </div>
                                    </div>-->

                                            <!--<div id="divider-9df6d89" class="fw-divider-space "></div>-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section-77915c4" class="fw-main-row section  section_padding_top_65 section_padding_bottom_40 columns_padding_15 parallax background_cover ds">
                            <h3 class="hidden"> Services</h3>
                            <div class="section-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div id="column-e99c11c" class="col-xs-12 text-center col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="img-wrap with_divider divider_2 "><img src="uploads/number_02.png" alt="uploads/number_02.png" class="with_divider divider_2 " /></div>

                                            <div id="divider-83214a1" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <h2 class="section_header margin_0  ">
    <span class="lightfont regular text-transform-none ">
        OUR SERVICES    </span>
    </h2>
                                            </div>

                                            <div id="divider-c8126ce" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <p class=" paragraph">
                                                    <span class="greyfont regular text-transform-none ">
        We are dedicated to provide the highest level of digital marketing services tailored to suit the clients needs  </span>
                                                </p>
                                            </div>

                                            <div id="divider-68e2848" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                            <div id="divider-13c5bb1" class="fw-divider-space  hidden-lg hidden-md"></div>

                                        </div>
                                    </div>
                                    <div id="column-41b73f2" class="col-xs-12 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">

                                            <div class="columns_padding_15">
                                                <div class="isotope_container isotope row masonry-layout shortcode-service">

                                                    <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc52804134b" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <img src="uploads/advert.png"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#">DATA DRIVEN ADVERTISING</a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>Through 45+ supply sources, 2.5 million sites and apps, 20+ unique and interactive creatives (Adverts) with more than 1.5 billion consumers reach world wide and more than 10 million for Tanzania. We use data points in targeting our clients potential customers with great efficiency and a great return on investment. Our targeting options being Tech (Device Brand & Model, Browser, Operating system,Operator, Price Ranges) Behavioral (Interests, Retargeting, Visited Sites & Apps, Visited  Locations, Geofence, Social Economic Class), Demograthics(Age,Gender, Location, Hyper-location) </p>
                                                                </div>
                                                            </div>
 
                                                        </div>
                                                    </div>

                                                    <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc528041693" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <img src="uploads/social.png"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#"> SOCIAL MEDIA MARKETING
 & INTERNET ADVERTISING    </a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>Today’s communication is unthinkable without Social Media. 18 years ago Brands were just products and services. Any communication with them was much harder. And now, through the digital revolution, this and much more is possible. Social media became an part of the everyday life. With our experience we can help you set out a strategy to reach the market and also run your social media accounts.<br>
                                                                        We also provide:
                                                                        <ul>
                                                                         <li>Distribution of the budget to maximize goals of the advertising campaigns.</li> 
                                                                         <li>Proposing formats and channels for most efficient digital advertising, tracking conversion and analyzing data,
adjusting according to collected information. </li> 
                                                                         <li>Quality targeting of audience (age, sex, location, interests…) which allows us to truly offer clients’ messages to
those who will be interested in it.</li> 
                                                                         <li>Complete analytical report at the end of each campaign with all key metrics, stats and numbers, as well as
propositions for further action.</li>
                                                                        </ul>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc528041891" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <img src="uploads/coding.png"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#">
               DESIGN AND DEVELOPMENT            </a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>We provide custom development services. Our team has many years of experience developing web applications
and games. We take full charge of the project: from the initial idea and concepts to design and development.
We have assembled an experienced team that has many years of experience developing web applications.
Our only goal is to do things right and that’s why we take full charge of the project: from the initial idea and
concepts to design and development. <br>
THINGS WE DO:<br>
<ul type="bullets">
    <li>Websites</li>
    <li>Custom Apps</li>
    <li>UI/UX Mockup Designs</li>
    <li>Front End Development</li>
</ul>
</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc528041a7b" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <img src="uploads/bulk.png"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#">
                Bulk SMS Management            </a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>Reach non-internet users at scale wherever they are in the Tanzania, with  SMS alerts to keep them informed when it counts. Send targeted SMS to your different customers and have them be informed on various promotions and information.</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                  <!--  <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc528041c5f" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <i class="icon icon-person"></i> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#">
               Intellectual Properties           </a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>In a dynamic commercial landscape with ever expanding technological horizon, it is important for business to gain value from their intellectual capital and knowledge-based aspects. Intellectual property laws entails copyrights, trademarks and patent rights. We do registration and timely renewal of the trademarks, patent and copyrights. We protect and defend our client’s intellectual property right in court of law once they are violated</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc528041e3e" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <i class="icon icon-bracelets"></i> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#">
               Alternative Dispute Resolution(ADR)            </a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>Law Exchange Associates’ team of ADR, work with our client to manage risk and to avoid litigation whenever possible. When litigation is unavoidable, our attorneys focus on the commercial objectives of clients while assessing legal, commercial and reputational risk to render our services. Professionalism is essential in settling dispute whether by arbitration, ,mediation, conciliation, adjudication or expert determination</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="isotope-item col-lg-4 col-md-4 col-sm-6 col-xs-12 services ">

                                                        <div id="service-5dbc528041e3e" class="service_item media-box icon_left">
                                                            <div class="box_icon">
                                                                <div class="service_icon size_big">
                                                                    <a class="permalink" href="#">
                                                                        <img src="uploads/advert.png"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="box-wrap">
                                                                <h5 class="box-heading">
            <a href="#">
              Regulatory and Compliances            </a>
        </h5>
                                                                <span class="short_line"><span></span></span>
                                                                <div class="excerpt">
                                                                    <p>Clients in sectors such as telecommunication, financial institutions, energy and utilities are increasingly turning to our regulatory lawyers for advice. we offer our expertise and fresh thinking in areas such as telecommunication, energy and utilities, fair competition, financial services and licensing. We interpret laws which regulate businesses and all personal work and conduct compliance reviews.</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> -->
                                            <!-- eof .columns_padding_* -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section-c66129d" class="fw-main-row section  section_padding_top_65 section_padding_bottom_85 columns_padding_15">
                            <h3 class="hidden"> Our Clients</h3>
                            <div class="section-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div id="column-e92a612" class="col-xs-12 text-center col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="img-wrap with_divider divider_3 "><img src="uploads/number_03.png" alt="uploads/number_03.png" class="with_divider divider_3 " /></div>

                                            <div id="divider-f2940c8" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <h2 class="section_header margin_0  ">
    <span class="highlight regular text-transform-none ">
        Our Clients </span>
    </h2>
                                            </div>

                                            <div id="divider-3419816" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <p class=" paragraph">
                                                    <span class="darkgrey regular text-transform-none ">
            </span>
                                                </p>
                                            </div>

                                            <div id="divider-2402bd2" class="fw-divider-space "></div>

                                        </div>
                                    </div>
                                    <div id="column-970dfdb" class="col-xs-12 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="shortcode-team owl-carousel  " data-autoplay="true" data-autoplaytimeout="3000" data-margin="30" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="3" data-nav="0" data-loop="true">
                                                <div class="owl-carousel-item attorneys ">
                                                    

                                                        <div class="item-media">
                                                            <a href="#">
                                                                <img width="371" height="585" src="uploads/team_01.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/team_01.png 371w, uploads/team_01-190x300.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> </a>
                                                        </div>
                                                        <div class="item-content ds">
                                                            <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
            <a href="#">
                        </a>
        </h6>
                                                            <span class="highlight"></span>
                                                            <div class="content-body">
                                                               <!-- <div class="team-social-icons">
                                                                    <span class="social-icons">
                <a href="https://www.facebook.com/#"
               class="social-icon soc-facebook "  target="_blank"></a>
                        <a href="https://www.twitter.com/#"
               class="social-icon soc-twitter "  target="_blank"></a>
                        <a href="https://youtube.com/#"
               class="social-icon soc-youtube "  target="_blank"></a>
                        <a href="https://www.plus.google.com/#"
               class="social-icon soc-google "  target="_blank"></a>
            </span>

                                                                </div> -->
                                                                <!-- eof social icons -->
                                                                <div class="desc">
                                                                    <p></p>
                                                                </div>
                                        <!--                        <div class="item-button topmargin_30">
                                                                    <a href="member.php?Attorney=Irene Shayo" class="theme_button wide_button color1">
                    Read More                </a>
                                                                </div>-->
                                                            </div>
                                                        </div>
                                                   
                                                    <!-- eof .vertical-item -->
                                                </div>
                                                <div class="owl-carousel-item attorneys ">
                                                    

                                                        <div class="item-media">
                                                            <a href="#">
                                                                <img width="371" height="585" src="uploads/team_02.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/team_02.png 371w, uploads/team_02-190x300.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> </a>
                                                        </div>
                                                        <div class="item-content ds">
                                                            <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
            <a href="#">
                      </a>
        </h6>
                                                            <span class="highlight"></span>
                                                            <div class="content-body">
                                                                <!--<div class="team-social-icons">
                                                                    <span class="social-icons">
                <a href="https://www.facebook.com/#"
               class="social-icon soc-facebook "  target="_blank"></a>
                        <a href="https://www.twitter.com/#"
               class="social-icon soc-twitter "  target="_blank"></a>
                        <a href="https://youtube.com/#"
               class="social-icon soc-youtube "  target="_blank"></a>
                        <a href="https://www.plus.google.com/#"
               class="social-icon soc-google "  target="_blank"></a>
            </span>

                                                                </div> -->
                                                                <!-- eof social icons -->
                                                                <div class="desc">
                                                                    <p>
                                                                    </p>
                                                                </div>
                                                              <!--  <div class="item-button topmargin_30">
                                                                    <a href="member.php?Attorney=Fides Mbuya" class="theme_button wide_button color1">
                    Read More                </a> 
                                                                </div>-->  
                                                            </div>
                                                        </div>
                                                   
                                                    <!-- eof .vertical-item -->
                                                </div>
                                                <div class="owl-carousel-item attorneys ">
                                                    

                                                        <div class="item-media">
                                                            <a href="#">
                                                                <img width="371" height="585" src="uploads/team_03.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/team_03.png 371w, uploads/team_03-190x300.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> </a>
                                                        </div>
                                                        <div class="item-content ds">
                                                            <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
            <a href="#">
                      </a>
        </h6>
                                                            <span class="highlight"></span>
                                                            <div class="content-body">
                                                       <!--         <div class="team-social-icons">
                                                                    <span class="social-icons">
                <a href="https://www.facebook.com/#"
               class="social-icon soc-facebook "  target="_blank"></a>
                        <a href="https://www.twitter.com/#"
               class="social-icon soc-twitter "  target="_blank"></a>
                        <a href="https://youtube.com/#"
               class="social-icon soc-youtube "  target="_blank"></a>
                        <a href="https://www.plus.google.com/#"
               class="social-icon soc-google "  target="_blank"></a>
            </span>

                                                                </div> -->
                                                                <!-- eof social icons -->
                                                                <div class="desc">
                                                                    <p>
                                                                    </p>
                                                                </div>
                                                               <!--  <div class="item-button topmargin_30">
                                                                    <a href="member.php?Attorney=Rita Akena" class="theme_button wide_button color1">
                    Read More                </a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                   
                                                    <!-- eof .vertical-item -->
                                                </div>
                                             <!--   <div class="owl-carousel-item attorneys ">
                                                    <div class="vertical-item content-absolute content-hover text-center">

                                                        <div class="item-media">
                                                            <a href="#">
                                                                <img width="371" height="585" src="uploads/shadow_man.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/shadow_man.png 371w, uploads/shadow_man.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> 
                                                            </a>
                                                        </div>
                                                        <div class="item-content ds">
                                                            <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
                                                                <a href="#">
                                                                    Mr. Patric David            
                                                                </a>
                                                            </h6>
                                                            <span class="highlight">Managing Partner</span>
                                                            <div class="content-body">
                                                                <div class="team-social-icons">
                                                                    <span class="social-icons">
                                                                        <a href="https://www.facebook.com/#"
                                                                           class="social-icon soc-facebook "  target="_blank"></a>
                                                                        <a href="https://www.twitter.com/#"
                                                                           class="social-icon soc-twitter "  target="_blank"></a>
                                                                        <a href="https://youtube.com/#"
                                                                           class="social-icon soc-youtube "  target="_blank"></a>
                                                                        <a href="https://www.plus.google.com/#"
                                                                           class="social-icon soc-google "  target="_blank"></a>
                                                                    </span>

                                                                </div>
                                                               
                                                                <div class="desc">
                                                                    <p>Founder and Managing Partner at Law Exchange Associates (Law Firm)-2018 to Present</p>
                                                                </div>
                                                                <!-- <div class="item-button topmargin_30">
                                                                    <a href="member.php?Attorney=Patric David" class="theme_button wide_button color1">
                                                                        Read More                </a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--eof .vertical-item--> 
                                                </div> -->
                                                <!--                                        <div class="owl-carousel-item attorneys ">
                                            <div class="vertical-item content-absolute content-hover text-center">

                                                <div class="item-media">
                                                    <a href="http://webdesign-finder.com/member/christian-woods/">
                                                        <img width="371" height="585" src="uploads/team_04.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/team_04.png 371w, uploads/team_04-190x300.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> </a>
                                                </div>
                                                <div class="item-content ds">
                                                    <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
            <a href="http://webdesign-finder.com/member/christian-woods/">
                Christian Woods            </a>
        </h6>
                                                    <span class="highlight">Financial Lawyer</span>
                                                    <div class="content-body">
                                                        <div class="team-social-icons">
                                                            <span class="social-icons">
                <a href="https://www.facebook.com/#"
               class="social-icon soc-facebook "  target="_blank"></a>
                        <a href="https://www.twitter.com/#"
               class="social-icon soc-twitter "  target="_blank"></a>
                        <a href="https://youtube.com/#"
               class="social-icon soc-youtube "  target="_blank"></a>
                        <a href="https://www.plus.google.com/#"
               class="social-icon soc-google "  target="_blank"></a>
            </span>

                                                        </div>
                                                         eof social icons 
                                                        <div class="desc">
                                                            <p>Lorem ipsum dolor sit amet, vim dicam iudico dissentias an, cu ferri atqui quaerendum vix. </p>
                                                        </div>
                                                        <div class="item-button topmargin_30">
                                                            <a href="http://webdesign-finder.com/member/christian-woods/" class="theme_button wide_button color1">
                    Read More                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             eof .vertical-item 
                                        </div>
                                        <div class="owl-carousel-item attorneys ">
                                            <div class="vertical-item content-absolute content-hover text-center">

                                                <div class="item-media">
                                                    <a href="http://webdesign-finder.com/member/don-aguilar/">
                                                        <img width="371" height="585" src="uploads/team_05.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/team_05.png 371w, uploads/team_05-190x300.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> </a>
                                                </div>
                                                <div class="item-content ds">
                                                    <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
            <a href="http://webdesign-finder.com/member/don-aguilar/">
                Don Aguilar            </a>
        </h6>
                                                    <span class="highlight">Family Lawyer</span>
                                                    <div class="content-body">
                                                        <div class="team-social-icons">
                                                            <span class="social-icons">
                <a href="https://www.facebook.com/#"
               class="social-icon soc-facebook "  target="_blank"></a>
                        <a href="https://www.twitter.com/#"
               class="social-icon soc-twitter "  target="_blank"></a>
                        <a href="https://youtube.com/#"
               class="social-icon soc-youtube "  target="_blank"></a>
                        <a href="https://www.plus.google.com/#"
               class="social-icon soc-google "  target="_blank"></a>
            </span>

                                                        </div>
                                                         eof social icons 
                                                        <div class="desc">
                                                            <p>Lorem ipsum dolor sit amet, vim dicam iudico dissentias an, cu ferri atqui quaerendum vix. </p>
                                                        </div>
                                                        <div class="item-button topmargin_30">
                                                            <a href="http://webdesign-finder.com/member/don-aguilar/" class="theme_button wide_button color1">
                    Read More                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             eof .vertical-item 
                                        </div>
                                        <div class="owl-carousel-item attorneys ">
                                            <div class="vertical-item content-absolute content-hover text-center">

                                                <div class="item-media">
                                                    <a href="http://webdesign-finder.com/member/dennis-greer/">
                                                        <img width="371" height="585" src="uploads/team_06.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="uploads/team_06.png 371w, uploads/team_06-190x300.png 190w" sizes="(max-width: 371px) 100vw, 371px" /> </a>
                                                </div>
                                                <div class="item-content ds">
                                                    <h6 class="item-title text-uppercase inline-block rightmargin_5 bottommargin_0">
            <a href="http://webdesign-finder.com/member/dennis-greer/">
                Dennis Greer            </a>
        </h6>
                                                    <span class="highlight">Civil Lawyer</span>
                                                    <div class="content-body">
                                                        <div class="team-social-icons">
                                                            <span class="social-icons">
                <a href="https://www.facebook.com/#"
               class="social-icon soc-facebook "  target="_blank"></a>
                        <a href="https://www.twitter.com/#"
               class="social-icon soc-twitter "  target="_blank"></a>
                        <a href="https://youtube.com/#"
               class="social-icon soc-youtube "  target="_blank"></a>
                        <a href="https://www.plus.google.com/#"
               class="social-icon soc-google "  target="_blank"></a>
            </span>

                                                        </div>
                                                         eof social icons 
                                                        <div class="desc">
                                                            <p>Lorem ipsum dolor sit amet, vim dicam iudico dissentias an, cu ferri atqui quaerendum vix. </p>
                                                        </div>
                                                        <div class="item-button topmargin_30">
                                                            <a href="http://webdesign-finder.com/member/dennis-greer/" class="theme_button wide_button color1">
                    Read More                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             eof .vertical-item 
                                        </div>-->
                                            </div>

                                            <div id="divider-9d235be" class="fw-divider-space  hidden-md hidden-sm hidden-xs"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section-1851025" class="fw-main-row section  section_padding_top_65 section_padding_bottom_75 columns_padding_15 fullwidth-section parallax">
                            <h3 class="hidden"> Progress</h3>
                            <div class="section-overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div id="column-494ec4d" class="col-xs-12 text-center col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">

                                            <div id="divider-9ffa517" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <h3 class="section_header margin_0  ">
    <span class="lightfont regular text-transform-none ">
        4 Years of Experience in Providing Effective Digital Solutions  </span>
    </h3>
                                            </div>

                                            <div id="divider-d3e0d53" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <p class=" paragraph">
                                                    <span class="lightfont regular text-transform-none ">
        It is not exhaustive since throught our experience we understand<br> that a client’s needs are always diverse and dynamic.  </span>
                                                </p>
                                            </div>

                                            <div id="divider-2bd8edb" class="fw-divider-space "></div>

                                            <a href="docs/Tipatone Digital Marketing Profile.pdf" target="_self" class="theme_button dark wide_button ">
    Our Profile</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        <section id="section-c78a7cc" class="fw-main-row section  section_padding_top_50 section_padding_bottom_150 columns_padding_30 mobile-centered">
                            <h3 class="hidden"> Why Choose Us</h3>
                            <div class="section-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div id="column-b2fbac0" class="col-xs-12 text-center col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="img-wrap with_divider divider_4 "><img src="uploads/number_04.png" alt="uploads/number_04.png" class="with_divider divider_4 " /></div>

                                            <div id="divider-e24c191" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <h2 class="section_header margin_0  ">
    <span class="highlight regular text-transform-none ">
        Why Choose Us   </span>
    </h2>
                                            </div>

                                            <div id="divider-8e8910a" class="fw-divider-space "></div>

                                            <div class="special-heading text-center">
                                                <p class=" paragraph">
                                                    <span class="darkgrey regular text-transform-none ">
        Our company offers  digital solutions  help and we act only in <br> accordance with widely recognized moral principles. </span>
                                                </p>
                                            </div>

                                            <div id="divider-47dca17" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                        </div>
                                    </div>
                                    <div id="column-9da2752" class="col-xs-12 col-md-4 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">

                                            <div id="divider-6754607" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                            <div id="divider-d8ac87c" class="fw-divider-space  hidden-lg hidden-md"></div>

                                            <div id="box-3790efb" class="media-box icon_right mobile_version ">
                                                <div class="box_icon">
                                                    <a href="#">
                                                        <img src="uploads/creative.png"></a>
                                                </div>
                                                <div class="box-wrap">
                                                    <h5 class="box-heading">
                                <a href="#">
                                        We are CREATIVE                                   </a>
                        </h5>
                                                    <div class="desc">
                                                       We have a team of creative experts when it comes to all matters digital and they have proven to provide the best results</div>
                                                </div>

                                            </div>

                                            <div id="divider-65402c8" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                            <div id="divider-2f9d895" class="fw-divider-space  hidden-lg hidden-md"></div>

                                            <div id="box-1f461e4" class="media-box icon_right mobile_version ">
                                                <div class="box_icon">
                                                    <a href="#">
                                                        <img src="uploads/cost.png"> </a>
                                                </div>
                                                <div class="box-wrap">
                                                    <h5 class="box-heading">
                                <a href="#">
                                        We are AFFORDABLE</a>
                        </h5>
                                                    <div class="desc">
                                                        We are able to work with and advertise with the any budget that the client will set forth witha return on investment </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="column-37d72c0" class="col-xs-12 col-md-4 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">

                                            <div id="divider-7227339" class="fw-divider-space "></div>

                                            <div class="img-wrap "><img src="uploads/themis.png" alt="uploads/themis.png" /></div>

                                            <div id="divider-83b1ec3" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                        </div>
                                    </div>
                                    <div id="column-aea64d6" class="col-xs-12 col-md-4 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">

                                            <div id="divider-f271b8c" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                            <div id="divider-72ef692" class="fw-divider-space  hidden-lg hidden-md"></div>

                                            <div id="box-1b6cdca" class="media-box icon_left mobile_version ">
                                                <div class="box_icon">
                                                    <a href="#">
                                                        <img src="uploads/tech.png"></a>
                                                </div>
                                                <div class="box-wrap">
                                                    <h5 class="box-heading">
                                <a href="#">
                                   We use CUTTING EDGE TECHNOLOGY</a>
                        </h5>
                                                    <div class="desc">
                                                        We provide a great complex yet easly understood and most effective approach to advertise and market a clients product and service.</div>
                                                </div>

                                            </div>

                                            <div id="divider-2c0cb5e" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                            <div id="divider-9a6d59a" class="fw-divider-space  hidden-lg hidden-md"></div>

                                            <div id="box-53c926f" class="media-box icon_left mobile_version ">
                                                <div class="box_icon">
                                                    <a href="#">
                                                        <img src="uploads/enth.png">  </a>
                                                </div>
                                                <div class="box-wrap">
                                                    <h5 class="box-heading">
                                <a href="#">
                                        We are ENTHUSIASTIC </a>
                        </h5>
                                                    <div class="desc">
                                                        Our team is a group of talented people who love what they are doing and they tend to exceed the clients expectations due to their ethusiasm when it comes to all matters digital </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section-c365eab" class="fw-main-row section  section_padding_top_50 section_padding_bottom_75 columns_padding_60 half_section">
                            <h3 class="hidden"> Contact us by sending a request</h3>
                            <div class="section-overlay"></div>
                            <!--<div class="cover_image" style="background-image:url('uploads/person2.jpg')">-->
                            <div class="image_cover image_cover_left" style="background-image:url('uploads/person2.jpg')">
                            </div>
                            <div class="container" id="form_data">
                                <div class="row">
                                    <div id="column-ee3fb2a" class="col-xs-12 col-md-6 fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                        </div>
                                    </div>
                                    <div id="column-46e7ebc" class="col-xs-12 col-md-6 text-left fw-column">
                                        <div class="column-overlay"></div>
                                        <div class="column-inner ">
                                            <div class="img-wrap with_divider divider_5 "><img src="uploads/number_05.png" alt="uploads/number_05.png" class="with_divider divider_5 " /></div>

                                            <div id="divider-e0ecf54" class="fw-divider-space "></div>

                                            <div class="special-heading text-left">
                                                <h2 class="section_header margin_0  ">
    <span class="highlight regular text-transform-none ">
        Contact us by sending a Request </span>
    </h2>
                                            </div>

                                            <div id="divider-6970815" class="fw-divider-space "></div>

                                            <div class="special-heading text-left">
                                                <p class=" paragraph">
                                                    <span class="greyfont regular text-transform-none ">
        Due to our long time experience in many areas we will help you to find the best solution on any issue.</span>
                                                </p>
                                            </div>

                                            <div id="divider-953da7c" class="fw-divider-space "></div>

                                            <div class="form-wrapper  columns_padding_15 text-left dark_bg" >
                                                <form data-fw-form-id="fw_form" method="post" action="functions.php" class="fw_form_fw_form" data-fw-ext-forms-type="contact-forms">
                                                    <input type="hidden" name="fwf" value="fw_form" />
                                                    <input type="hidden" id="_nonce_803db864f3c805ae5265644a4e0a1d89" name="_nonce_803db864f3c805ae5265644a4e0a1d89" value="d19b4dc22d" />
                                                    <input type="hidden" name="_wp_http_referer" value="/" />
                                                    <input type="hidden" name="fw_ext_forms_form_type" value="contact-forms" />
                                                    <input type="hidden" name="fw_ext_forms_form_id" value="def6e830711d627eace7bb6ace7d4f61" />
                                                    <div class="wrap-forms">
                                                        <div class="row"></div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-6 form-builder-item">
                                                                <div class="form-group has-placeholder">
                                                                    <label for="id-1">First Name <sup>*</sup> </label>
                                                                    <input class="form-control" type="text" name="first_name" placeholder="First Name" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-6 form-builder-item">
                                                                <div class="form-group has-placeholder">
                                                                    <label for="id-2">Last Name <sup>*</sup> </label>
                                                                    <input class="form-control" type="text" name="last_name" placeholder="Last Name"  required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-6 form-builder-item">
                                                                <div class="form-group has-placeholder">
                                                                    <label for="id-3">Your E-Mail <sup>*</sup> </label>
                                                                    <input class="form-control" type="email" name="email" placeholder="Your E-Mail"  required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-6 form-builder-item">
                                                                <div class="form-group has-placeholder">
                                                                    <label for="id-4">Your Phone <sup>*</sup> </label>
                                                                    <input class="form-control" type="number" name="phone" placeholder="Your Phone"  required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 form-builder-item">
                                                                <div class="field-select select-styled ">
                                                                    <select name="topic" id="id-5" class="form-control">
                                                                         <option value="Practice Area">Choose Service</option>
                                                                        <option value="Data Driven Advertising">Data Driven Advertising</option>
                                                                        <option value="Social Media Marketing">Social Media Marketing</option>
                                                                        <option value="Design and Development">Design and Development</option>
                                                                        <option value="Bulk SMS Management">Bulk SMS Management</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 form-builder-item">
                                                                <div class="form-group has-placeholder">
                                                                    <label for="id-6">Your Message <sup>*</sup> </label>
                                                                    <textarea class="form-control" rows="1" name="message" placeholder="Your Message"  required="required"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row"></div>
                                                    </div>
                                                    <div class="wrap-forms wrap-forms-buttons topmargin_10 text-left">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input class="theme_button color1"  type="submit" name="submit"  value="Send Request"/>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--                <section id="section-0e9f17c" class="fw-main-row section  section_padding_top_50 section_padding_bottom_100 columns_padding_15 carousel-section-2">
                    <h3 class="hidden"> Latest news</h3>
                    <div class="section-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div id="column-e778196" class="col-xs-12 text-center col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 fw-column">
                                <div class="column-overlay"></div>
                                <div class="column-inner ">
                                    <div class="img-wrap with_divider divider_6 "><img src="uploads/number_06.png" alt="uploads/number_06.png" class="with_divider divider_6 " /></div>

                                    <div id="divider-5c3065e" class="fw-divider-space "></div>

                                    <div class="special-heading text-center">
                                        <h2 class="section_header margin_0  ">
    <span class="highlight regular text-transform-none ">
        Latest News </span>
    </h2>
                                    </div>

                                    <div id="divider-3dc0b6a" class="fw-divider-space "></div>

                                    <div class="special-heading text-center">
                                        <p class=" paragraph">
                                            <span class="darkgrey regular text-transform-none ">
        All of our company’s latest news and press releases can be <br> found here, as it‘s the only place for their publishing </span>
                                        </p>
                                    </div>

                                    <div id="divider-4a4d4ff" class="fw-divider-space  hidden-sm hidden-xs"></div>

                                    <div id="divider-3c90e0a" class="fw-divider-space  hidden-lg hidden-md"></div>

                                </div>
                            </div>
                            <div id="column-a1d5830" class="col-xs-12 fw-column">
                                <div class="column-overlay"></div>
                                <div class="column-inner ">
                                    <div class="shortcode-posts">
                                        <div class="owl-carousel" data-loop="true" data-autoplay="false" data-autoplaytimeout="3000" data-margin="30" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="3">
                                            <div class="owl-carousel-item item-layout-item-extended insurance ">
                                                <article class="vertical-item content-padding with_background text-center overflow-hidden bottom-color-border filter-insurance post-110 post type-post status-publish format-video has-post-thumbnail hentry category-insurance tag-agency tag-blog tag-creative post_format-post-format-video">
                                                    <div class="item-media">
                                                        <img width="600" height="400" src="uploads/img_3-600x400.jpg" class="attachment-flavius-small-width size-flavius-small-width wp-post-image" alt="" srcset="uploads/img_3-600x400.jpg 600w, uploads/img_3-300x200.jpg 300w, uploads/img_3-768x512.jpg 768w, uploads/img_3-1024x683.jpg 1024w" sizes="(max-width: 600px) 100vw, 600px" />
                                                        <div class="media-links">
                                                            <a class="abs-link" href="http://webdesign-finder.com/sample-post-with-youtube-video/"></a>
                                                        </div>
                                                    </div>
                                                    <div class="item-content ">
                                                        <div class="entry-date small-text highlight">
                                                            <a href="http://webdesign-finder.com/sample-post-with-youtube-video/" rel="bookmark">
                                                                <time class="entry-date" datetime="2018-08-12T10:14:59+00:00">August 12, 2018</time>
                                                            </a>
                                                        </div>
                                                        <h5 class="item-title">
            <a href="http://webdesign-finder.com/sample-post-with-youtube-video/">
                Sample Post With Youtube Video            </a>
        </h5>
                                                        <hr class="divider_60_2 main_bg_color transparent divider_20">
                                                        <p>Lorem ipsum dolor sit amet, ipsum patrioque te vim, ut ius dicant nullam alterum. Vis an semper regione antiopam. Est modus labitur deleniti ex. Scripta liberavisse cu cum, vide prodesset at est, quot gubergren necessitatibus ne cum.</p>
                                                    </div>
                                                </article>
                                                 eof vertical-item 
                                            </div>
                                            <div class="owl-carousel-item item-layout-item-extended financial-law ">
                                                <article class="vertical-item content-padding with_background text-center overflow-hidden bottom-color-border filter-financial-law post-2768 post type-post status-publish format-image has-post-thumbnail hentry category-financial-law tag-agency tag-blog tag-creative post_format-post-format-image">
                                                    <div class="item-media">
                                                        <img width="600" height="400" src="uploads/img_4-600x400.jpg" class="attachment-flavius-small-width size-flavius-small-width wp-post-image" alt="" srcset="uploads/img_4-600x400.jpg 600w, uploads/img_4-300x200.jpg 300w, uploads/img_4-768x512.jpg 768w, uploads/img_4-1024x683.jpg 1024w" sizes="(max-width: 600px) 100vw, 600px" />
                                                        <div class="media-links">
                                                            <a class="abs-link" href="http://webdesign-finder.com/sample-post-with-image/"></a>
                                                        </div>
                                                    </div>
                                                    <div class="item-content ">
                                                        <div class="entry-date small-text highlight">
                                                            <a href="http://webdesign-finder.com/sample-post-with-image/" rel="bookmark">
                                                                <time class="entry-date" datetime="2018-08-11T13:52:21+00:00">August 11, 2018</time>
                                                            </a>
                                                        </div>
                                                        <h5 class="item-title">
            <a href="http://webdesign-finder.com/sample-post-with-image/">
                Sample Post With Image            </a>
        </h5>
                                                        <hr class="divider_60_2 main_bg_color transparent divider_20">
                                                        <p>Eam ad soleat insolens elaboraret, audire mnesarchum efficiantur in ius, nominavi eleifend in eam. Facer saperet ornatus eu sea, no eum affert eruditi accommodare, ut stet reque nec. Ei nec utroque percipitur, eum malorum theophrastus vituperatoribus ad.</p>
                                                    </div>
                                                </article>
                                                 eof vertical-item 
                                            </div>
                                            <div class="owl-carousel-item item-layout-item-extended financial-law ">
                                                <article class="vertical-item content-padding with_background text-center overflow-hidden bottom-color-border filter-financial-law post-2772 post type-post status-publish format-gallery has-post-thumbnail hentry category-financial-law tag-agency tag-blog tag-creative post_format-post-format-gallery">
                                                    <div class="item-media">
                                                        <img width="600" height="400" src="uploads/img_6-600x400.jpg" class="attachment-flavius-small-width size-flavius-small-width wp-post-image" alt="" srcset="uploads/img_6-600x400.jpg 600w, uploads/img_6-300x200.jpg 300w, uploads/img_6-768x512.jpg 768w, uploads/img_6-1024x683.jpg 1024w" sizes="(max-width: 600px) 100vw, 600px" />
                                                        <div class="media-links">
                                                            <a class="abs-link" href="http://webdesign-finder.com/sample-post-with-carousel/"></a>
                                                        </div>
                                                    </div>
                                                    <div class="item-content ">
                                                        <div class="entry-date small-text highlight">
                                                            <a href="http://webdesign-finder.com/sample-post-with-carousel/" rel="bookmark">
                                                                <time class="entry-date" datetime="2018-08-07T09:54:50+00:00">August 7, 2018</time>
                                                            </a>
                                                        </div>
                                                        <h5 class="item-title">
            <a href="http://webdesign-finder.com/sample-post-with-carousel/">
                Sample Post With Carousel            </a>
        </h5>
                                                        <hr class="divider_60_2 main_bg_color transparent divider_20">
                                                        <p>Et pro diam clita eripuit, aperiri scaevola accusamus eu vel. Illum blandit similique amet usu, commodo alienum probatus pro ex, sed id wisi deserunt. Dolore populo vocent has mei, ius ex modo dicat indoctum.</p>
                                                    </div>
                                                </article>
                                                 eof vertical-item 
                                            </div>
                                        </div>
                                    </div>

                                    <div id="divider-6d8af8c" class="fw-divider-space "></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
    
             <?php include_once 'footer.php'; ?>
                        <!-- .page_footer -->
                        <?php include_once 'copyright.php'; ?>
                        <!-- .copyrights -->
            </div>
            <!-- eof #box_wrapper -->
        </div>
        <!-- eof #canvas -->
        <!-- Instagram Feed JS -->
        <?php include_once 'script.php'; ?>
    </body>

</html>