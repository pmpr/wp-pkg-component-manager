<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6606929669a28             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Common { const qkmqmaeuyokqgemg = self::weayyoewessosyko . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; const ckumcckgkuuygwkg = "\151\156\166\x61\x6c\151\x64"; const mkgimueycqsggewa = "\167\x72\157\156\147\137\166\x61\x6c\165\145"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::geeqaackcgawagqg)->ckaeqgiaiqwsccke(30)->guiaswksukmgageq(__("\x52\145\160\x6f\162\x74", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\122\145\160\x6f\162\x74\163", PR__MDL__COMPONENT_MANAGER))->aseucqksocwomwos()->qemeyueyiwgsokuc(); $this->esoauokkgywesoku([self::ckiaowgkqoewoseo => __("\110\x6f\163\164", PR__MDL__COMPONENT_MANAGER), self::uqgcmmosieyimiku => __("\x41\x63\164\151\x6f\156", PR__MDL__COMPONENT_MANAGER), self::qkmqmaeuyokqgemg => __("\x44\x6f\x6d\141\151\x6e", PR__MDL__COMPONENT_MANAGER), self::eqkeooqcsscoggia => __("\x44\x65\x73\143\x72\x69\x70\164\x69\157\156", PR__MDL__COMPONENT_MANAGER)]); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\x43\157\x6d\160\x6f\156\145\156\164", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::squoamkioomemiyi)->kesomeowemmyygey(1, self::okkqqmwseqscceye, __("\x4c\x69\143\145\156\163\x65\40\x4b\x65\171", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::qqmqgwwqaqyaiqkc, __("\105\170\143\145\x70\164\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\124\171\160\145", PR__MDL__COMPONENT_MANAGER))); parent::ewaqwooqoqmcoomi(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = self::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (is_numeric($wksoawcgagcgoask)) { goto gicyayswqyuoekcq; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->keeuqgyooycqoygw($gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, self::NAME)); gicyayswqyuoekcq: if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { goto csammceowmqwaamq; } $sogksuscggsicmac = $this->gygamsmycwkqqwcc(); goto ocaguquugeamqckq; csammceowmqwaamq: $kuguwoaesuqsqysu = []; if (!$aiamqeawckcsuaou) { goto iikiiioqiyegyaak; } $kuguwoaesuqsqysu[self::uqgcmmosieyimiku] = $aiamqeawckcsuaou; iikiiioqiyegyaak: if (is_numeric($mosgqccgckcwsoom)) { goto gcckqucukawcasgk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($swgwkyqkakceqeia->akkkoiiymmamsauc($mosgqccgckcwsoom, self::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { goto uiosisocuwokwkie; } $kuguwoaesuqsqysu[self::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; goto cuumeogeomowqisc; uiosisocuwokwkie: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; cuumeogeomowqisc: goto qmkaeeomgkwggoyo; gcckqucukawcasgk: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; qmkaeeomgkwggoyo: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); ocaguquugeamqckq: return $sogksuscggsicmac; } }
