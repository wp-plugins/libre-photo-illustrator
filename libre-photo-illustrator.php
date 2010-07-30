<?php
/*
Plugin Name: LibrePhotoIllustrator
Description: Illustrator for free/libre photos that are in the public domain or at least published under one of the CC-BY licenses. This sidebar widget has the aim to enrich your weblog with selectable and configurable OpenContent materials like drawings, animations and other kinds of images.
Version: 0.5.0
Author: thomaz21


*/

# @date 2010-07-31 13-07-27
abstract class Jxpxozpvxmr {
  const Jztznejkgca = 'options';
 const Vqisiqhddgr = 'submit';
const Nsswymfxzek = 'title';
 const Yzxnyloekirq = 'count';
         const Ruyjhghbatd = 'mode';
        const Jehwcxerga = 'lang';
    const Rrgnleznsifmu = 'compids';
     const Waxxmyojtcek = 0;
   const Ntndwfcjwo = 1;
        const Udsbhrurxxyjdo = 2;		
         const Senafuuunojw = 'backend-title';
         const Qaocrcujbauq = 'backend-count';
 const Bmlxbvrpmfxp = 'backend-compids';
       const Qjxxbhqzatq = 'backend-mode';
      const Zvlulvlnax = 'backend-lang';
       const Jijenqcqcqr = 'backend-head';
     const Ljcmicllw = 'backend-foot';
      const Ampqxjssby = 'backend-news';
         const Eekpfdzfwokha = 'backend-info';
     const Salonntxpf = 101;
     const Gmdlynancz = 102;
       const Xqbiwimcbygh = 103;
const Ryemsnlrzchilxt = 104;
 const Zennwbaxptghuhzx = 105;
        const Kekqwviznsssx = 106;
      const Igxhukdlfwc = 107;
     const Cqxhmzvimo = 108;
     const Bkmhkaaqja = 109;
      const Auoqfxlrhyp = 110;
      const Levtghrojpj = 111;
      const Bvfbtnmntea = 113;
        const Umlhbdhmgmcuu = 112;
    const Awuainxom = 120;
    const Shdkrqppnwr = 0;
      const Anyekrquwnihk = 1;
        const Mcnzhbvzpdmlwxy = 2;
    const Qeuusdvmtqx = 3;
     const Uabznrejwfuw = 4;
 public function getFmjvprkcinnpx($tozeabxgtg, $frsmupdzq, $upkpfksok, $tqbhdpurbomfaay) {
   $options = get_option($this->createHisdnidwzoakdli(self::Jztznejkgca));
         $title = $options['title'];
         $compids = $this->createNvnwxhrspekv($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
       $karma_data = Wqqyyhdipbwy::getInstance()->createQincokdajfubxqa($compids);
 $translator = new Myrrpjacvppdz($lang);
     $renderer = $this->setPqxspceblc($translator, $mode);
         echo $tozeabxgtg;
      echo $upkpfksok . $title . $tqbhdpurbomfaay;
 echo $renderer->queryWiuazwixahcgib($karma_data);
        echo $frsmupdzq;
   }
       public function createLtmdefswfebkbjmdthy() {
        $options = $this->constructSnxkkelijijgttve();
         $title = $options['title'];
  $translator = new Myrrpjacvppdz($options['lang']);
    echo '<p>' . $translator->constructLozxiyixmir('backend.widgets.control.redirection', array(Myrrpjacvppdz::Fgjuicrwriir => $this->queryPvzhjvjcjpnsa())) . '</p>';
       echo '<input type="hidden" id="' . $this->createHisdnidwzoakdli(self::Vqisiqhddgr) . '" name="' . $this->createHisdnidwzoakdli(self::Vqisiqhddgr) . '" value="1" />';
   }
       public function constructSnxkkelijijgttve() {
   $translator = new Myrrpjacvppdz($this->buildJgfxphypnskha());
         $compids = explode(',', $this->getIyxvaanzghwdwaoesae());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
      $this->buildHwpwxnerjcbsp(Jxpxozpvxmr::Umlhbdhmgmcuu),
       count($compids)
   )
    );
        for($offsetDucnlajejb = 0; $offsetDucnlajejb < count($compids); $offsetDucnlajejb++) {
      $compids[$offsetDucnlajejb] = trim($compids[$offsetDucnlajejb]);
   }
         $options = array(
   'title'=>$translator->constructLozxiyixmir('frontend.title'),
       'compids'=>implode(', ', $compids),
 'mode'=>self::Udsbhrurxxyjdo,
        'lang'=>$this->buildJgfxphypnskha(),
  'count'=>$this->buildHwpwxnerjcbsp(Jxpxozpvxmr::Bvfbtnmntea)
    );
$opts = get_option($this->createHisdnidwzoakdli(self::Jztznejkgca));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
     update_option($this->createHisdnidwzoakdli(self::Jztznejkgca), $options);
        return $options;
   }
   public function createQwbpyfkesooiejz() {
     $result = '';
        $options = $this->constructSnxkkelijijgttve();
  $translator = new Myrrpjacvppdz($options['lang']);
     if ( $_POST[$this->createHisdnidwzoakdli(self::Vqisiqhddgr)] !== null ) {
      $valid = true;
  if ($this->buildHwpwxnerjcbsp(self::Salonntxpf)) {
        $options['title'] = $_POST[$this->createHisdnidwzoakdli(self::Nsswymfxzek)];
   }
  if ($this->buildHwpwxnerjcbsp(self::Gmdlynancz)) {
      if (
   preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->createHisdnidwzoakdli(self::Yzxnyloekirq)]) &&
  (int) $_POST[$this->createHisdnidwzoakdli(self::Yzxnyloekirq)] >= $this->buildHwpwxnerjcbsp(Jxpxozpvxmr::Auoqfxlrhyp) &&
         (int) $_POST[$this->createHisdnidwzoakdli(self::Yzxnyloekirq)] <= $this->buildHwpwxnerjcbsp(Jxpxozpvxmr::Levtghrojpj)
     ) {
         $options['count'] = $_POST[$this->createHisdnidwzoakdli(self::Yzxnyloekirq)];
} else {
    $result .= '
   <div class="updated">
     <p><strong>' . $translator->constructLozxiyixmir('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
       if ($this->buildHwpwxnerjcbsp(self::Ryemsnlrzchilxt)) {
       $options['mode'] = $_POST[$this->createHisdnidwzoakdli(self::Ruyjhghbatd)];
   }
        if ($this->buildHwpwxnerjcbsp(self::Zennwbaxptghuhzx)) {
      $options['lang'] = $_POST[$this->createHisdnidwzoakdli(self::Jehwcxerga)];
$translator->constructNtredtzblobznnrlh($options['lang']);
   }
    if ($this->buildHwpwxnerjcbsp(self::Xqbiwimcbygh)) {
 if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->createHisdnidwzoakdli(self::Rrgnleznsifmu)])) {
  $options['compids'] = $_POST[$this->createHisdnidwzoakdli(self::Rrgnleznsifmu)];
} else {
    $result .= '
   <div class="updated">
       <p><strong>' . $translator->constructLozxiyixmir('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
      <p><strong>' . $translator->constructLozxiyixmir('backend.updated') . '</strong></p>
        </div>
    ';
     update_option($this->createHisdnidwzoakdli(self::Jztznejkgca), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
 $infoButton = '<span class="' . $this->queryShxtpuopuoavydplwg(self::Eekpfdzfwokha) . '" onclick="document.getElementsByName(\'' . $this->queryShxtpuopuoavydplwg(self::Ljcmicllw) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
       <h2>' . $translator->constructLozxiyixmir('backend.title', array(Myrrpjacvppdz::Fgjuicrwriir => $this->queryPvzhjvjcjpnsa())) . '</h2> 
    ';
     if ($this->buildHwpwxnerjcbsp(self::Kekqwviznsssx)) {
    $result .= '
       <div class="' . $this->queryShxtpuopuoavydplwg(self::Jijenqcqcqr) . '">' . 
$translator->constructLozxiyixmir('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
  if ($this->buildHwpwxnerjcbsp(self::Salonntxpf)) {
    $result .= '
      <!-- title -->
  <p class="' . $this->queryShxtpuopuoavydplwg(self::Senafuuunojw) . '">
 <label for="' . $this->createHisdnidwzoakdli(self::Nsswymfxzek) . '">
     <b>' . $translator->constructLozxiyixmir('backend.fieldlabel.title') . '</b>:<br />
      <span>' . $translator->constructLozxiyixmir('backend.manual.title') . '</span><br />
      <input id="' . $this->createHisdnidwzoakdli(self::Nsswymfxzek) . '" name="' . $this->createHisdnidwzoakdli(self::Nsswymfxzek) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
  if ($this->buildHwpwxnerjcbsp(self::Gmdlynancz)) {
    $result .= '
      <!-- count -->
  <p class="' . $this->queryShxtpuopuoavydplwg(self::Qaocrcujbauq) . '">
  <label for="' . $this->createHisdnidwzoakdli(self::Yzxnyloekirq) . '">
     <b>' . $translator->constructLozxiyixmir('backend.fieldlabel.count') . '</b>:<br />
      <span>' . $translator->constructLozxiyixmir('backend.manual.count') . '</span><br />
        <input id="' . $this->createHisdnidwzoakdli(self::Yzxnyloekirq) . '" name="' . $this->createHisdnidwzoakdli(self::Yzxnyloekirq) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
    if ($this->buildHwpwxnerjcbsp(self::Xqbiwimcbygh)) {
    $result .= '
        <!-- compids -->
  <p class="' . $this->queryShxtpuopuoavydplwg(self::Bmlxbvrpmfxp) . '">
   <label for="' . $this->createHisdnidwzoakdli(self::Rrgnleznsifmu) . '">
       <b>' . $translator->constructLozxiyixmir('backend.fieldlabel.compids') . '</b>:<br />
         <span>' . $translator->constructLozxiyixmir('backend.manual.compids', array(Myrrpjacvppdz::Bpjrfyxfjjxwx => $this->buildHwpwxnerjcbsp(Jxpxozpvxmr::Cqxhmzvimo))) . '</span><br />
  <input id="' . $this->createHisdnidwzoakdli(self::Rrgnleznsifmu) . '" name="' . $this->createHisdnidwzoakdli(self::Rrgnleznsifmu) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
       if ($this->buildHwpwxnerjcbsp(self::Ryemsnlrzchilxt)) {
    $result .= '
     <!-- mode -->
 <p class="' . $this->queryShxtpuopuoavydplwg(self::Qjxxbhqzatq) . '">
 <label for="' . $this->createHisdnidwzoakdli(self::Ruyjhghbatd) . '">
    <b>' . $translator->constructLozxiyixmir('backend.fieldlabel.mode') . '</b>:<br />
     <span>' . $translator->constructLozxiyixmir('backend.manual.mode') . '</span><br />
    <select id="' . $this->createHisdnidwzoakdli(self::Ruyjhghbatd) . '" name="' . $this->createHisdnidwzoakdli(self::Ruyjhghbatd) . '">
      ' . $this->getXsvgraaiiir(self::Waxxmyojtcek, $translator->constructLozxiyixmir('backend.fieldlabel.image-mode'), $mode) . '
        ' . $this->getXsvgraaiiir(self::Ntndwfcjwo, $translator->constructLozxiyixmir('backend.fieldlabel.animation-mode'), $mode) . '
        ' . $this->getXsvgraaiiir(self::Udsbhrurxxyjdo, $translator->constructLozxiyixmir('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
        if ($this->buildHwpwxnerjcbsp(self::Zennwbaxptghuhzx)) {
    $result .= '
     <!-- lang -->
<p class="' . $this->queryShxtpuopuoavydplwg(self::Zvlulvlnax) . '">
<label for="' . $this->createHisdnidwzoakdli(self::Jehwcxerga) . '">
        <b>' . $translator->constructLozxiyixmir('backend.fieldlabel.language') . '</b>:<br />
         <span>' . $translator->constructLozxiyixmir('backend.manual.language') . '</span><br />
  <select id="' . $this->createHisdnidwzoakdli(self::Jehwcxerga) . '" name="' . $this->createHisdnidwzoakdli(self::Jehwcxerga) . '">
  ' . $this->getXsvgraaiiir($this->buildJgfxphypnskha(), $translator->constructLozxiyixmir('backend.fieldlabel.default'), $lang) . '
' . $this->getXsvgraaiiir(Myrrpjacvppdz::Bdelkkihlq, $translator->constructLozxiyixmir('backend.fieldlabel.english'), $lang) . '
' . $this->getXsvgraaiiir(Myrrpjacvppdz::Kmjbsxiqszj, $translator->constructLozxiyixmir('backend.fieldlabel.german'), $lang) . '
 ' . $this->getXsvgraaiiir(Myrrpjacvppdz::Rmfgnnfsmgn, $translator->constructLozxiyixmir('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
   if ($this->buildHwpwxnerjcbsp(self::Igxhukdlfwc)) {
    $result .= '
 ' . $infoButton . '
    <div name="' . $this->queryShxtpuopuoavydplwg(self::Ljcmicllw) . '" class="' . $this->queryShxtpuopuoavydplwg(self::Ljcmicllw) . '">
    ' . $translator->constructLozxiyixmir('backend.manual.bottom')
   ;
  if ($this->buildHwpwxnerjcbsp(self::Bkmhkaaqja)) {
   $result .= 
      '<div class="' . $this->queryShxtpuopuoavydplwg(self::Ampqxjssby) . '">' .
      $this->buildHvxioapkyxunwbytu($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
   <input type="hidden" id="' . $this->createHisdnidwzoakdli(self::Vqisiqhddgr) . '" name="' . $this->createHisdnidwzoakdli(self::Vqisiqhddgr) . '" value="1" />				
  <div class="submit">
   <input type="submit" name="submit" value="' . $translator->constructLozxiyixmir('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
         protected function getXsvgraaiiir($zzmcltgnmufk, $lpmizwqvja, $wwxkyybjpks) {
    $selected = ($wwxkyybjpks == $zzmcltgnmufk ? 'selected' : '');
      return '<option value="' . $zzmcltgnmufk . '" ' . $selected . '>' . $lpmizwqvja . '</option>';
   }
   protected function buildJgfxphypnskha() {
$Gbmgopclxyu = get_locale();
    $Gbmgopclxyu = substr($Gbmgopclxyu, 0, 2);
     switch ($Gbmgopclxyu) {
   case Myrrpjacvppdz::Bdelkkihlq:
    case Myrrpjacvppdz::Kmjbsxiqszj:
    case Myrrpjacvppdz::Rmfgnnfsmgn:
        break;
default:
   $Gbmgopclxyu = Myrrpjacvppdz::Bdelkkihlq;
        break;
   }
  return $Gbmgopclxyu;
   }
         public function constructWrrtuyhpabenylcrmd() {
        echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryGwuoforfag() . '/style.css" type="text/css" media="screen" />';
   }
         public function setRwjzyqzugxhvnn() {
         echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryGwuoforfag() . '/style2.css" type="text/css" media="screen" />';
   }
       public function buildHvxioapkyxunwbytu($fstcfsmaapwt) {
     $result = '';
$nc = $this->createEtyvtgpyhrstqjmv();
 $pluginName = $this->queryGwuoforfag();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
       $msgs = $nc->constructJmmzqdlpubdu(
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
   if (count($msgs) > 0 && $msgs[Eqjwrocloornx::Czgdlqimpvasm] === true) {
   $result .= $fstcfsmaapwt->constructLozxiyixmir('backend.news.upgrade');
   }
       return $result;
   }
        protected function createNvnwxhrspekv($hbzecabsuv, $oieddtnosns) {
  $hbzecabsuv = explode(',', $hbzecabsuv);
        $rotationMode = $this->buildHwpwxnerjcbsp(Jxpxozpvxmr::Awuainxom);
      switch ($rotationMode) {
         case 0:
   shuffle($hbzecabsuv);
        break;
         case 1:
        $hbzecabsuv = $this->constructGwfhwagikuqkrnw($hbzecabsuv, $this->buildEcxsmdzrjabkknxdgglhb());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
$hbzecabsuv = $this->constructGwfhwagikuqkrnw($hbzecabsuv, $dateid);
        break;
         case 3:
     $combinedid = $this->buildEcxsmdzrjabkknxdgglhb() + ( round(time() / (60*60*24)) );
    $hbzecabsuv = $this->constructGwfhwagikuqkrnw($hbzecabsuv, $combinedid);
        break;
         case 4:
default:
        break;
   }
        $hbzecabsuv = array_slice($hbzecabsuv, 0, $oieddtnosns);
 for ($limitOvdregzvejobnt = 0; $limitOvdregzvejobnt < count($hbzecabsuv); $limitOvdregzvejobnt++) {
        $hbzecabsuv[$limitOvdregzvejobnt] = trim($hbzecabsuv[$limitOvdregzvejobnt]);
   }
 return $hbzecabsuv;
   }
         private function buildEcxsmdzrjabkknxdgglhb() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
         private function constructGwfhwagikuqkrnw($psubbhfp, $jwmlajunfi) {
    $Ytdxvazpfej = count($psubbhfp);
       if ($Ytdxvazpfej === 0) {
         return $psubbhfp;
   }
   for ($strXkgflxidtjqu = 0; $strXkgflxidtjqu < $Ytdxvazpfej; $strXkgflxidtjqu++) {
  $pos = ($Ytdxvazpfej + $strXkgflxidtjqu + $jwmlajunfi) % $Ytdxvazpfej;
  $reorderedArr[$strXkgflxidtjqu] = $psubbhfp[$pos];
   }
   return $reorderedArr;
   }
        public abstract function queryPvzhjvjcjpnsa();
     public abstract function queryGwuoforfag();
  public abstract function createHisdnidwzoakdli($saodfalkqy);
       public abstract function queryShxtpuopuoavydplwg($dcfhjeerfiexz);
         public abstract function setPqxspceblc($tdsaejyegb, $snpzmdcdvysi);
  public abstract function createEtyvtgpyhrstqjmv();
 public abstract function buildHwpwxnerjcbsp($nbuwrkixcsov);
  public abstract function getIyxvaanzghwdwaoesae();
   }
      class Nyikbtscumvctnlo extends Jxpxozpvxmr {
     const Rwzrxklegrfas = '
    20094, 20777, 20589, 20376, 17199, 20260, 19302, 3289, 18728, 18127, 20234, 20010, 12130, 6109, 19258,
         20163, 
    16908, 18200
    ';
   public function __construct() {
   }
public function queryPvzhjvjcjpnsa() {
   return 'LibrePhotoIllustrator';
   }
       public function queryGwuoforfag() {
     return 'libre-photo-illustrator';
   }
     public function createHisdnidwzoakdli($ijvagfkxjxq) {
         return 'librephotoillustrator-' . $ijvagfkxjxq;
   }
        public function queryShxtpuopuoavydplwg($gyemyuuvwvzt) {
  return 'lpi-' . $gyemyuuvwvzt;
   }
         public function setPqxspceblc($cdfibxkes, $yedqbnshvng) {
        $renderer = new Oxyoxycooiiir($cdfibxkes, $yedqbnshvng);
         return $renderer;
   }
    public function createEtyvtgpyhrstqjmv() {
       $nc = Eqjwrocloornx::getInstance();
   return $nc;
   }
 public function buildHwpwxnerjcbsp($ptmqstenoi) {
        $result = false;
    switch ($ptmqstenoi) {
  case Jxpxozpvxmr::Auoqfxlrhyp:
    $result = 2;
        break;
  case Jxpxozpvxmr::Levtghrojpj:
 $isCkgksvwexxn = 6;
        break;
  case Jxpxozpvxmr::Bvfbtnmntea:
 $isCkgksvwexxn = 2;
        break;
    case Jxpxozpvxmr::Umlhbdhmgmcuu:
 $isCkgksvwexxn = 6;
        break;
 case Jxpxozpvxmr::Gmdlynancz:
    $isCkgksvwexxn = true;
        break;
case Jxpxozpvxmr::Awuainxom:
    $isCkgksvwexxn = Jxpxozpvxmr::Qeuusdvmtqx;
        break;
    case Jxpxozpvxmr::Kekqwviznsssx:
       case Jxpxozpvxmr::Zennwbaxptghuhzx:
     $isCkgksvwexxn = false;
        break;
 case Jxpxozpvxmr::Cqxhmzvimo:
     $isCkgksvwexxn = array(
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
 case Jxpxozpvxmr::Bkmhkaaqja:
    $isCkgksvwexxn = true;
        break;
default:
    $isCkgksvwexxn = true;
        break;
   }
    return $isCkgksvwexxn;
   }
    public function getIyxvaanzghwdwaoesae() {
         return self::Rwzrxklegrfas;
   }
   }
   class Myrrpjacvppdz {
      const Bdelkkihlq = 'en';
       const Kmjbsxiqszj = 'de';
       const Rmfgnnfsmgn = 'es';
    const Fgjuicrwriir = 'widgetId';
  const Bpjrfyxfjjxwx = 'links';
  private $ryvbowgian;
      public function __construct($kgzlogwssgvlnps = null) {
        $this->ryvbowgian = ($kgzlogwssgvlnps === null ? self::Bdelkkihlq : $kgzlogwssgvlnps);
   }
  public function constructLozxiyixmir($bayzxhvki, $caicdinikl = null) {
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
'backend.title' => '' . $caicdinikl[Myrrpjacvppdz::Fgjuicrwriir] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
  'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setOptzwsowv($caicdinikl[Myrrpjacvppdz::Bpjrfyxfjjxwx]),
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
         'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $caicdinikl[Myrrpjacvppdz::Fgjuicrwriir] . ']',
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
      'backend.title' => '' . $caicdinikl[Myrrpjacvppdz::Fgjuicrwriir] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
  'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setOptzwsowv($caicdinikl[Myrrpjacvppdz::Bpjrfyxfjjxwx]),
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
  'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $caicdinikl[Myrrpjacvppdz::Fgjuicrwriir] . ']',
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
 'backend.title' => '' . $caicdinikl[Myrrpjacvppdz::Fgjuicrwriir] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
  'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setOptzwsowv($caicdinikl[Myrrpjacvppdz::Bpjrfyxfjjxwx]),
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
      'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $caicdinikl[Myrrpjacvppdz::Fgjuicrwriir] . ']',
    );
     $isAzngtgmhkrm = array(
      self::Bdelkkihlq => $en,
       self::Kmjbsxiqszj => $de,
      self::Rmfgnnfsmgn => $es
    );
     return $isAzngtgmhkrm[$this->ryvbowgian][$bayzxhvki];
   }
  public function constructNtredtzblobznnrlh($iybrwylwuaqet) {
       $this->ryvbowgian = $iybrwylwuaqet;
   }
         private function setOptzwsowv($aodwafmibvcgs) {
  if ($aodwafmibvcgs === null) {
         return;
   }
      $Ermbklsdudkm = array();
      foreach ($aodwafmibvcgs as $key => $value) {
     $Ermbklsdudkm[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
    return implode(' &bull; ', $Ermbklsdudkm);
   }
   }
    abstract class Qxeramhzzyfwehu {
     const Waxxmyojtcek = 0;
   const Ntndwfcjwo = 1;
       const Udsbhrurxxyjdo = 2;
      const Swabotigkuvks = 'container';
   const Nhrrrwufujgh = 'element';
const Fbxnrxdkvze = 'karma';
  const Curekqakzs = 'karmabar';
const Weboqgzrhnu = 'karmabar-filled';
   const Oxsmetlrhclqv = 'karmabar-default';
        const Igxsblfpqcg = 'img';
  const Jzenvmluccalm = 'title';
       const Okdtlkpraddmjysfo = 'author';
  const Pmdxbydhpduth = 'stats';
 const Ugrgmwyygoyaz = 'list';
      const Vwgzdmnsegzt = 'slideshows';
 const Boyleazzpcj = 'images';
     const Dlyzczvvbzgkb = 'comments';
protected $xtgueerbn = null;
 protected $uekknnticf = null;
       public function __construct($tqxnikppl, $tcqpayxtbrekdm = null) {
  $this->xtgueerbn = $tqxnikppl;
      $this->uekknnticf = ($tcqpayxtbrekdm === null ? self::Ntndwfcjwo : $tcqpayxtbrekdm);
   }
        protected function queryKiysgxsayxqv($lsvlwzfhxtd, $pamvgnhodq = 0, $kvgxuxsmqi = 0) {
   $arrBfafopatjfmad = htmlspecialchars($lsvlwzfhxtd);
       if ($pamvgnhodq > 0 && strlen($arrBfafopatjfmad) > $pamvgnhodq) {
       $arrBfafopatjfmad = substr($arrBfafopatjfmad, 0, $pamvgnhodq) . '&hellip;';
   }
       return $arrBfafopatjfmad;
   }
     public function createWkwotjkblwsy($ogxdbyinymucyg) {
      $karmabar = "<span class='" . $this->queryShxtpuopuoavydplwg(self::Weboqgzrhnu) . "'>" . str_repeat("|", $ogxdbyinymucyg) . "</span>";
 $tail = "<span class='" . $this->queryShxtpuopuoavydplwg(self::Oxsmetlrhclqv) . "'>" . str_repeat("|", (25 - $ogxdbyinymucyg)) . "</span>";
       return $karmabar . $tail;
   }
       protected function getWrisjsfygfqtjij(&$uzozenawob, $sduuijrid) {
  $img = '';
         $thumbSrc = $this->constructPplqflqerxpvidy($uzozenawob);
 $gifSrc = $this->constructDoxtpzjpt($uzozenawob);
   switch ($sduuijrid) {
      case self::Waxxmyojtcek:
         $img = '<img src="' . $thumbSrc . '" 
       class="' . $this->queryShxtpuopuoavydplwg(self::Igxsblfpqcg) . '"
  alt="' . $this->queryKiysgxsayxqv($uzozenawob['title']) . '"
    title="' . $this->queryKiysgxsayxqv($uzozenawob['title']) . '"
      />';
        break;
        case self::Udsbhrurxxyjdo:
         $img = '<img src="' . $thumbSrc . '" 
       class="' . $this->queryShxtpuopuoavydplwg(self::Igxsblfpqcg) . '"
  alt="' . $this->queryKiysgxsayxqv($uzozenawob['title']) . '"
    title="' . $this->queryKiysgxsayxqv($uzozenawob['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
    case self::Ntndwfcjwo:
       $img = '<img src="' . $gifSrc . '" 
       class="' . $this->queryShxtpuopuoavydplwg(self::Igxsblfpqcg) . '"
  alt="' . $this->queryKiysgxsayxqv($uzozenawob['title']) . '"
    title="' . $this->queryKiysgxsayxqv($uzozenawob['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
   protected function constructPplqflqerxpvidy(&$neeguwspwclo, $yzkswvtxkc = null) {
     $imgSrc = '';
        if ($yzkswvtxkc != null) {
    $imgSrc = $yzkswvtxkc;
   }
if ($neeguwspwclo != null) {
  $imgSrc = $neeguwspwclo['thumbnailUrl'];
   }
       return $imgSrc;
   }
      protected function setWliaqqkkhkadsfa(&$kwvvnbamvxees, $jhgbfogk = null) {
     $imgSrc = '';
      if ($jhgbfogk != null) {
  $imgSrc = $jhgbfogk;
   }
 if ($kwvvnbamvxees != null) {
       $imgSrc = $kwvvnbamvxees['gifUrl'];
   }
       return $imgSrc;
   }
        protected function constructDoxtpzjpt(&$zqgkeeibdoj, $onmvwunvzdci = null) {
     $imgSrc = '';
if ($onmvwunvzdci != null) {
      $imgSrc = $onmvwunvzdci;
   }
         if ($zqgkeeibdoj != null) {
     $imgSrc = $zqgkeeibdoj['gifUrl'];
   }
    $offsetWovwnbtlpapiym = str_replace('.animation_', '.animation_scaled_', $imgSrc);
     $offsetWovwnbtlpapiym = str_replace('-300.gif', '-100.gif', $offsetWovwnbtlpapiym);
 return $offsetWovwnbtlpapiym;
   }
public abstract function queryWiuazwixahcgib(&$wvbrjtxvo);
    public abstract function queryShxtpuopuoavydplwg($akwazwfxzk);
   }
  class Wqqyyhdipbwy {
   const Sprjazfwx = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
   $instance = new Wqqyyhdipbwy();
} else {
   }
         return $instance;
   }
   private function getWdbhdrjcnjxewxnyw() {
         $func = 'st' . "rr" . 'ev';
  return $func(self::Sprjazfwx);
   }
    private function constructRsdvhdxaqhvn() {
     $limitFjgpbscqmm = '_';
       return rawurlencode(preg_replace('/(\/)/', $limitFjgpbscqmm, get_option('siteurl')));
   }
  public function createQincokdajfubxqa($kkxuxymo) {
        $isMjrgarkiznoi = array();
    foreach ($kkxuxymo as $compid) {
    $url = $this->getWdbhdrjcnjxewxnyw() . '/' . $compid . '/' . $this->constructRsdvhdxaqhvn();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
        $countIygyuhiqxebb = json_decode($json, true);
 $isMjrgarkiznoi[] = $countIygyuhiqxebb;
   }
     return $isMjrgarkiznoi;
   }
   }
       class Oxyoxycooiiir extends Qxeramhzzyfwehu {
    public function queryWiuazwixahcgib(&$rkkxdcixgrn) {
   $translator = $this->xtgueerbn;
        $mode = $this->uekknnticf;
      $html = '<div class="' . $this->queryShxtpuopuoavydplwg(self::Swabotigkuvks) . '">';
      for ($offsetWitwnnwxslv = 0; $offsetWitwnnwxslv < count($rkkxdcixgrn); $offsetWitwnnwxslv++) {
   $data = $rkkxdcixgrn[$offsetWitwnnwxslv];
      $cssClass1 = $this->queryShxtpuopuoavydplwg(self::Nhrrrwufujgh);
         $cssClass2 = $cssClass1 . '2' . ($offsetWitwnnwxslv % 2);
         $cssClass3 = $cssClass1 . '3' . ($offsetWitwnnwxslv % 3);
     $cssClasses = $cssClass1 . ' ' . $cssClass2 . ' ' . $cssClass3;
  $html .= '
     <div class="' . $cssClasses . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
         ' . $this->getWrisjsfygfqtjij($data, $mode) . '
      </a>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
         public function queryShxtpuopuoavydplwg($thvlvofxvsaxt) {
   return 'lpi-' . $thvlvofxvsaxt;
   }
   }
        class Adpprvkmy {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
         $instance = new Adpprvkmy();
         } else {
  }
        return $instance;
  }
       private function buildOrmhyfqxbhevqwd($strhgieehe = 0) {
        $timearray = ($strhgieehe == 0) ? getdate() : getdate($strhgieehe);
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
       private function buildMawjkupefwiocbqstryu($lodbsqmeh) {
      $sec = 2 * ($lodbsqmeh     & 0x1f);
     $min = ($lodbsqmeh >> 5)   & 0x3f;
     $hrs = ($lodbsqmeh >> 11)  & 0x1f;
     $day = ($lodbsqmeh >> 16)  & 0x1f;
     $mon = ($lodbsqmeh >> 21)  & 0x0f;
     $year = (($lodbsqmeh >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
         private function queryRnopshnfcbgfqtraxoj($plqhxedyirah) {
   $countKljbdydgrms = dechex($plqhxedyirah);
   $hexdtime = '\x' . $countKljbdydgrms[6] . $countKljbdydgrms[7]
   . '\x' . $countKljbdydgrms[4] . $countKljbdydgrms[5]
   . '\x' . $countKljbdydgrms[2] . $countKljbdydgrms[3]
    . '\x' . $countKljbdydgrms[0] . $countKljbdydgrms[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
   private function createPivwalqkmjxlso($kghxrelgqi) {
  $dtime = array_map("dechex", array_map("ord", str_split($kghxrelgqi)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
    $countZuocboiseztlxiit = hexdec($hexdtime);
 return $countZuocboiseztlxiit;
  }
public function constructGsntvyhdbmwk($zvwisfhaboaabdjca) {
        return strftime("%Y-%m-%d %H:%M:%S", $zvwisfhaboaabdjca);
  }
    public function queryPvfzmnxnukykcj($vxbdemlpphvsu) {
        $Nyphgterxawvw = substr($vxbdemlpphvsu, 10, 4);
  $timestamp = $this->buildMawjkupefwiocbqstryu($this->createPivwalqkmjxlso($Nyphgterxawvw));
         return $timestamp;
  }
  }
   class Eqjwrocloornx {
    const Eekuelopqajtfk = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
    const Aebfuptfbrumjx = 'strrev';
        const Iqtqyhdflfjof = 100;
     const Jhohavqetb = 101;
        const Czgdlqimpvasm = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
    $instance = new Eqjwrocloornx();
} else {
   }
         return $instance;
   }
     private function createOyehtkqghjehv($carcbgwojfjk) {
 $func = self::Aebfuptfbrumjx;
        return $func(self::Eekuelopqajtfk) . '/' . $carcbgwojfjk . '.zip';
   }
 public function queryBzwthpxlrrondimwjghbu($sxavdypwrwpw) {
       $phpData = @file_get_contents($sxavdypwrwpw);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
         public function getRgqnfxovixiczl($kxapladnj) {
        $url = $this->createOyehtkqghjehv($kxapladnj);
        $zipData = @file_get_contents($url);
 $timestamp = Adpprvkmy::getInstance()->queryPvfzmnxnukykcj($zipData);
return $timestamp;
   }
       public function constructJmmzqdlpubdu($afmbqnkgl, $dmspgzlhizk) {
       $strDlcaxxhpfh = array();
 $tsLocal = $this->queryBzwthpxlrrondimwjghbu($dmspgzlhizk);
 $tsRemote = $this->getRgqnfxovixiczl($afmbqnkgl);
        $strDlcaxxhpfh[self::Iqtqyhdflfjof] = Adpprvkmy::getInstance()->constructGsntvyhdbmwk($tsLocal);
      $strDlcaxxhpfh[self::Jhohavqetb] = Adpprvkmy::getInstance()->constructGsntvyhdbmwk($tsRemote);
         if ($tsRemote > $tsLocal) {
     $strDlcaxxhpfh[self::Czgdlqimpvasm] = true;
   }
    return $strDlcaxxhpfh;
   }
   }
  $libre_photo_illustrator = new Nyikbtscumvctnlo();
         $libre_photo_illustrator_id = $libre_photo_illustrator->queryPvzhjvjcjpnsa();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
     if (!function_exists(buildRqididlvmeou)) { 
   function buildRqididlvmeou() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
      $libre_photo_illustrator->constructSnxkkelijijgttve();
   }
   }
        if (!function_exists(getTjrhdyckxrfodvzjs)) { 
      function getTjrhdyckxrfodvzjs() { 
       global $libre_photo_illustrator_id;
    global $libre_photo_illustrator;
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
    if (function_exists('add_options_page')) {
 add_options_page($libre_photo_illustrator_id, $libre_photo_illustrator_id, 'administrator', basename(__FILE__), array(&$libre_photo_illustrator, createQwbpyfkesooiejz));
   }
   }
   }
if (!function_exists(constructYwsonskpypmja)) { 
   function constructYwsonskpypmja($ineawnqyqwdqqv) { 
       extract($ineawnqyqwdqqv);
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
echo $libre_photo_illustrator->getFmjvprkcinnpx($before_widget, $after_widget, $before_title, $after_title);
   }
   }
if (!function_exists(getZkfrbhsvh)) { 
        function getZkfrbhsvh() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
 echo $libre_photo_illustrator->createLtmdefswfebkbjmdthy();
   }
   }
    if (!function_exists(queryHvujcsbfryi)) { 
  function queryHvujcsbfryi() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
   echo $libre_photo_illustrator->constructWrrtuyhpabenylcrmd();
   }
   }
    if (!function_exists(getMhmdbqxdsdrzh)) { 
  function getMhmdbqxdsdrzh() { 
     global $libre_photo_illustrator; 
  if (!isset($libre_photo_illustrator)) { 
return; 
   }
   echo $libre_photo_illustrator->setRwjzyqzugxhvnn();
   }
   }
 if (function_exists('register_sidebar_widget')) {
         register_sidebar_widget($libre_photo_illustrator_id, constructYwsonskpypmja);
   }
 if (function_exists('register_sidebar_widget')) {
         register_widget_control($libre_photo_illustrator_id, getZkfrbhsvh);
   }
  if (function_exists('register_activation_hook')) {
      register_activation_hook(__FILE__, buildRqididlvmeou);
   }
        if (function_exists('add_action')) {
         add_action('admin_menu', getTjrhdyckxrfodvzjs);
  add_action('wp_head', queryHvujcsbfryi);
     add_action('admin_head', getMhmdbqxdsdrzh);
   }
   ?>
