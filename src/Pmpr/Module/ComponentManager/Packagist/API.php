<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             632819a2269e0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $koyiaasmkaiqokac = []; $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); if (!($quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc))) { goto egsycocugqyyswsi; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); egsycocugqyyswsi: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\x75\160\x64\141\x74\145" => ManipulateArray::get($koyiaasmkaiqokac, "\164\x69\x6d\x65"), "\x76\x65\162\163\151\157\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\x76\145\x72\163\151\x6f\x6e"), "\144\x6f\x77\156\x6c\x6f\141\144\163" => ManipulateArray::get($qwcmueausqgiwigy, "\144\157\x77\x6e\x6c\x6f\x61\144\163", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\161", "\133{$aiieyweysaukqemc}\135", true); $keccaugmemegoimu = $this->get("\150\164\164\160\x73\72\x2f\57\160\141\143\x6b\x61\147\x69\x73\x74\x2e\x6f\162\147\57\163\x65\141\x72\x63\x68\x2e\152\x73\x6f\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto aoquoewagkseayug; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\x74\157\x74\x61\154", 0); if (!(1 == $uuwmqqqiwksuaise)) { goto qiaimmucomukkeka; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\162\145\x73\x75\x6c\x74\163", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); qiaimmucomukkeka: aoquoewagkseayug: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\150\x74\x74\x70\163\72\57\x2f\x72\x65\x70\157\x2e\160\141\x63\x6b\141\147\151\163\x74\56\157\162\x67\x2f\x70\62\x2f{$aiieyweysaukqemc}\56\x6a\x73\157\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto ciucewqgyoiouesq; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\x70\x61\143\x6b\141\x67\145\x73", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto osuscoaaomwcqkew; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; osuscoaaomwcqkew: ciucewqgyoiouesq: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\x2d", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\160\155\160\162\x2d{$sqeykgyoooqysmca}\57{$wksoawcgagcgoask}"; } }
