<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = null;
if (isset($this))
  $document = & $this;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEACABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAIK8oAACnQAAAxygAAAAAA//77AAYyxwDE1uoAAjPNALbM5gBpbNYA+/v8APH2+gD+//kAATC9AAA2xQABMsgA/fr/AAMyyAD//f8ACDTTAO7+/QAENMsAJEDJAPj/+gDt9vsAwtD0AL/Q7ACKn9sAwNDsAPn+/QAGNs4A+v79AP//+gAAMskAATLJAAM2xgD//v0AganpADhkzwAHNsYAu8zfAMDT5ADM0OwA//r4AAA7yQD9/fgAAi3HAPr8+wC+0eoA9P7+AFt51QACNMQA///7AP7+/gD//v4ABi7NAA4+yQAKLNsAv8ruAPr8/ADA0esABjXCAMjV8AC/zuMAAC/LAP/8/ADG2PAA/fv/AP7//AADN8UA+v7/AP/7/wD8/v8AAzLLAIKn4AD+//QAATTOAMDS6QAHKskA/Pz9AMDR7AAFK9cAvdTsAM3S8QBjgNwAnLvqANPg6wDe9foA+Pz+AAYyxAD1//4ACjXMAFlwyAD4//4AAzTHAAEzygCw0PkAADS/AP///gD6+/kAAjbKAAs0xwCQpecA+vr8AH+R3gD9+vwAk7rmANPf7wD6/P8AVmzlAMbP6wCTq+cAxNLrAP/8/wACM8sA/v//AP/99AD///8APFzJAKTP7QC80uwA19f+APv9/QD8/f0Au9HvAP39/QAHMsYABS3MAAQ0yQCLrO4AucblAPL++wANMNQAAynHABIvxgDF1ewAv9DqAPv++wDD1OcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAzQ0NDQSNjY2CheDRAR1AwNQPDw8PFBQUBt4PBp7dQMDPDw8PDw8PDwnTTwcT3UDAzw8PDw8PDw8ADA8HE91AwM/KCZXcIg8h1RQUziAcgMDaxU3SQdOBj4IVTmEAW0DAypeWT1CBUCCbg15AlFLAwN1LVxkZV+FJSkWTH96dQMDdQSJfTs1d29SinwZaXUDA3V1dXVHOmcxHSJ+Vgx1AwN1dXURRUozQRAPaB5qWAMDdSCGLC5hHzV1CRMyI10DA3VDIQ6BdSR1dCtiYxgkAwN1cUZsNXV1C1sUc2JacwMDdXV1dXV1dUhmYHV1dXUDA3V1dXV1dXV1di91dXV1A4ABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAAA=" rel="icon" type="image/x-icon" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
</head>
<body>
<?php print_r($this); ?>
<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body">
<div class="art-header">
    <div class="art-header-jpeg"></div>
<div class="art-logo">
 <div id="slogan-text" class="art-logo-text">Juntos somos m&aacute;s</div>
 <h1 id="name-text" class="art-logo-name">Asociaci&oacute;n de Familias Numerosas de Tres Cantos</h1>
</div>


</div>
<jdoc:include type="modules" name="user3" />
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="art-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'art-block'); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<div class="art-layout-cell art-<?php echo artxCountModules($document, 'right') ? 'content' : 'content-wide'; ?>">

<?php
  echo artxModules($document, 'banner2', 'art-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'art-article');
  echo artxModules($document, 'banner3', 'art-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner">
<div class="art-postcontent">
    <!-- article-content -->

<jdoc:include type="message" />
<?php
  if ()
?>

    <!-- /article-content -->
</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />
<?php echo artxModules($document, 'banner4', 'art-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'art-article'); ?>
<?php echo artxModules($document, 'banner5', 'art-nostyle'); ?>
</div>
<div class="art-layout-cell art-sidebar1">
  <div class="art-block">
    <div class="art-block-tl"></div>
    <div class="art-block-tr"></div>
    <div class="art-block-bl"></div>
    <div class="art-block-br"></div>
    <div class="art-block-tc"></div>
    <div class="art-block-bc"></div>
    <div class="art-block-cl"></div>
    <div class="art-block-cr"></div>
    <div class="art-block-cc"></div>
    <div class="art-block-body">
      <div class="art-blockheader">
        <div class="l"></div>
        <div class="r"></div>
        <div class="t">Colaboran</div>
      </div>
      <div class="art-blockcontent">
        <div class="art-blockcontent-body">
<!-- block-content -->
          <div class="bannergroup">
            <div class="banneritem">
              <!-- <a href="/index.php/component/banners/click/1" target="_blank"> -->
                <img src="http://www.afan3cantos.org/images/stories/colaboradores.jpg" alt="Colaboradores">
              <!-- </a> -->
              <div class="clr"></div>
            </div>
          </div>
<!-- /block-content -->
          <div class="cleared"></div>
        </div>
      </div>
    
    
      <div class="cleared"></div>
    </div>
  </div>
</div>
</div>
<div class="cleared"></div>

<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'art-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="art-nostyle" />
<div class="art-footer">
 <div class="art-footer-inner">
  <?php echo artxModules($document, 'syndicate'); ?>
  <div class="art-footer-text">
  <?php if (artxCountModules($document, 'copyright') == 0): ?>
<p>Copyright &copy; 2014 ---.<br />
All Rights Reserved.</p>

  <?php else: ?>
  <?php echo artxModules($document, 'copyright', 'art-nostyle'); ?>
  <?php endif; ?>
  </div>
 </div>
 <div class="art-footer-background"></div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer">Theme By <?php include("business.php"); ?></p>
 | 
</div>

</body> 
</html>