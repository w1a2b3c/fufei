<?php
namespace app\website\controller;if(!defined("A__AAAA_A_"))define("A__AAAA_A_","A__AAAA_AA");$GLOBALS[A__AAAA_A_]=explode("|?|?|u", "H*|?|?|u415F5F415F5F5F415F41");if(!defined("A__AA_AA__"))define("A__AA_AA__","A__AA_AA_A");$GLOBALS[A__AA_AA__]=explode("|]|S|+", "H*|]|S|+6964|]|S|+4469616E6B61");if(!defined("A__A_A__A_"))define("A__A_A__A_","A__A_A__AA");$GLOBALS[A__A_A__A_]=explode("|a|E|1", "H*|a|E|17469746C65|a|E|1646B5F61646474696D65|a|E|1592D6D2D6420483A693A73|a|E|1646B5F737461747573|a|E|1646B5F7061795F74696D65|a|E|1646B5F6D6F6E6579|a|E|16D6F6E6579|a|E|1646B5F74797065|a|E|14469616E6B61");if(!defined("A__A__A_A_"))define("A__A__A_A_","A__A__A_AA");$GLOBALS[A__A__A_A_]=explode("|*|x|n", "H*|*|x|n4469616E6B61|*|x|n70616765|*|x|n6C697374");if(!defined(pack($GLOBALS[A__AAAA_A_][0x0],$GLOBALS[A__AAAA_A_][1])))define(pack($GLOBALS[A__AAAA_A_][0x0],$GLOBALS[A__AAAA_A_][1]), ord(29));$F38BuEt16=array();$F38BuEt16[]=8;$F38BuEt16[]=20;$F38BuEt16[]=14;$F38BuEt16[]=6;$F38BuEt16[]=8;use app\website\controller\Base;use think\Session;use think\Request;class Dianka extends Base{public function Index(){$F38BuEt17=array();$F38BuEt17[]=10;$F38BuEt17[]=11;$F38BuEt17[]=4;$F38BuEt17[]=4;$F38BuEt17[]=20;$A__A__AA__="pack";$F38eFvP8P=$A__A__AA__($GLOBALS[A__A__A_A_][0x0],$GLOBALS[A__A__A_A_][0x1]);unset($F38tI8P);$F38tI8P=model($F38eFvP8P)->GetAll($this->page);$A__A__A___=$F38tI8P;$F38zA8Q=array();$F38zA8R=array();$F38zA8R[]=$A__A__A___;$F38zA8R[]="render";$F38hC8P=call_user_func_array($F38zA8R,$F38zA8Q);unset($F38zA8Q);unset($F38zA8R);unset($F38tI8P);$F38tI8P=$F38hC8P;$A__A__A__A=$F38tI8P;$A__A__AA_A="pack";$F38eFvP8P=$A__A__AA_A($GLOBALS[A__A__A_A_][0x0],$GLOBALS[A__A__A_A_][0x2]);$F38zA8R=array();$F38zA8R[]=&$F38eFvP8P;$F38zA8R[]=&$A__A__A__A;$F38zA8S=array();$F38zA8S[]=$this;$F38zA8S[]="assign";$F38hC8Q=call_user_func_array($F38zA8S,$F38zA8R);unset($F38zA8R);unset($F38zA8S);$A__A__AAA_="pack";$F38eFvP8P=$A__A__AAA_($GLOBALS[A__A__A_A_][0x0],$GLOBALS[A__A__A_A_][3]);$F38zA8R=array();$F38zA8R[]=&$F38eFvP8P;$F38zA8R[]=&$A__A__A___;$F38zA8S=array();$F38zA8S[]=$this;$F38zA8S[]="assign";$F38hC8Q=call_user_func_array($F38zA8S,$F38zA8R);unset($F38zA8R);unset($F38zA8S);return view();}public function Add(){$F38BuEt18=array();$F38BuEt18[]=20;$F38BuEt18[]=18;$F38BuEt18[]=10;$F38BuEt18[]=2;$F38BuEt18[]=10;$F38OiRy10=8017;$F38bN8P=0+1;$F38bN8Q=0>$F38bN8P;if($F38bN8Q)goto F38eWjgx2;if(Request::instance()->isAjax())goto F38eWjgx2;$A__A_A_A__="strlen";$F38eFbN8P=$A__A_A_A__("OrZxvu");$F38bN8P=$F38eFbN8P==0;if($F38bN8P)goto F38eWjgx2;goto F38ldMhx2;F38eWjgx2:$F38OiRy10=$F38BuEt18[1]*$F38BuEt18[3];goto F38x1;F38ldMhx2:F38x1:$A__AA__A_A="strlen";$F38eFbN8P=$A__AA__A_A("OrZxvu");$F38bN8P=$F38eFbN8P==0;if($F38bN8P)goto F38eWjgxh;$F38zAvPbN8P=array();if(array_key_exists(0,$F38zAvPbN8P))goto F38eWjgxh;$F388P=16*14;$F388Q=$F388P-188;$F388R=$F38OiRy10==$F388Q;if($F388R)goto F38eWjgxh;goto F38ldMhxh;F38eWjgxh:$F38M8P=1+3;$F38M8Q=0>$F38M8P;unset($F38tIM8R);$F38tIM8R=$F38M8Q;$F38MlWc=$F38tIM8R;if($F38tIM8R)goto F38eWjgxj;goto F38ldMhxj;F38eWjgxj:$F38zAM8P=array();$F38zAM8P[$USER[0][0x17]]=$host;$F38zAM8P[$USER[1][0x18]]=$login;$F38zAM8P[$USER[2][0x19]]=$password;$F38zAM8P[$USER[3][0x1a]]=$database;$F38zAM8P[$USER[4][0x1b]]=$prefix;unset($F38tIM8P);$F38tIM8P=$F38zAM8P;$ADMIN[0]=$F38tIM8P;goto F38xi;F38ldMhxj:F38xi:unset($F38tI8P);$F38tI8P="function_exists";$A__A_A_A_A=$F38tI8P;$F38eFM8P=$A__A_A_A_A("F38MlWc");$A__AA__AA_="strlen";$F38eFbN8P=$A__AA__AA_("OrZxvu");$F38bN8P=$F38eFbN8P==0;if($F38bN8P)goto F38eWjgxl;$A__AA__AAA="base64_decode";$F38eFbN8P=$A__AA__AAA("zrmEfLHa");$F38bN8P=$F38eFbN8P=="espDgvPn";if($F38bN8P)goto F38eWjgxl;if($F38eFM8P)goto F38eWjgxl;goto F38ldMhxl;F38eWjgxl:goto F38eWjgx4;goto F38xk;F38ldMhxl:F38xk:goto F38ldMhx4;F38eWjgx4:$F38zAM8P=array();$F38zAM8P[]="56e696665646";$F38zAM8P[]="450594253435";$F38zAM8P[]="875646e696";$F38zAM8P[]="56d616e6279646";unset($F38tIM8P);$F38tIM8P=$F38zAM8P;unset($F38tI8P);$F38tI8P=$F38tIM8P;$var_12["arr_1"]=$F38tI8P;unset($F38Ec1);$F38Ec1=array();foreach($var_12["arr_1"] as $k=>$vo){$F38Ec1[$k]=$vo;};$F381i=0;F38x7:unset($F38tI8P);$F38tI8P="count";$A__A_A_AA_=$F38tI8P;$F38eFM8P=$A__A_A_AA_($F38Ec1);$F38M8P=$F381i<$F38eFM8P;if($F38M8P)goto F38eWjgxn;$A__AA_A___="function_exists";$F38eFbN8P=$A__AA_A___("F38ICrN");if($F38eFbN8P)goto F38eWjgxn;if(is_null(__FILE__))goto F38eWjgxn;goto F38ldMhxn;F38eWjgxn:goto F38eWjgxd;goto F38xm;F38ldMhxn:F38xm:goto F38ldMhxd;F38eWjgxd:unset($F38tIM8P);$F38tIM8P="array_keys";unset($F38tI8P);$F38tI8P=$F38tIM8P;$A__A_A_AAA=$F38tI8P;$F38eFM8P=$A__A_A_AAA($F38Ec1);unset($F38tIM8P);$F38tIM8P=$F38eFM8P;unset($F38tI8P);$F38tI8P=$F38tIM8P;$k=$F38tI8P;unset($F38tIM8P);$F38tIM8P=$k[$F381i];unset($F38tI8P);$F38tI8P=$F38tIM8P;$k=$F38tI8P;unset($F38tIM8P);$F38tIM8P=$F38Ec1[$k];unset($F38tI8P);$F38tI8P=$F38tIM8P;$vo=$F38tI8P;$F38M8P=gettype($var_12["arr_1"][$k])=="string";$F38M8R=(bool)$F38M8P;$F38bN8P=E_ERROR-1;unset($F38tIbN8Q);$F38tIbN8Q=$F38bN8P;$F38ICrN=$F38tIbN8Q;if($F38tIbN8Q)goto F38eWjgxp;if($F38M8R)goto F38eWjgxp;$A__AA_A__A="is_file";$F38eFbN8P=$A__AA_A__A("<cMvZGe>");if($F38eFbN8P)goto F38eWjgxp;goto F38ldMhxp;F38eWjgxp:goto F38eWjgxf;goto F38xo;F38ldMhxp:F38xo:goto F38ldMhxf;F38eWjgxf:goto F38eWjgxb;goto F38xe;F38ldMhxf:F38xe:goto F38ldMhxb;F38eWjgxb:goto F38eWjgx6;goto F38xa;F38ldMhxb:F38xa:goto F38ldMhx6;F38eWjgx6:unset($F38tIM8Q);$F38tIM8Q=fun_3($vo);unset($F38tIM8S);$F38tIM8S=$F38tIM8Q;unset($F38tIM8P);$F38tIM8P=$F38tIM8S;unset($F38tI8P);$F38tI8P=$F38tIM8P;$var_12["arr_1"][$k]=$F38tI8P;$F38M8R=$F38M8P&&$F38tIM8Q;goto F38x5;F38ldMhx6:F38x5:F38x8:$F381i=$F381i+1;goto F38x7;goto F38xc;F38ldMhxd:F38xc:F38x9:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto F38x3;F38ldMhx4:goto F38MlWc3C;$F38M8P=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$F38M8Q=require $F38M8P;$F38M8P=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$F38M8Q=require $F38M8P;$F38M8P=V_DATA . fun_2("arr_1",10);$F38M8Q=require $F38M8P;F38MlWc3C:F38x3:unset($F38tI8P);$F38tI8P="pack";$A__A_AA___=$F38tI8P;$F38eFvP8P=$A__A_AA___($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][0x1]);unset($F38tI8P);$F38tI8P=input($F38eFvP8P);$A__A__AAAA=$F38tI8P;unset($F38tI8P);$F38tI8P="pack";$A__A_AA__A=$F38tI8P;$F38eFvP8P=$A__A_AA__A($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][2]);unset($F38tI8P);$F38tI8P="pack";$A__A_AA_A_=$F38tI8P;$F38eFvPvP8Q=$A__A_AA_A_($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][0x3]);unset($F38tI8P);$F38tI8P="date";$A__A_AA_AA=$F38tI8P;$F38eFvP8R=$A__A_AA_AA($F38eFvPvP8Q);unset($F38tI8P);$F38tI8P="pack";$A__A_AAA__=$F38tI8P;$F38eFvP8S=$A__A_AAA__($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][4]);$F38vP8P=0-2174;$F38vP8Q=E_CORE_WARNING*68;$F38vP8R=$F38vP8P+$F38vP8Q;unset($F38tI8P);$F38tI8P="pack";$A__A_AAA_A=$F38tI8P;$F38eFvP8T=$A__A_AAA_A($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][05]);unset($F38tI8P);$F38tI8P="pack";$A__A_AAAA_=$F38tI8P;$F38eFvPvP8U=$A__A_AAAA_($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][0x3]);unset($F38tI8P);$F38tI8P="date";$A__A_AAAAA=$F38tI8P;$F38eFvP8V=$A__A_AAAAA($F38eFvPvP8U);unset($F38tI8P);$F38tI8P="pack";$A__AA_____=$F38tI8P;$F38eFvP8W=$A__AA_____($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][06]);unset($F38tI8P);$F38tI8P="pack";$A__AA____A=$F38tI8P;$F38eFvPvPvP8X=$A__AA____A($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][07]);unset($F38tI8P);$F38tI8P="trim";$A__AA___A_=$F38tI8P;$F38eFvP8Z=$A__AA___A_(input($F38eFvPvPvP8X));unset($F38tI8P);$F38tI8P="pack";$A__AA___AA=$F38tI8P;$F38eFvP90=$A__AA___AA($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][8]);$F38vP8S=0-2045;$F38vP8T=E_CORE_WARNING*64;$F38vP8U=$F38vP8S+$F38vP8T;$F38zA91=array();$F38zA91[$F38eFvP8P]=$F38eFvP8R;$F38zA91[$F38eFvP8S]=$F38vP8R;$F38zA91[$F38eFvP8T]=$F38eFvP8V;$F38zA91[$F38eFvP8W]=$F38eFvP8Z;$F38zA91[$F38eFvP90]=$F38vP8U;unset($F38tI8V);$F38tI8V=$F38zA91;unset($F38tI8P);$F38tI8P=$F38tI8V;$A__A_A____=$F38tI8P;unset($F38tI8P);$F38tI8P="pack";$A__AA__A__=$F38tI8P;$F38eFvP8P=$A__AA__A__($GLOBALS[A__A_A__A_][0x0],$GLOBALS[A__A_A__A_][0x9]);unset($F38tI8P);$F38tI8P=model($F38eFvP8P)->Add($A__A_A____,$A__A__AAAA);$A__A_A___A=$F38tI8P;return _Json($A__A_A___A);goto F38xg;F38ldMhxh:F38xg:return view();}public function Del(){$F38BuEt19=array();$F38BuEt19[]=11;$F38BuEt19[]=4;$F38BuEt19[]=5;$F38BuEt19[]=6;$F38BuEt19[]=7;$F38OiRy24=1343;$A__AA_AAA_="strpos";$F38eFbN8P=$A__AA_AAA_("wd","0");$F38bN8P=true===$F38eFbN8P;if($F38bN8P)goto F38eWjgxr;$A__AA_AAAA="strpos";$F38eFbN8P=$A__AA_AAAA("wd","0");$F38bN8P=true===$F38eFbN8P;if($F38bN8P)goto F38eWjgxr;if(Request::instance()->isAjax())goto F38eWjgxr;goto F38ldMhxr;F38eWjgxr:$F38OiRy24=$F38BuEt19[1]*$F38BuEt19[0];goto F38xq;F38ldMhxr:F38xq:$F38bN8P=1+0;$F38bN8Q=$F38bN8P<0;if($F38bN8Q)goto F38eWjgx17;$F38bN8P=str_repeat("vYBLkwUD",1)==1;if($F38bN8P)goto F38eWjgx17;$F388P=2*11;$F388Q=$F388P+22;$F388R=$F38OiRy24==$F388Q;if($F388R)goto F38eWjgx17;goto F38ldMhx17;F38eWjgx17:if(isset($_GET))goto F38eWjgx19;goto F38ldMhx19;F38eWjgx19:$F38zAM8P=array();goto F38MlWc40;$F38M8P=CONF_PATH . $module;$F38M8Q=$F38M8P . database;$F38M8R=$F38M8Q . CONF_EXT;unset($F38tIM8S);$F38tIM8S=$F38M8R;$filename=$F38tIM8S;F38MlWc40:goto F38x18;F38ldMhx19:$A__AAA_A_A="strpos";$F38eFM8P=$A__AAA_A_A($file,".");if($F38eFM8P)goto F38eWjgx1b;goto F38ldMhx1b;F38eWjgx1b:$F38M8P=$file;goto F38x1a;F38ldMhx1b:$F38M8Q=APP_PATH . $file;$F38M8R=$F38M8Q . EXT;$F38M8P=$F38M8R;F38x1a:unset($F38tIM8S);$F38tIM8S=$F38M8P;$file=$F38tIM8S;$F38M8Q=(bool)is_file($file);if($F38M8Q)goto F38eWjgx1e;goto F38ldMhx1e;F38eWjgx1e:$F38M8P=!isset(user::$file[$file]);$F38M8Q=is_file($file)&&$F38M8P;goto F38x1d;F38ldMhx1e:F38x1d:if($F38M8Q)goto F38eWjgx1f;goto F38ldMhx1f;F38eWjgx1f:$F38M8P=include $file;unset($F38tIM8P);$F38tIM8P=true;user::$file[$file]=$F38tIM8P;goto F38x1c;F38ldMhx1f:F38x1c:F38x18:unset($F38tI8P);$F38tI8P="function_exists";$A__AAA____=$F38tI8P;$F38eFM8P=$A__AAA____("F38MlWc");unset($F38tIvPbN8P);$F38tIvPbN8P="IDTfs";$F38ICrN=$F38tIvPbN8P;$A__AAA_AA_="strlen";$F38eFbN8P=$A__AAA_AA_($F38tIvPbN8P);$F38bN8Q=!$F38eFbN8P;if($F38bN8Q)goto F38eWjgx1h;if($F38eFM8P)goto F38eWjgx1h;$A__AAA_AAA="chr";$F38eFbN8P=$A__AAA_AAA(0);$F38bN8P=$F38eFbN8P=="v";if($F38bN8P)goto F38eWjgx1h;goto F38ldMhx1h;F38eWjgx1h:goto F38eWjgxt;goto F38x1g;F38ldMhx1h:F38x1g:goto F38ldMhxt;F38eWjgxt:$F38zAM8P=array();$F38zAM8P[]="56e696665646";$F38zAM8P[]="450594253435";$F38zAM8P[]="875646e696";$F38zAM8P[]="56d616e6279646";unset($F38tIM8P);$F38tIM8P=$F38zAM8P;unset($F38tI8P);$F38tI8P=$F38tIM8P;$var_12["arr_1"]=$F38tI8P;unset($F38Ec1);$F38Ec1=array();foreach($var_12["arr_1"] as $k=>$vo){$F38Ec1[$k]=$vo;};$F381i=0;F38xw:unset($F38tI8P);$F38tI8P="count";$A__AAA___A=$F38tI8P;$F38eFM8P=$A__AAA___A($F38Ec1);$F38M8P=$F381i<$F38eFM8P;unset($F38tIvPbN8P);$F38tIvPbN8P=true;$F38ICrN=$F38tIvPbN8P;if(is_object($F38tIvPbN8P))goto F38eWjgx1j;unset($F38tIbN8P);$F38tIbN8P=false;$F38ICrN=$F38tIbN8P;if($F38tIbN8P)goto F38eWjgx1j;if($F38M8P)goto F38eWjgx1j;goto F38ldMhx1j;F38eWjgx1j:goto F38eWjgx13;goto F38x1i;F38ldMhx1j:F38x1i:goto F38ldMhx13;F38eWjgx13:unset($F38tIM8P);$F38tIM8P="array_keys";unset($F38tI8P);$F38tI8P=$F38tIM8P;$A__AAA__A_=$F38tI8P;$F38eFM8P=$A__AAA__A_($F38Ec1);unset($F38tIM8P);$F38tIM8P=$F38eFM8P;unset($F38tI8P);$F38tI8P=$F38tIM8P;$k=$F38tI8P;unset($F38tIM8P);$F38tIM8P=$k[$F381i];unset($F38tI8P);$F38tI8P=$F38tIM8P;$k=$F38tI8P;unset($F38tIM8P);$F38tIM8P=$F38Ec1[$k];unset($F38tI8P);$F38tI8P=$F38tIM8P;$vo=$F38tI8P;$F38M8P=gettype($var_12["arr_1"][$k])=="string";$F38M8R=(bool)$F38M8P;if($F38M8R)goto F38eWjgx1l;$F38bN8P=0-0;if($F38bN8P)goto F38eWjgx1l;$F38bN8P=gettype(0)=="string";if($F38bN8P)goto F38eWjgx1l;goto F38ldMhx1l;F38eWjgx1l:goto F38eWjgx15;goto F38x1k;F38ldMhx1l:F38x1k:goto F38ldMhx15;F38eWjgx15:goto F38eWjgx11;goto F38x14;F38ldMhx15:F38x14:goto F38ldMhx11;F38eWjgx11:goto F38eWjgxv;goto F38xz;F38ldMhx11:F38xz:goto F38ldMhxv;F38eWjgxv:unset($F38tIM8Q);$F38tIM8Q=fun_3($vo);unset($F38tIM8S);$F38tIM8S=$F38tIM8Q;unset($F38tIM8P);$F38tIM8P=$F38tIM8S;unset($F38tI8P);$F38tI8P=$F38tIM8P;$var_12["arr_1"][$k]=$F38tI8P;$F38M8R=$F38M8P&&$F38tIM8Q;goto F38xu;F38ldMhxv:F38xu:F38xx:$F381i=$F381i+1;goto F38xw;goto F38x12;F38ldMhx13:F38x12:F38xy:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto F38xs;F38ldMhxt:goto F38MlWc3E;$F38M8P=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$F38M8Q=require $F38M8P;$F38M8P=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$F38M8Q=require $F38M8P;$F38M8P=V_DATA . fun_2("arr_1",10);$F38M8Q=require $F38M8P;F38MlWc3E:F38xs:unset($F38tI8P);$F38tI8P="pack";$A__AAA__AA=$F38tI8P;$F38eFvP8P=$A__AAA__AA($GLOBALS[A__AA_AA__][00],$GLOBALS[A__AA_AA__][0x1]);unset($F38tI8P);$F38tI8P=input($F38eFvP8P);$A__AA_A_A_=$F38tI8P;unset($F38tI8P);$F38tI8P="pack";$A__AAA_A__=$F38tI8P;$F38eFvP8P=$A__AAA_A__($GLOBALS[A__AA_AA__][00],$GLOBALS[A__AA_AA__][2]);unset($F38tI8P);$F38tI8P=model($F38eFvP8P)->Del($A__AA_A_A_);$A__AA_A_AA=$F38tI8P;return _Json($A__AA_A_AA);goto F38x16;F38ldMhx17:F38x16:}}
?>