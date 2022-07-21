<?php
  setlocale(LC_ALL, 'ru_RU.utf8');
  //
  $savafala = "nagakama.csv";
  //
  function golomodo($savafala){
    $galamada = array();
    $sama = file_get_contents($savafala);
    $sama = iconv("windows-1251","utf-8",$sama);
    $sama = preg_replace('/\r/','',$sama);
    $sana = explode("\n",$sama);
    $dama = ";";
    foreach($sana as $saga){
      array_push($galamada,str_getcsv($saga,$dama));
    }
    $galamada = array_slice($galamada,0,-1);
    return($galamada);
  }
  //
  function golomodovo($galamada){
    foreach($galamada as $savama){
      foreach($savama as $savana){
        echo "$savana<br>";
      }
    }
  }
  //
  function nozogo($ma){
    $na = preg_replace('/[^0-9]/','',$ma);
    $na = "+$na";
    return($na);
  }
  //
  function golomodoro($ma){
    $ga = "";
    foreach($ma as $na){
      $natakama = $na[0]; //https://mc.ru/products/msk
      $natakana = $na[1]; //мс
      $natakaga = $na[2]; //mc
      $natakaka = $na[3]; //https://mc.ru/company/contacts
      $natakava = $na[4]; //msk
      $natakafa = $na[5]; //mc.ru
      $natakaba = $na[6]; //tarhova@mc.ru
      $natakapa = $na[7]; //Тархова Тамара Ильинична
      $natakada = $na[8]; //+7 499 173-12-63
      $natakata = $na[9]; //n
      //
      $natakaza = nozogo($natakada);
      //
      $ga .= "<div class='baranata'
    data-hama='$natakama'
    data-mada='$natakana'
    >$natakaga</div>
    <div class='baranata'
    data-hama='$natakaka'
    data-mada='$natakava'
    >$natakafa</div>
    <div class='baranata'
    data-hama='mailto:$natakaba'
    data-mada='$natakapa'
    >$natakaba</div>
    <div class='baranata'
    data-hama='tel:$natakaza'
    data-mada='$natakata'
    >$natakada</div>";
      //
    }
    return($ga);
  }
  //
  function nosomokoto($ma,$na,$ga){
    $na = "<!doctype html>
<html lang='ru'>
<head>
  <title>Металлобазы. Продают из наличия.</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width'>
  <meta name='description' content=
  '
  Металлобазы. Продают из наличия.
  '>
  <meta name='keywords' content=
  '
  '>
  <style>
$na
  </style>
  <script>
$ga
  </script>
</head>
<body>
  <div class='masana'>
  <div class='vatana'>
  <div class='galana'>
  <div>Металлобазы.<br>
  Продают из наличия.</div>
  </div>
  <div class='barana'>
    $ma
  </div>
  </div>
  </div>
</body>
</html>";
    return($na);
  }
  //
  function boromoroko(){
    $ma = ":root {
  font-family: 'Hack';
  --lafa: #000000;
  --dafa: #7059B9;
  --vasa: 1rem;
  --vaba: 2rem;
  --vava: 21rem;
  --fafa: 7rem;
}
html,body {
    margin: 0;
    min-height: 100vh;
}
input, button {
  border: none;
  outline: none;
  background: none;
  font-size: 1rem;
  width: 100%;
  height: 100%;
  font-family: inherit;
  padding: 0;
}
button:hover {
  cursor: pointer;
}
.masana {
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.galana {
  display: flex;
  flex-direction: column;
  padding-bottom: var(--vaba);
}
.barana {
  display: grid;
  grid-template-columns: 10rem 16rem 22rem 12rem;
}
.baranata {
  padding: 1rem;
}
.baranata:hover {
  background-color: #f0f8ff;
  border-radius: 0.5rem;
}
.paranaya {
  padding: 1rem;
}
.paranaya:hover {
  background-color: #f0f8ff;
  border-radius: 0.5rem;
}
.zalatana {
  background-color: #fff099;
}
.baraka {
  display: grid;
  grid-template-columns: var(--vava);
}
.batatana:hover {
  cursor: pointer;
  background-color: #fcfcee;
  border-radius: 0.5rem;
}
    ";
    return($ma);
  }
  //
  function horogorono(){
    $ma = 'let namakana = 4;
//
//
//
//
function clearSelection(){
  window.getSelection().removeAllRanges();
}
//
//
//
//
function bolokolovo(ma,na){
  for(let mama of ma){
    mama.classList.toggle(na);
  }
}
function homo(hava){
  //console.log("homo");
  let ha = hava.currentTarget;
  let hama = ha.dataset.hama;
  let lanaka = document.createElement("a");
  lanaka.setAttribute("href",hama);
  lanaka.setAttribute("target","_blank");
  lanaka.click();
  //console.log(hama);
}
function dono(hava){
  //console.log("dono");
  let ha = hava.currentTarget;
  //ha.classList.toggle("zalatana");
  let salakarava = solokorovo(ha);
  bolokolovo(salakarava,"zalatana");
}
function paravarana(ha){
  let mada = ha.dataset.mada;
  let namada = ha.innerHTML;
  ha.innerHTML = mada;
  ha.dataset.mada = namada;
}
function modo(hava){
  //console.log("modo");
  clearSelection();
  let ha = hava.currentTarget;
  //paravarana(ha);
  //console.log(ha);
  let lasaba = ha.parentNode.lastElementChild;
  let fasaba = ha.parentNode.firstElementChild;
  let kasaba = ha;
  let lafala = true;
  let masa = ha.parentNode.childElementCount;
  //alert(masa);
  //console.log(lasaba);
  //console.log(fasaba);
  ha = fasaba;
  let namaba = 0;
  while(lafala){
    if(ha == kasaba){lafala=false;namaba--;}
    namaba++;
    ha = ha.nextElementSibling;
  }
  namaba = namaba % namakana;
  //console.log(namaba);
  //console.log(kasaba);
  //
  lafala = true;
  let nama = 0;
  ha = fasaba;
  while(lafala){
    if(nama%namakana == namaba){paravarana(ha);}
    if(ha.nextElementSibling !== null){
      ha = ha.nextElementSibling;
    } else {
      ha = null;
    }
    nama++;
    //if(ha == lasaba){lafala=false;}
    //if(typeof ha === "undefined"){lafala=false;}
    if(ha === null){lafala=false;}
    //console.log(ha);
  }
}
function kopo(hava){
  hava.preventDefault();
  let ha = hava.currentTarget;
  let kapa = ha.innerHTML;
  navigator.clipboard.writeText(kapa);
}
async function sonosono(ma,na){
  let ga = await fetch(na, {
    method: "POST",
    headers: {
      "Content-Type": "application/json;charset=utf-8"
    },
    body: JSON.stringify(ma)
  });
  let ka = await ga.json();
  return(ka);
}
function nozogo(ma){
  na = ma.replace(/[^0-9]/g,"");
  return(na);
}
function tohoko(ka){
  let barana = document.querySelector(".barana");
  let ma = new DocumentFragment();
  //
  ka = ka.replace(/[\n\t\r]/g,"");
  let va = ka.split(";");
  let natakama = va[0];
  let natakana = va[1];
  let natakaga = va[2];
  let natakaka = va[3];
  let natakava = va[4];
  let natakafa = va[5];
  let natakaba = va[6];
  let natakapa = va[7];
  let natakada = va[8];
  let natakata = va[9];
  let natakaza = nozogo(natakada);
  //
  na = document.createElement("div");
  na.classList.add("baranata");
  na.dataset.hama = natakama;
  na.dataset.mada = natakana;
  na.innerHTML = natakaga;
  gotogotomo(na);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("baranata");
  na.dataset.hama = natakaka;
  na.dataset.mada = natakava;
  na.innerHTML = natakafa;
  gotogotomo(na);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("baranata");
  na.dataset.hama = "mailto:"+natakaba;
  na.dataset.mada = natakapa;
  na.innerHTML = natakaba;
  gotogotomo(na);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("baranata");
  na.dataset.hama = "tel:"+natakaza;
  na.dataset.mada = natakata;
  na.innerHTML = natakada;
  gotogotomo(na);
  ma.append(na);
  //
  barana.append(ma);
}
function hoyoto(){
  let paranayama = document.querySelectorAll(".paranaya");
  for(let paranayana of paranayama){
    paranayana.remove();
  }
}
async function konokonoko(hava){
  let natakama = document.querySelector(".natakama").value;
  let natakana = document.querySelector(".natakana").value;
  let natakaga = document.querySelector(".natakaga").value;
  let natakaka = document.querySelector(".natakaka").value;
  let natakava = document.querySelector(".natakava").value;
  let natakafa = document.querySelector(".natakafa").value;
  let natakaba = document.querySelector(".natakaba").value;
  let natakapa = document.querySelector(".natakapa").value;
  let natakada = document.querySelector(".natakada").value;
  let natakata = document.querySelector(".natakata").value;
  //
  let ma = "";
  ma += natakama+";";
  ma += natakana+";";
  ma += natakaga+";";
  ma += natakaka+";";
  ma += natakava+";";
  ma += natakafa+";";
  ma += natakaba+";";
  ma += natakapa+";";
  ma += natakada+";";
  ma += natakata;
  //
  let na = {
    kama: "hada",
    kana: ma,
  };
  //
  console.log(na);
  let ga = await sonosono(na,"/");
  if(ga["kama"]=="hadadaha"){
    tohoko(ga["kana"]);
    hoyoto();
  }
  console.log(ga);
}
function torokoporo(){
  let baranama = document.querySelector(".barana");
  let ma = new DocumentFragment();
  //
  let na,ga;
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "ссылка на прайс";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakama");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "имя рус";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakana");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "имя анг";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakaga");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "ссылка на контакты";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakaka");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "город анг";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakava");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "домен";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakafa");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "email";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakaba");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "фио менеджера";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakapa");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "телефон";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakada");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "добавочный";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  ga = document.createElement("input");
  ga.setAttribute("type","text");
  ga.classList.add("natakata");
  na.append(ga);
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.classList.add("batatana");
  ga = document.createElement("button");
  ga.innerHTML = "создать";
  ga.classList.add("gadaraka");
  ga.addEventListener("click",konokonoko);
  na.append(ga);
  ma.append(na);
  ////
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "&nbsp;";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "&nbsp;";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "&nbsp;";
  ma.append(na);
  //
  na = document.createElement("div");
  na.classList.add("paranaya");
  na.innerHTML = "&nbsp;";
  ma.append(na);
  //
  baranama.prepend(ma);
}
function korovoyoho(ma){
  let na = new Array();
  let ga;
  for(let mama of ma){
    ga = (mama-mama%namakana)/namakana;
    if(na.indexOf(ga)===-1){na.push(ga);}
    //if(!na.includes(ga)){na.push(ga);}
  }
  return(na);
}
async function dorogonoho(ma){
  for(let mama of ma){
    let na = {
      kama: "dala",
      kana: mama,
    };
    //
    //console.log(na);
    let ga = await sonosono(na,"/");
    if(ga["kama"]=="dalalada"){
      let ka = new Array();
      ka.push(parseInt(ga["kana"]));
      notofopolo(ka);
      //gofogotoso();
    }
    console.log(ga);
    break;
  }
}
function notofopolo(ma){
  let barana = document.querySelector(".barana");
  let ka = new Array();
  let lafala,ha,namaba,namarava;
  let fasaba = barana.firstElementChild;
  for(let mama of ma){
    //
    lafala = true;
    ha = fasaba;
    namaba = 0;
    while(lafala){
      namarava = (namaba-namaba%namakana)/namakana;
      if(namarava == mama){
        ka.push(ha);
      }
      namaba++;
      if(ha.nextElementSibling !== null){
        ha = ha.nextElementSibling;
      } else {
        ha = null;
      }
      if(ha === null){lafala=false;}
    }
    break;
  }
  //
  for(let kama of ka){
    kama.remove();
  }
}
function votokozoto(){
  let barana = document.querySelector(".barana");
  let ka = new Array();
  let lafala,ha,namaba;
  let fasaba = barana.firstElementChild;
  //
  lafala = true;
  ha = fasaba;
  namaba = 0;
  while(lafala){
    if(ha.classList.contains("zalatana")){
        ka.push(namaba);
    }
    namaba++;
    if(ha.nextElementSibling !== null){
      ha = ha.nextElementSibling;
    } else {
      ha = null;
    }
    if(ha === null){lafala=false;}
  }
  //
  return(ka);
}
function solokorovo(ma){
  //get list of all cells in row of the cell (ma)
  //
  let ka = new Array();
  let ha = ma;
  let lasaba = ha.parentNode.lastElementChild;
  let fasaba = ha.parentNode.firstElementChild;
  let kasaba = ha;
  let lafala;
  let namaba;
  //
  lafala = true;
  ha = fasaba;
  namaba = 0;
  while(lafala){
    if(ha == kasaba){lafala=false;namaba--;}
    namaba++;
    ha = ha.nextElementSibling;
  }
  //
  let namarava = (namaba-namaba%namakana)/namakana;
  //
  lafala = true;
  ha = fasaba;
  namaba = 0;
  while(lafala){
    if(namaba >= namarava*namakana &&
      namaba < (namarava+1)*namakana){
        ka.push(ha);
        //console.log(ha);
    }
    namaba++;
    if(ha.nextElementSibling !== null){
      ha = ha.nextElementSibling;
    } else {
      ha = null;
    }
    if(ha === null){lafala=false;}
  }
  //
  return(ka);
}
function gofogotoso(){
  let ma = document.querySelector(".zalatana");
  for(let mama of ma){
    mama.classList.toggle("zalatana");
  }
}
function molozodoso(){
  //console.log("molozodoso");
  let vatakazata = votokozoto();
  let karavayaha = korovoyoho(vatakazata);
  //console.log(karavayaha);
  dorogonoho(karavayaha);
  //
  //
  //console.log(salakarava);
}
function gorodomono(hava){
  if(hava.code == "KeyI" && (hava.altKey)){
    torokoporo();
  } else if(hava.code == "KeyR" && (hava.altKey)){
    molozodoso();
  }
}
function gotogotomo(ma){
  ma.addEventListener("dblclick",modo);
  ma.addEventListener("mousedown",
    (hava)=>{
      if(hava.button==1 || hava.buttons==4){homo(hava)}
      else if(hava.button==0 || hava.buttons==4){dono(hava)};
    });
  ma.addEventListener("contextmenu",kopo);
}
function mana(hava){
  let baranatala = document.querySelectorAll(".baranata");
  for(let baranataha of baranatala){
    gotogotomo(baranataha);
  }
}

document.addEventListener("DOMContentLoaded",mana);
document.addEventListener("keydown",gorodomono);
//KeyI
//shiftKey
    ';
    return($ma);
  }
  //
  function hodohodo($ma){
    global $savafala;
    $fp = fopen($savafala,"a");
    $ma = iconv("utf-8","windows-1251",$ma);
    $ma .= "\n";
    fwrite($fp,$ma);
    fclose($fp);
  }
  //
  function dolodolo($ma){
    global $savafala;
    //
    $sama = file_get_contents($savafala);
    $sama = iconv("windows-1251","utf-8",$sama);
    $sama = preg_replace('/\r/','',$sama);
    $sana = explode("\n",$sama);
    $mana = (int)$ma;
    unset($sana[$mana]);
    $na = implode("\n",$sana);
    //
    $fp = fopen($savafala,"w");
    $na = iconv("utf-8","windows-1251",$na);
    //$na .= "\r\n";
    fwrite($fp,$na);
    fclose($fp);
  }
  //
  function hotoromo(){
    global $savafala;
    //
    $sama = file_get_contents($savafala);
    $sama = iconv("windows-1251","utf-8",$sama);
    //
    $fp = fopen($savafala,"w");
    $sama = iconv("utf-8","windows-1251",$sama);
    fwrite($fp,$sama);
    fclose($fp);
  }
  //
  function mana(){
    global $savafala;
    //
    if($_SERVER["REQUEST_METHOD"] === "POST") {
      $ma = $_SERVER["CONTENT_TYPE"];
      if(substr($ma,0,16)=="application/json") {
        $na = file_get_contents('php://input');
        $na = json_decode($na,true);
        if(strcmp($na["kama"],"hada")==0) {
          hodohodo($na["kana"]);
          $na["kama"] = "hadadaha";
          $ka = json_encode($na);
          header("Content-Type: application/json");
          echo($ka);
          //echo($na["kana"]);
          exit();
        } else if(strcmp($na["kama"],"dala")==0) {
          dolodolo($na["kana"]);
          $na["kama"] = "dalalada";
          $ka = json_encode($na);
          header("Content-Type: application/json");
          echo($ka);
          exit();
        }
      } else {
        exit();
      }
    } elseif($_SERVER["REQUEST_METHOD"] === "GET") {
      $galamada = golomodo($savafala);
      $galamadara = golomodoro($galamada);
      $nasamakata = nosomokoto($galamadara,
        boromoroko(),horogorono());
      echo($nasamakata);
    }
    //
  }
  //
  mana();
?>
