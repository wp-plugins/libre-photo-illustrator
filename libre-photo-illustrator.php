<?php
/*
Plugin Name: LibrePhotoIllustrator
Plugin URI: http://libre-photos.berlios.de/pro.php
Description: Illustrator for free/libre photos that are in the public domain or at least published under one of the CC-BY licenses. This sidebar widget has the aim to enrich your weblog with selectable and configurable OpenContent materials like drawings, animations and other kinds of images.
Version: 0.6.0
Author: thomaz21
Author URI: http://libre-photos.berlios.de/info.php
*/

# @date 2010-08-27 16-37-06
 abstract class Dufcfffxgpzj {
  const Kgscqauvnst = 'options';
 const Ajepetraeiv = 'submit';
        const Kteavieia = 'title';
 const Qurocaewxkdb = 'count';
const Elucinwznjea = 'mode';
  const Ajtxleywmnnahl = 'lang';
     const Mbsdytuqstlnbl = 'compids';
    const Mrdqewwaboh = 0;
     const Clmiiidvgmit = 1;
   const Cnmlfqryw = 2;		
 const Dunmxywroymkyr = 'backend-title';
       const Owvmryfpks = 'backend-count';
 const Csixprbdwiac = 'backend-compids';
     const Mncvnnonr = 'backend-mode';
     const Pniktdigm = 'backend-lang';
     const Pwssaagpg = 'backend-head';
      const Pxdpgspilo = 'backend-foot';
         const Twubhfkfdsyyf = 'backend-news';
         const Bpmmpfhauzltu = 'backend-info';
const Jqyzwryvygvvbob = 101;
     const Rkvmogozjw = 102;
      const Lhazssatnfy = 103;
         const Qtnhyeuwlixnxc = 104;
      const Sjjgnxawhbp = 105;
     const Ijncsrgwuy = 106;
        const Gnrakedlshhlo = 107;
     const Zumnwpfgfw = 108;
         const Waqugqfdinrfgf = 109;
      const Hpjziqizpmz = 110;
       const Zcgrsjzdmzoe = 111;
      const Wzpsnxktbod = 113;
     const Genomxnfzb = 112;
       const Qqgakfqzwzzu = 120;
  const Pnjrzdhzl = 0;
    const Xhnfcsuleqj = 1;
    const Cwcidtlaeap = 2;
    const Kgkwcqxxton = 3;
         const Jytfkhrnrtsmmlzh = 4;
         public function buildSnveyvzfsdd($xfoxoedzvvwm, $yjgwxvtk, $bsdcekopfudff, $sztsyeaq) {
       $options = get_option($this->constructJrmsiuecqlhkvsul(self::Kgscqauvnst));
         $title = $options['title'];
     $compids = $this->setTnoansuqscr($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
  $karma_data = Gbgynuvimmosc::getInstance()->setWlekruzxcrup($compids);
     $translator = new Btddxxwombvrczydr($lang);
  $renderer = $this->setYhnxtpmlimagirbja($translator, $mode);
 echo $xfoxoedzvvwm;
   echo $bsdcekopfudff . $title . $sztsyeaq;
     echo $renderer->createFgamrqgtdrycchrvy($karma_data);
       echo $yjgwxvtk;
   }
public function constructHsddddnocbbuovevqyj() {
 $options = $this->getMvwhoyxlxhtbzln();
         $title = $options['title'];
      $translator = new Btddxxwombvrczydr($options['lang']);
    echo '<p>' . $translator->getSomredqmpnwlizlkoffr('backend.widgets.control.redirection', array(Btddxxwombvrczydr::Ihgszhgsqosy => $this->queryDdbblzmfaywdzyeg())) . '</p>';
     echo '<input type="hidden" id="' . $this->constructJrmsiuecqlhkvsul(self::Ajepetraeiv) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Ajepetraeiv) . '" value="1" />';
   }
public function getMvwhoyxlxhtbzln() {
      $translator = new Btddxxwombvrczydr($this->getYcwxxnrpscqxxn());
$compids = explode(',', $this->getWjivxdivtu());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
    $this->createSeihmdnwzxjo(Dufcfffxgpzj::Genomxnfzb),
       count($compids)
   )
    );
 for($limitDigdksduyswx = 0; $limitDigdksduyswx < count($compids); $limitDigdksduyswx++) {
        $compids[$limitDigdksduyswx] = trim($compids[$limitDigdksduyswx]);
   }
         $options = array(
      'title'=>$translator->getSomredqmpnwlizlkoffr('frontend.title'),
       'compids'=>implode(', ', $compids),
      'mode'=>self::Cnmlfqryw,
       'lang'=>$this->getYcwxxnrpscqxxn(),
   'count'=>$this->createSeihmdnwzxjo(Dufcfffxgpzj::Wzpsnxktbod)
    );
    $opts = get_option($this->constructJrmsiuecqlhkvsul(self::Kgscqauvnst));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
         update_option($this->constructJrmsiuecqlhkvsul(self::Kgscqauvnst), $options);
        return $options;
   }
       public function setAhdlbpufgnys() {
     $result = '';
 $options = $this->getMvwhoyxlxhtbzln();
      $translator = new Btddxxwombvrczydr($options['lang']);
         if ( $_POST[$this->constructJrmsiuecqlhkvsul(self::Ajepetraeiv)] !== null ) {
      $valid = true;
       if ($this->createSeihmdnwzxjo(self::Jqyzwryvygvvbob)) {
$options['title'] = $_POST[$this->constructJrmsiuecqlhkvsul(self::Kteavieia)];
   }
  if ($this->createSeihmdnwzxjo(self::Rkvmogozjw)) {
      if (
       preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb)]) &&
       (int) $_POST[$this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb)] >= $this->createSeihmdnwzxjo(Dufcfffxgpzj::Hpjziqizpmz) &&
     (int) $_POST[$this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb)] <= $this->createSeihmdnwzxjo(Dufcfffxgpzj::Zcgrsjzdmzoe)
     ) {
   $options['count'] = $_POST[$this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb)];
} else {
    $result .= '
   <div class="updated">
        <p><strong>' . $translator->getSomredqmpnwlizlkoffr('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
      if ($this->createSeihmdnwzxjo(self::Qtnhyeuwlixnxc)) {
  $options['mode'] = $_POST[$this->constructJrmsiuecqlhkvsul(self::Elucinwznjea)];
   }
   if ($this->createSeihmdnwzxjo(self::Sjjgnxawhbp)) {
    $options['lang'] = $_POST[$this->constructJrmsiuecqlhkvsul(self::Ajtxleywmnnahl)];
   $translator->createJwgcbblgqiqrj($options['lang']);
   }
   if ($this->createSeihmdnwzxjo(self::Lhazssatnfy)) {
      if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->constructJrmsiuecqlhkvsul(self::Mbsdytuqstlnbl)])) {
       $options['compids'] = $_POST[$this->constructJrmsiuecqlhkvsul(self::Mbsdytuqstlnbl)];
} else {
    $result .= '
   <div class="updated">
<p><strong>' . $translator->getSomredqmpnwlizlkoffr('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
         <p><strong>' . $translator->getSomredqmpnwlizlkoffr('backend.updated') . '</strong></p>
        </div>
    ';
         update_option($this->constructJrmsiuecqlhkvsul(self::Kgscqauvnst), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
        $infoButton = '<span class="' . $this->constructQjdbjvxmxjyz(self::Bpmmpfhauzltu) . '" onclick="document.getElementsByName(\'' . $this->constructQjdbjvxmxjyz(self::Pxdpgspilo) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
       <h2>' . $translator->getSomredqmpnwlizlkoffr('backend.title', array(Btddxxwombvrczydr::Ihgszhgsqosy => $this->queryDdbblzmfaywdzyeg())) . '</h2> 
    ';
  if ($this->createSeihmdnwzxjo(self::Ijncsrgwuy)) {
    $result .= '
   <div class="' . $this->constructQjdbjvxmxjyz(self::Pwssaagpg) . '">' . 
   $translator->getSomredqmpnwlizlkoffr('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
       if ($this->createSeihmdnwzxjo(self::Jqyzwryvygvvbob)) {
    $result .= '
      <!-- title -->
  <p class="' . $this->constructQjdbjvxmxjyz(self::Dunmxywroymkyr) . '">
   <label for="' . $this->constructJrmsiuecqlhkvsul(self::Kteavieia) . '">
        <b>' . $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.title') . '</b>:<br />
         <span>' . $translator->getSomredqmpnwlizlkoffr('backend.manual.title') . '</span><br />
<input id="' . $this->constructJrmsiuecqlhkvsul(self::Kteavieia) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Kteavieia) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
  if ($this->createSeihmdnwzxjo(self::Rkvmogozjw)) {
    $result .= '
      <!-- count -->
        <p class="' . $this->constructQjdbjvxmxjyz(self::Owvmryfpks) . '">
      <label for="' . $this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb) . '">
        <b>' . $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.count') . '</b>:<br />
         <span>' . $translator->getSomredqmpnwlizlkoffr('backend.manual.count') . '</span><br />
      <input id="' . $this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Qurocaewxkdb) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
   if ($this->createSeihmdnwzxjo(self::Lhazssatnfy)) {
    $result .= '
        <!-- compids -->
<p class="' . $this->constructQjdbjvxmxjyz(self::Csixprbdwiac) . '">
        <label for="' . $this->constructJrmsiuecqlhkvsul(self::Mbsdytuqstlnbl) . '">
<b>' . $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.compids') . '</b>:<br />
       <span>' . $translator->getSomredqmpnwlizlkoffr('backend.manual.compids', array(Btddxxwombvrczydr::Givbhfqqehcyh => $this->createSeihmdnwzxjo(Dufcfffxgpzj::Zumnwpfgfw))) . '</span><br />
  <input id="' . $this->constructJrmsiuecqlhkvsul(self::Mbsdytuqstlnbl) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Mbsdytuqstlnbl) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
      if ($this->createSeihmdnwzxjo(self::Qtnhyeuwlixnxc)) {
    $result .= '
     <!-- mode -->
       <p class="' . $this->constructQjdbjvxmxjyz(self::Mncvnnonr) . '">
      <label for="' . $this->constructJrmsiuecqlhkvsul(self::Elucinwznjea) . '">
       <b>' . $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.mode') . '</b>:<br />
        <span>' . $translator->getSomredqmpnwlizlkoffr('backend.manual.mode') . '</span><br />
    <select id="' . $this->constructJrmsiuecqlhkvsul(self::Elucinwznjea) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Elucinwznjea) . '">
         ' . $this->buildDfpbybyong(self::Mrdqewwaboh, $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.image-mode'), $mode) . '
    ' . $this->buildDfpbybyong(self::Clmiiidvgmit, $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.animation-mode'), $mode) . '
       ' . $this->buildDfpbybyong(self::Cnmlfqryw, $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
   if ($this->createSeihmdnwzxjo(self::Sjjgnxawhbp)) {
    $result .= '
     <!-- lang -->
       <p class="' . $this->constructQjdbjvxmxjyz(self::Pniktdigm) . '">
        <label for="' . $this->constructJrmsiuecqlhkvsul(self::Ajtxleywmnnahl) . '">
 <b>' . $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.language') . '</b>:<br />
  <span>' . $translator->getSomredqmpnwlizlkoffr('backend.manual.language') . '</span><br />
        <select id="' . $this->constructJrmsiuecqlhkvsul(self::Ajtxleywmnnahl) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Ajtxleywmnnahl) . '">
     ' . $this->buildDfpbybyong($this->getYcwxxnrpscqxxn(), $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.default'), $lang) . '
    ' . $this->buildDfpbybyong(Btddxxwombvrczydr::Wvpevolbdtqjjcoc, $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.english'), $lang) . '
         ' . $this->buildDfpbybyong(Btddxxwombvrczydr::Cbqnkhiwlmaj, $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.german'), $lang) . '
' . $this->buildDfpbybyong(Btddxxwombvrczydr::Afbqbexzwiou, $translator->getSomredqmpnwlizlkoffr('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
     if ($this->createSeihmdnwzxjo(self::Gnrakedlshhlo)) {
    $result .= '
 ' . $infoButton . '
  <div name="' . $this->constructQjdbjvxmxjyz(self::Pxdpgspilo) . '" class="' . $this->constructQjdbjvxmxjyz(self::Pxdpgspilo) . '">
       ' . $translator->getSomredqmpnwlizlkoffr('backend.manual.bottom')
   ;
      if ($this->createSeihmdnwzxjo(self::Waqugqfdinrfgf)) {
   $result .= 
       '<div class="' . $this->constructQjdbjvxmxjyz(self::Twubhfkfdsyyf) . '">' .
       $this->createNyxbjcczbztpxwtof($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
 <input type="hidden" id="' . $this->constructJrmsiuecqlhkvsul(self::Ajepetraeiv) . '" name="' . $this->constructJrmsiuecqlhkvsul(self::Ajepetraeiv) . '" value="1" />				
  <div class="submit">
      <input type="submit" name="submit" value="' . $translator->getSomredqmpnwlizlkoffr('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
        protected function buildDfpbybyong($mdcwgnodmycp, $ecskdxczem, $izplyynwh) {
  $selected = ($izplyynwh == $mdcwgnodmycp ? 'selected' : '');
      return '<option value="' . $mdcwgnodmycp . '" ' . $selected . '>' . $ecskdxczem . '</option>';
   }
  protected function getYcwxxnrpscqxxn() {
   $strLylctnstdnv = get_locale();
$strLylctnstdnv = substr($strLylctnstdnv, 0, 2);
        switch ($strLylctnstdnv) {
   case Btddxxwombvrczydr::Wvpevolbdtqjjcoc:
         case Btddxxwombvrczydr::Cbqnkhiwlmaj:
         case Btddxxwombvrczydr::Afbqbexzwiou:
        break;
default:
      $strLylctnstdnv = Btddxxwombvrczydr::Wvpevolbdtqjjcoc;
        break;
   }
     return $strLylctnstdnv;
   }
 public function queryZjpzupqjlrfllv() {
        echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->constructIfyhvkwskjvckvip() . '/style.css" type="text/css" media="screen" />';
   }
         public function getYfpsknqtamarjs() {
         echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->constructIfyhvkwskjvckvip() . '/style2.css" type="text/css" media="screen" />';
   }
        public function createNyxbjcczbztpxwtof($dcqqouzpqfiy) {
     $result = '';
    $nc = $this->constructRmcsbjeiloawfwgbh();
 $pluginName = $this->constructIfyhvkwskjvckvip();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
 $msgs = $nc->getNqcotyufeltk(
     $pluginName, 
    WP_PLUGIN_DIR . '/' . $pluginName . '/' . $pluginName . '.php'
    );
$json = @json_encode($msgs);
         $isTransientSet = set_transient($transKey, $json, 1*24*60*60 + mt_rand(0, 3*24*60*60));
   }
       if ($json == null || $json == '') {
         return;
   }
      $msgs = @json_decode($json, true);
      if (count($msgs) > 0 && $msgs[Pmwsopgcz::Qcjbtadvun] === true) {
      $result .= $dcqqouzpqfiy->getSomredqmpnwlizlkoffr('backend.news.upgrade');
   }
       return $result;
   }
    protected function setTnoansuqscr($spyeimcskts, $lxfzpivjkz) {
    $spyeimcskts = explode(',', $spyeimcskts);
  $rotationMode = $this->createSeihmdnwzxjo(Dufcfffxgpzj::Qqgakfqzwzzu);
      switch ($rotationMode) {
         case 0:
    shuffle($spyeimcskts);
        break;
         case 1:
   $spyeimcskts = $this->queryIteazgtdckvzl($spyeimcskts, $this->buildRkvymaziak());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
      $spyeimcskts = $this->queryIteazgtdckvzl($spyeimcskts, $dateid);
        break;
         case 3:
    $combinedid = $this->buildRkvymaziak() + ( round(time() / (60*60*24)) );
$spyeimcskts = $this->queryIteazgtdckvzl($spyeimcskts, $combinedid);
        break;
         case 4:
default:
        break;
   }
         $spyeimcskts = array_slice($spyeimcskts, 0, $lxfzpivjkz);
    for ($strKkntlpqbfk = 0; $strKkntlpqbfk < count($spyeimcskts); $strKkntlpqbfk++) {
        $spyeimcskts[$strKkntlpqbfk] = trim($spyeimcskts[$strKkntlpqbfk]);
   }
  return $spyeimcskts;
   }
        private function buildRkvymaziak() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
        private function queryIteazgtdckvzl($dwotpreaamanl, $njzquldssa) {
  $strMvxkaijbwmr = count($dwotpreaamanl);
if ($strMvxkaijbwmr === 0) {
    return $dwotpreaamanl;
   }
   for ($countXskuctgyy = 0; $countXskuctgyy < $strMvxkaijbwmr; $countXskuctgyy++) {
       $pos = ($strMvxkaijbwmr + $countXskuctgyy + $njzquldssa) % $strMvxkaijbwmr;
      $reorderedArr[$countXskuctgyy] = $dwotpreaamanl[$pos];
   }
   return $reorderedArr;
   }
 public abstract function queryDdbblzmfaywdzyeg();
     public abstract function constructIfyhvkwskjvckvip();
    public abstract function constructJrmsiuecqlhkvsul($ksggidom);
public abstract function constructQjdbjvxmxjyz($cwiifsia);
   public abstract function setYhnxtpmlimagirbja($wjirtadoj, $njyjzayprn);
      public abstract function constructRmcsbjeiloawfwgbh();
public abstract function createSeihmdnwzxjo($deegqfystvt);
   public abstract function getWjivxdivtu();
   }
       class Ydawjqfsxtwjcwcw extends Dufcfffxgpzj {
      const Vsrmbylyohufrq = '
    20094, 20777, 20589, 20376, 17199, 20260, 19302, 3289, 18728, 18127, 20234, 20010, 12130, 6109, 19258,
         20163, 
    16908, 18200
    ';
   public function __construct() {
   }
   public function queryDdbblzmfaywdzyeg() {
   return 'LibrePhotoIllustrator';
   }
       public function constructIfyhvkwskjvckvip() {
     return 'libre-photo-illustrator';
   }
       public function constructJrmsiuecqlhkvsul($yatcaomoo) {
       return 'librephotoillustrator-' . $yatcaomoo;
   }
      public function constructQjdbjvxmxjyz($eytrnsxhfxlx) {
  return 'lpi-' . $eytrnsxhfxlx;
   }
      public function setYhnxtpmlimagirbja($erueocasi, $vgsjtomprtn) {
        $renderer = new Zbxepcgcdsznq($erueocasi, $vgsjtomprtn);
         return $renderer;
   }
        public function constructRmcsbjeiloawfwgbh() {
   $nc = Pmwsopgcz::getInstance();
   return $nc;
   }
 public function createSeihmdnwzxjo($fmprnzbdns) {
        $result = false;
    switch ($fmprnzbdns) {
   case Dufcfffxgpzj::Hpjziqizpmz:
    $result = 2;
        break;
    case Dufcfffxgpzj::Zcgrsjzdmzoe:
  $strNzykejjgdwy = 6;
        break;
   case Dufcfffxgpzj::Wzpsnxktbod:
  $strNzykejjgdwy = 2;
        break;
  case Dufcfffxgpzj::Genomxnfzb:
  $strNzykejjgdwy = 6;
        break;
  case Dufcfffxgpzj::Rkvmogozjw:
     $strNzykejjgdwy = true;
        break;
    case Dufcfffxgpzj::Qqgakfqzwzzu:
      $strNzykejjgdwy = Dufcfffxgpzj::Kgkwcqxxton;
        break;
  case Dufcfffxgpzj::Ijncsrgwuy:
   case Dufcfffxgpzj::Sjjgnxawhbp:
      $strNzykejjgdwy = false;
        break;
  case Dufcfffxgpzj::Zumnwpfgfw:
      $strNzykejjgdwy = array(
        'Countries' => 'http://slideshine.de/categories/tags.php/Staaten',
         'Cities' => 'http://slideshine.de/categories/tags.php/St%C3%A4dte',
    'Nature' => 'http://slideshine.de/categories/tags.php/Umwelt',
        'Regions' => 'http://slideshine.de/categories/tags.php/Geografie',
     'Slideshow of the day' => 'http://slideshine.de/categories/tags.php/Slideshow%20des%20Tages',
      'Slideshow of the week' => 'http://slideshine.de/categories/tags.php/Slideshow%20der%20Woche',
    'Best of' => 'http://slideshine.de/categories/tags.php/Best%20of%20slideshine.de',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
      case Dufcfffxgpzj::Waqugqfdinrfgf:
     $strNzykejjgdwy = true;
        break;
default:
     $strNzykejjgdwy = true;
        break;
   }
     return $strNzykejjgdwy;
   }
     public function getWjivxdivtu() {
return self::Vsrmbylyohufrq;
   }
   }
       class Btddxxwombvrczydr {
  const Wvpevolbdtqjjcoc = 'en';
        const Cbqnkhiwlmaj = 'de';
        const Afbqbexzwiou = 'es';
    const Ihgszhgsqosy = 'widgetId';
  const Givbhfqqehcyh = 'links';
private $mbaygnmz;
public function __construct($xbalktxrj = null) {
$this->mbaygnmz = ($xbalktxrj === null ? self::Wvpevolbdtqjjcoc : $xbalktxrj);
   }
        public function getSomredqmpnwlizlkoffr($efngiublebgey, $xwongyxcr = null) {
    $en = array(
        'frontend.author' => 'by',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Images',
      'frontend.comments' => 'Comments',
'frontend.karma' => 'Karma',
    'frontend.title' => 'My images',
         'backend.validation.compids' => 'Slideshow-IDs invalid.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
   'backend.updated' => 'Settings updated.',
   'backend.title' => '' . $xwongyxcr[Btddxxwombvrczydr::Ihgszhgsqosy] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
       'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setOkxeopyttxw($xwongyxcr[Btddxxwombvrczydr::Givbhfqqehcyh]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
       'backend.save' => 'Save',
'backend.fieldlabel.title' => 'Title',
 'backend.fieldlabel.count' => 'Number of images',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Mode',
      'backend.fieldlabel.language' => 'Language',
        'backend.fieldlabel.default' => '(automatic)',
    'backend.fieldlabel.english' => 'english',
  'backend.fieldlabel.german' => 'german',
    'backend.fieldlabel.spanish' => 'spanish',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
  'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $xwongyxcr[Btddxxwombvrczydr::Ihgszhgsqosy] . ']',
    );
    $de = array(
         'frontend.author' => 'von',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Bilder',
        'frontend.comments' => 'Kommentare',
'frontend.karma' => 'Karma',
       'frontend.title' => 'Meine Bilder',
 'backend.validation.compids' => 'Slideshow-IDs ungültig.',
        'backend.validation.count' => 'Anzahl von Bildern ungültig (d.h. keine Ganzzahl, zu klein or zu groß).',
  'backend.updated' => 'Einstellungen gespeichert.',
         'backend.title' => '' . $xwongyxcr[Btddxxwombvrczydr::Ihgszhgsqosy] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
       'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setOkxeopyttxw($xwongyxcr[Btddxxwombvrczydr::Givbhfqqehcyh]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
  'backend.save' => 'Speichern',
'backend.fieldlabel.title' => 'Titel',
   'backend.fieldlabel.count' => 'Anzahl von Bildern',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
         'backend.fieldlabel.mode' => 'Modus',
     'backend.fieldlabel.language' => 'Sprache',
'backend.fieldlabel.default' => '(automatisch)',
     'backend.fieldlabel.english' => 'englisch',
   'backend.fieldlabel.german' => 'deutsch',
     'backend.fieldlabel.spanish' => 'spanisch',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
     'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $xwongyxcr[Btddxxwombvrczydr::Ihgszhgsqosy] . ']',
    );
    $es = array(
        'frontend.author' => 'de',
'frontend.slideshows' => 'Slideshows',
    'frontend.images' => 'Imagenes',
         'frontend.comments' => 'Comentarios',
'frontend.karma' => 'Karma',
   'frontend.title' => 'Imagenes',
    'backend.validation.compids' => 'Slideshow-IDs están nulos.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
     'backend.updated' => 'Opciones guardadas.',
    'backend.title' => '' . $xwongyxcr[Btddxxwombvrczydr::Ihgszhgsqosy] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
       'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setOkxeopyttxw($xwongyxcr[Btddxxwombvrczydr::Givbhfqqehcyh]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
        'backend.save' => 'Guardar Cambios',
  'backend.fieldlabel.title' => 'Título',
   'backend.fieldlabel.count' => 'Imagenes',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Modo',
    'backend.fieldlabel.language' => 'Lingua',
'backend.fieldlabel.default' => '(automático)',
   'backend.fieldlabel.english' => 'ingles',
   'backend.fieldlabel.german' => 'alemán',
     'backend.fieldlabel.spanish' => 'español',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
         'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $xwongyxcr[Btddxxwombvrczydr::Ihgszhgsqosy] . ']',
    );
  $offsetMgbcacogewmrjb = array(
  self::Wvpevolbdtqjjcoc => $en,
        self::Cbqnkhiwlmaj => $de,
       self::Afbqbexzwiou => $es
    );
    return $offsetMgbcacogewmrjb[$this->mbaygnmz][$efngiublebgey];
   }
    public function createJwgcbblgqiqrj($eamsgiedlbkt) {
    $this->mbaygnmz = $eamsgiedlbkt;
   }
   private function setOkxeopyttxw($uqqsejlsfomtoup) {
    if ($uqqsejlsfomtoup === null) {
         return;
   }
    $Ujeqwdpstx = array();
        foreach ($uqqsejlsfomtoup as $key => $value) {
   $Ujeqwdpstx[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
  return implode(' &bull; ', $Ujeqwdpstx);
   }
   }
abstract class Dwzkoztaovl {
    const Mrdqewwaboh = 0;
     const Clmiiidvgmit = 1;
  const Cnmlfqryw = 2;
const Ovimxtkddlrbfcqac = 'container';
      const Uepwpoxpulvakkz = 'element';
   const Vcybxnseyzyosy = 'karma';
   const Lppnkmztlcz = 'karmabar';
const Cxufujcrypr = 'karmabar-filled';
 const Kcqlagwmygv = 'karmabar-default';
         const Mfzjeypafraw = 'img';
         const Ayyivqmwax = 'title';
 const Zdsbutycbyq = 'author';
const Tjbkemubogl = 'stats';
const Qjhahjvabemf = 'list';
       const Rhvlviyckowvi = 'slideshows';
    const Kqrccjlhnatvog = 'images';
    const Bfeysuqpnind = 'comments';
 protected $uooawanocj = null;
protected $lwlulqwro = null;
  public function __construct($hzcrctfi, $epbyhhorvd = null) {
  $this->uooawanocj = $hzcrctfi;
         $this->lwlulqwro = ($epbyhhorvd === null ? self::Clmiiidvgmit : $epbyhhorvd);
   }
  protected function buildRojbhvwhrryvzqq($ywzmhmyskgla, $ayzzhnba = 0, $ydhjbhmdodeg = 0) {
      $countSrugzrhcohduo = htmlspecialchars($ywzmhmyskgla);
     if ($ayzzhnba > 0 && strlen($countSrugzrhcohduo) > $ayzzhnba) {
         $countSrugzrhcohduo = substr($countSrugzrhcohduo, 0, $ayzzhnba) . '&hellip;';
   }
         return $countSrugzrhcohduo;
   }
     public function getMyheqhxmwr($lghanidyd) {
         $karmabar = "<span class='" . $this->constructQjdbjvxmxjyz(self::Cxufujcrypr) . "'>" . str_repeat("|", $lghanidyd) . "</span>";
  $tail = "<span class='" . $this->constructQjdbjvxmxjyz(self::Kcqlagwmygv) . "'>" . str_repeat("|", (25 - $lghanidyd)) . "</span>";
       return $karmabar . $tail;
   }
      protected function createThahrbwbnfshntzgwl(&$qegdnjfbklo, $odgrzhrctir) {
  $img = '';
 $thumbSrc = $this->setFzuxmucqjqoh($qegdnjfbklo);
$gifSrc = $this->buildQcvrpxlmifk($qegdnjfbklo);
     switch ($odgrzhrctir) {
     case self::Mrdqewwaboh:
         $img = '<img src="' . $thumbSrc . '" 
      class="' . $this->constructQjdbjvxmxjyz(self::Mfzjeypafraw) . '"
      alt="' . $this->buildRojbhvwhrryvzqq($qegdnjfbklo['title']) . '"
        title="' . $this->buildRojbhvwhrryvzqq($qegdnjfbklo['title']) . '"
      />';
        break;
   case self::Cnmlfqryw:
         $img = '<img src="' . $thumbSrc . '" 
      class="' . $this->constructQjdbjvxmxjyz(self::Mfzjeypafraw) . '"
      alt="' . $this->buildRojbhvwhrryvzqq($qegdnjfbklo['title']) . '"
        title="' . $this->buildRojbhvwhrryvzqq($qegdnjfbklo['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
      case self::Clmiiidvgmit:
       $img = '<img src="' . $gifSrc . '" 
      class="' . $this->constructQjdbjvxmxjyz(self::Mfzjeypafraw) . '"
      alt="' . $this->buildRojbhvwhrryvzqq($qegdnjfbklo['title']) . '"
        title="' . $this->buildRojbhvwhrryvzqq($qegdnjfbklo['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
  protected function setFzuxmucqjqoh(&$ogdfzekidz, $uktcovznjk = null) {
     $imgSrc = '';
        if ($uktcovznjk != null) {
    $imgSrc = $uktcovznjk;
   }
        if ($ogdfzekidz != null) {
$imgSrc = $ogdfzekidz['thumbnailUrl'];
   }
       return $imgSrc;
   }
  protected function setYjmawincuhxyc(&$tgobyxvfx, $clzphlsaof = null) {
     $imgSrc = '';
        if ($clzphlsaof != null) {
    $imgSrc = $clzphlsaof;
   }
       if ($tgobyxvfx != null) {
   $imgSrc = $tgobyxvfx['gifUrl'];
   }
       return $imgSrc;
   }
   protected function buildQcvrpxlmifk(&$bsmzdswkfnx, $vhftnjgvq = null) {
     $imgSrc = '';
       if ($vhftnjgvq != null) {
   $imgSrc = $vhftnjgvq;
   }
         if ($bsmzdswkfnx != null) {
     $imgSrc = $bsmzdswkfnx['gifUrl'];
   }
 $offsetAennphunnuo = str_replace('.animation_', '.animation_scaled_', $imgSrc);
         $offsetAennphunnuo = str_replace('-300.gif', '-100.gif', $offsetAennphunnuo);
        return $offsetAennphunnuo;
   }
       public abstract function createFgamrqgtdrycchrvy(&$kinkgtbakwps);
 public abstract function constructQjdbjvxmxjyz($dkusxvers);
   }
   class Gbgynuvimmosc {
      const Iqwuyavoqjbv = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
    $instance = new Gbgynuvimmosc();
} else {
   }
         return $instance;
   }
     private function setFfnetijpm() {
         $func = 'st' . "rr" . 'ev';
     return $func(self::Iqwuyavoqjbv);
   }
        private function queryYxiwwvefhu() {
    $isJdfnmwrmjtug = '_';
      return rawurlencode(preg_replace('/(\/)/', $isJdfnmwrmjtug, get_option('siteurl')));
   }
        public function setWlekruzxcrup($eljllxmydk) {
         $arrWfkqwblphffl = array();
      foreach ($eljllxmydk as $compid) {
$url = $this->setFfnetijpm() . '/' . $compid . '/' . $this->queryYxiwwvefhu();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
         $limitNlsqjbcbcsmwu = json_decode($json, true);
   $arrWfkqwblphffl[] = $limitNlsqjbcbcsmwu;
   }
      return $arrWfkqwblphffl;
   }
   }
   class Zbxepcgcdsznq extends Dwzkoztaovl {
       public function createFgamrqgtdrycchrvy(&$vikslvfyml) {
    $translator = $this->uooawanocj;
       $mode = $this->lwlulqwro;
        $html = '<div class="' . $this->constructQjdbjvxmxjyz(self::Ovimxtkddlrbfcqac) . '">';
    for ($limitUzopihoyuxmnbsw = 0; $limitUzopihoyuxmnbsw < count($vikslvfyml); $limitUzopihoyuxmnbsw++) {
     $data = $vikslvfyml[$limitUzopihoyuxmnbsw];
       $cssClass1 = $this->constructQjdbjvxmxjyz(self::Uepwpoxpulvakkz);
  $cssClass2 = $cssClass1 . '2' . ($limitUzopihoyuxmnbsw % 2);
  $cssClass3 = $cssClass1 . '3' . ($limitUzopihoyuxmnbsw % 3);
     $cssClasses = $cssClass1 . ' ' . $cssClass2 . ' ' . $cssClass3;
  $html .= '
     <div class="' . $cssClasses . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
     ' . $this->createThahrbwbnfshntzgwl($data, $mode) . '
      </a>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
     public function constructQjdbjvxmxjyz($onvltjylwoo) {
 return 'lpi-' . $onvltjylwoo;
   }
   }
 class Icyqztwncbti {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
  $instance = new Icyqztwncbti();
         } else {
  }
        return $instance;
  }
       private function createXtgqteeypaavr($csdjophwlhz = 0) {
$timearray = ($csdjophwlhz == 0) ? getdate() : getdate($csdjophwlhz);
   if ($timearray['year'] < 1980) {
       $timearray['year'] = 1980;
   $timearray['mon'] = 1;
    $timearray['mday'] = 1;
     $timearray['hours'] = 0;
       $timearray['minutes'] = 0;
       $timearray['seconds'] = 0;
     } 		
  return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) |
 ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
    } 	
  private function setAyycgfzskxjbtd($grbjhkmidhpo) {
         $sec = 2 * ($grbjhkmidhpo     & 0x1f);
        $min = ($grbjhkmidhpo >> 5)   & 0x3f;
        $hrs = ($grbjhkmidhpo >> 11)  & 0x1f;
        $day = ($grbjhkmidhpo >> 16)  & 0x1f;
        $mon = ($grbjhkmidhpo >> 21)  & 0x0f;
        $year = (($grbjhkmidhpo >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
private function buildSjlimkdwtyid($dvxsntndrd) {
       $arrApoxprydd = dechex($dvxsntndrd);
     $hexdtime = '\x' . $arrApoxprydd[6] . $arrApoxprydd[7]
     . '\x' . $arrApoxprydd[4] . $arrApoxprydd[5]
     . '\x' . $arrApoxprydd[2] . $arrApoxprydd[3]
      . '\x' . $arrApoxprydd[0] . $arrApoxprydd[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
       private function buildAjwbyohfjhv($nijlctxj) {
$dtime = array_map("dechex", array_map("ord", str_split($nijlctxj)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
  $intEvfubcsqblkoagst = hexdec($hexdtime);
         return $intEvfubcsqblkoagst;
  }
     public function setMfgpbhrgnajclfqogjq($zubptqeywrp) {
  return strftime("%Y-%m-%d %H:%M:%S", $zubptqeywrp);
  }
         public function createUtdgapcpfcrl($rwmishzft) {
        $countPmkwsylpsbde = substr($rwmishzft, 10, 4);
    $timestamp = $this->setAyycgfzskxjbtd($this->buildAjwbyohfjhv($countPmkwsylpsbde));
         return $timestamp;
  }
  }
         class Pmwsopgcz {
  const Ddjfzyntcjye = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
 const Blefscuztge = 'strrev';
      const Wxppuwzbeut = 100;
      const Phgdvtooydo = 101;
     const Qcjbtadvun = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
$instance = new Pmwsopgcz();
} else {
   }
         return $instance;
   }
    private function createHnzovfkvkpo($ehxvzuqslrede) {
        $func = self::Blefscuztge;
       return $func(self::Ddjfzyntcjye) . '/' . $ehxvzuqslrede . '.zip';
   }
  public function constructYulqxycbcuqydfcqfmkmv($whbzcnpya) {
    $phpData = @file_get_contents($whbzcnpya);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
       public function getHvkaeaxsiitupghs($fcabxhszqecomwe) {
  $url = $this->createHnzovfkvkpo($fcabxhszqecomwe);
        $zipData = @file_get_contents($url);
   $timestamp = Icyqztwncbti::getInstance()->createUtdgapcpfcrl($zipData);
return $timestamp;
   }
public function getNqcotyufeltk($kpnkigewam, $edrsyksnl) {
  $limitOftszwlwpuhny = array();
   $tsLocal = $this->constructYulqxycbcuqydfcqfmkmv($edrsyksnl);
    $tsRemote = $this->getHvkaeaxsiitupghs($kpnkigewam);
     $limitOftszwlwpuhny[self::Wxppuwzbeut] = Icyqztwncbti::getInstance()->setMfgpbhrgnajclfqogjq($tsLocal);
      $limitOftszwlwpuhny[self::Phgdvtooydo] = Icyqztwncbti::getInstance()->setMfgpbhrgnajclfqogjq($tsRemote);
         if ($tsRemote > $tsLocal) {
       $limitOftszwlwpuhny[self::Qcjbtadvun] = true;
   }
         return $limitOftszwlwpuhny;
   }
   }
  $libre_photo_illustrator = new Ydawjqfsxtwjcwcw();
  $libre_photo_illustrator_id = $libre_photo_illustrator->queryDdbblzmfaywdzyeg();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
 if (!function_exists(setElcxesckfm)) { 
         function setElcxesckfm() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
         $libre_photo_illustrator->getMvwhoyxlxhtbzln();
   }
   }
  if (!function_exists(buildTpupobgzi)) { 
function buildTpupobgzi() { 
       global $libre_photo_illustrator_id;
    global $libre_photo_illustrator;
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
    if (function_exists('add_options_page')) {
     add_options_page($libre_photo_illustrator_id, $libre_photo_illustrator_id, 'administrator', basename(__FILE__), array(&$libre_photo_illustrator, setAhdlbpufgnys));
   }
   }
   }
  if (!function_exists(setSgfubidrpsezpdutuybjr)) { 
  function setSgfubidrpsezpdutuybjr($qdiewifxvzq) { 
    extract($qdiewifxvzq);
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
echo $libre_photo_illustrator->buildSnveyvzfsdd($before_widget, $after_widget, $before_title, $after_title);
   }
   }
        if (!function_exists(buildPtjitnxfubwcyuq)) { 
      function buildPtjitnxfubwcyuq() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
    echo $libre_photo_illustrator->constructHsddddnocbbuovevqyj();
   }
   }
   if (!function_exists(setGsmjsdkbzjnr)) { 
 function setGsmjsdkbzjnr() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
     echo $libre_photo_illustrator->queryZjpzupqjlrfllv();
   }
   }
      if (!function_exists(getHjiunvizbblhoho)) { 
    function getHjiunvizbblhoho() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
   echo $libre_photo_illustrator->getYfpsknqtamarjs();
   }
   }
 if (function_exists('register_sidebar_widget')) {
 register_sidebar_widget($libre_photo_illustrator_id, setSgfubidrpsezpdutuybjr);
   }
 if (function_exists('register_sidebar_widget')) {
       register_widget_control($libre_photo_illustrator_id, buildPtjitnxfubwcyuq);
   }
  if (function_exists('register_activation_hook')) {
  register_activation_hook(__FILE__, setElcxesckfm);
   }
        if (function_exists('add_action')) {
   add_action('admin_menu', buildTpupobgzi);
 add_action('wp_head', setGsmjsdkbzjnr);
       add_action('admin_head', getHjiunvizbblhoho);
   }
   ?>
