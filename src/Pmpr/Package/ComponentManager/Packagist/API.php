<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bba1d2cb02             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); $quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc); $koyiaasmkaiqokac = []; if (!(is_array($quowyokcwswmuois) && $quowyokcwswmuois)) { goto syiqkaasoueowwui; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); syiqkaasoueowwui: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\165\x70\144\141\164\145" => ManipulateArray::get($koyiaasmkaiqokac, "\x74\151\155\145"), "\x76\x65\162\x73\x69\157\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\166\145\x72\x73\x69\157\156"), "\x64\x6f\x77\156\154\x6f\141\144\163" => ManipulateArray::get($qwcmueausqgiwigy, "\x64\157\167\x6e\154\x6f\x61\144\x73", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\161", "\x5b{$aiieyweysaukqemc}\x5d", true); $keccaugmemegoimu = $this->get("\x68\164\164\x70\163\x3a\x2f\57\x70\141\143\153\141\147\151\x73\164\56\157\162\x67\x2f\163\145\141\162\x63\150\56\152\x73\157\156"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto ewymsmkkiksgwysk; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\164\x6f\x74\141\x6c", 0); if (!($uuwmqqqiwksuaise == 1)) { goto giaacoqqqsekcayy; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\x72\145\x73\x75\154\x74\x73", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); giaacoqqqsekcayy: ewymsmkkiksgwysk: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\150\164\x74\x70\x73\72\x2f\57\x72\145\x70\157\56\x70\x61\x63\x6b\141\x67\151\x73\164\56\157\162\x67\57\160\62\x2f{$aiieyweysaukqemc}\x2e\152\163\x6f\156"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto wmywuusgukmmaams; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\160\141\143\x6b\141\147\145\x73", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto cmegwsegsosyqcai; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; cmegwsegsosyqcai: wmywuusgukmmaams: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\x2d", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\160\x6d\160\x72\x2d{$sqeykgyoooqysmca}\x2f{$wksoawcgagcgoask}"; } }
