<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f3e1e16b76             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); $quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc); $koyiaasmkaiqokac = []; if (!(is_array($quowyokcwswmuois) && $quowyokcwswmuois)) { goto usquiuuyiyqaeyiu; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); usquiuuyiyqaeyiu: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\x75\160\x64\141\164\145" => ManipulateArray::get($koyiaasmkaiqokac, "\164\151\155\145"), "\x76\x65\x72\163\151\157\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\166\x65\x72\x73\151\157\156"), "\x64\157\167\x6e\154\x6f\141\x64\163" => ManipulateArray::get($qwcmueausqgiwigy, "\144\x6f\x77\156\154\x6f\x61\x64\x73", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\x71", "\133{$aiieyweysaukqemc}\135", true); $keccaugmemegoimu = $this->get("\x68\164\164\160\x73\x3a\57\x2f\160\x61\143\153\141\x67\x69\x73\x74\56\157\x72\x67\57\x73\x65\141\162\143\150\x2e\x6a\x73\x6f\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto uguigkcmukuouway; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\164\157\x74\141\154", 0); if (!($uuwmqqqiwksuaise == 1)) { goto qicwaskssogcokgm; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\x72\145\x73\x75\154\164\x73", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); qicwaskssogcokgm: uguigkcmukuouway: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\150\x74\164\x70\x73\72\57\57\162\x65\160\157\56\x70\x61\x63\x6b\141\x67\x69\163\164\x2e\157\162\x67\x2f\x70\62\x2f{$aiieyweysaukqemc}\x2e\x6a\x73\157\156"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto esuiysskoweawsue; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\x70\x61\143\x6b\141\x67\145\163", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto uqqaiagaeqgqgaiy; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; uqqaiagaeqgqgaiy: esuiysskoweawsue: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\55", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\x70\155\160\x72\55{$sqeykgyoooqysmca}\x2f{$wksoawcgagcgoask}"; } }
