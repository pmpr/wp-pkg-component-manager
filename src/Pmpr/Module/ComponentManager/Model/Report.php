<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f4432a54e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Common { const qkmqmaeuyokqgemg = self::weayyoewessosyko . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; const ckumcckgkuuygwkg = "\x69\x6e\166\x61\154\151\144"; const mkgimueycqsggewa = "\x77\162\x6f\x6e\147\x5f\166\x61\154\x75\145"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::geeqaackcgawagqg)->ckaeqgiaiqwsccke(30)->guiaswksukmgageq(__("\x52\x65\x70\x6f\x72\164", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\x52\x65\x70\x6f\x72\164\163", PR__MDL__COMPONENT_MANAGER))->aseucqksocwomwos()->qemeyueyiwgsokuc(); $this->esoauokkgywesoku([self::ckiaowgkqoewoseo => __("\x48\157\x73\x74", PR__MDL__COMPONENT_MANAGER), self::uqgcmmosieyimiku => __("\x41\143\164\151\157\x6e", PR__MDL__COMPONENT_MANAGER), self::qkmqmaeuyokqgemg => __("\104\157\x6d\141\x69\156", PR__MDL__COMPONENT_MANAGER), self::eqkeooqcsscoggia => __("\x44\145\163\143\162\151\160\164\x69\157\156", PR__MDL__COMPONENT_MANAGER)]); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\x43\157\x6d\x70\x6f\156\x65\x6e\164", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::squoamkioomemiyi)->kesomeowemmyygey(1, self::okkqqmwseqscceye, __("\114\x69\x63\x65\x6e\163\145\40\113\x65\x79", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::qqmqgwwqaqyaiqkc, __("\105\x78\x63\x65\160\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\124\171\160\145", PR__MDL__COMPONENT_MANAGER))); parent::ewaqwooqoqmcoomi(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = self::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (is_numeric($wksoawcgagcgoask)) { goto mqicocmqegwukkwg; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->keeuqgyooycqoygw($gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, self::NAME)); mqicocmqegwukkwg: if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { goto oomguqikqokqwgku; } $sogksuscggsicmac = $this->gygamsmycwkqqwcc(); goto samwkqgwouggsguc; oomguqikqokqwgku: $kuguwoaesuqsqysu = []; if (!$aiamqeawckcsuaou) { goto qgeugwymkkiacwoc; } $kuguwoaesuqsqysu[self::uqgcmmosieyimiku] = $aiamqeawckcsuaou; qgeugwymkkiacwoc: if (is_numeric($mosgqccgckcwsoom)) { goto mugqyyeayeyggqqk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($swgwkyqkakceqeia->akkkoiiymmamsauc($mosgqccgckcwsoom, self::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { goto emmsycooskoqmgeg; } $kuguwoaesuqsqysu[self::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; goto ouamogymawucwswu; emmsycooskoqmgeg: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; ouamogymawucwswu: goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; acsqgiuageaasiyy: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); samwkqgwouggsguc: return $sogksuscggsicmac; } }
