<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6251c6d2479b2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); $quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc); $koyiaasmkaiqokac = []; if (!(is_array($quowyokcwswmuois) && $quowyokcwswmuois)) { goto cgyakcqgugqgkqiw; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); cgyakcqgugqgkqiw: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\165\x70\x64\x61\164\x65" => ManipulateArray::get($koyiaasmkaiqokac, "\x74\x69\155\x65"), "\166\x65\x72\x73\151\x6f\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\x76\145\x72\x73\151\x6f\156"), "\144\157\167\x6e\x6c\157\x61\x64\x73" => ManipulateArray::get($qwcmueausqgiwigy, "\x64\x6f\x77\156\154\157\141\144\x73", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\161", "\133{$aiieyweysaukqemc}\x5d", true); $keccaugmemegoimu = $this->get("\150\x74\164\x70\163\72\57\57\x70\141\x63\153\141\x67\151\x73\164\56\x6f\x72\147\57\x73\145\x61\x72\143\x68\56\x6a\163\157\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto ewscugeuicukkycc; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\164\x6f\164\x61\154", 0); if (!($uuwmqqqiwksuaise == 1)) { goto eeyyskqsmquyquqw; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\162\145\163\x75\154\164\163", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); eeyyskqsmquyquqw: ewscugeuicukkycc: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\x68\164\x74\160\163\72\57\57\162\145\x70\157\x2e\160\x61\x63\153\x61\147\151\163\x74\x2e\157\162\147\x2f\160\62\57{$aiieyweysaukqemc}\56\x6a\x73\x6f\156"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto wusciwkkckmqigms; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\x70\x61\x63\x6b\x61\147\x65\163", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto kqswcsysqawkcgye; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; kqswcsysqawkcgye: wusciwkkckmqigms: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\55", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\x70\x6d\160\x72\55{$sqeykgyoooqysmca}\x2f{$wksoawcgagcgoask}"; } }
