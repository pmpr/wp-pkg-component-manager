<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb5f0875a04             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Frontend\Frontend; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Model; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\103\157\x6d\x70\x6f\x6e\145\156\164\40\115\x61\x6e\141\147\x65\x72", PR__MDL__COMPONENT_MANAGER); }]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto goqmywuiicciasyk; } Ajax::symcgieuakksimmu(); goqmywuiicciasyk: REST::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\151\x6e\x69\164", [$this, "\171\x65\x79\151\147\x75\171\145\147\155\x6d\x79\165\163\x65\x61"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\154\x6f\147\151\x6e\137\162\x65\x64\x69\162\145\143\x74", "\165\162\x6c\144\145\143\x6f\x64\145"); $this->aqaqisyssqeomwom("\160\154\165\x67\x69\156\137\x64\x6f\167\156\x6c\x6f\x61\x64\x5f\x62\x75\164\x74\157\x6e", [$this, "\x65\163\145\161\157\157\165\x79\x77\151\145\147\x6d\157\165\141"], 10, 2)->aqaqisyssqeomwom("\x67\145\164\x5f\143\x6f\155\160\x6f\156\145\156\x74\163\x5f\142\171\x5f\150\x6f\163\164", [$this, "\x61\x63\x71\x75\x63\x6b\x71\x65\x75\151\x65\147\143\161\155\x73"], 10, 2)->aqaqisyssqeomwom("\147\x65\x74\137\143\157\155\160\157\156\145\x6e\x74\137\x69\x6e\x73\x74\x61\154\x6c\141\164\x69\157\156\137\147\x75\x69\144\x65", [$this, "\x6b\161\167\157\155\x6b\167\x69\163\141\x6d\x67\147\141\x77\167"], 10, 2)->aqaqisyssqeomwom("\x67\145\164\x5f\143\x6f\x6d\x70\157\x6e\145\156\164\137\x69\156\x73\x74\x61\x6c\154\x61\x74\x69\x6f\x6e\x5f\x67\x75\151\144\145\137\155\x6f\x64\141\154", [$this, "\x61\161\x73\x75\x67\x73\x6d\163\153\143\145\151\153\141\145\x65"], 10, 2); } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::squoamkioomemiyi => self::aqikuweekkucgqoy, self::ckiaowgkqoewoseo => '', self::aisguagukaewucii => self::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[self::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[self::squoamkioomemiyi]))) { goto quaqmuusokiyqgqe; } $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::uissasisiuymwsmu: case self::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); yuqgwwmqwqiuwmaw: } easqmyamcmeesgya: goto siecswkggyikqkga; case self::kgmecoswscqqsymg: case self::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; goto siecswkggyikqkga; } qkuiwoqksgayqqmg: siecswkggyikqkga: quaqmuusokiyqgqe: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto smiemmcqqukyguuu; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\x6d\151\156", $eygsasmqycagyayw->get("\x61\x64\x6d\151\156\x2e\x6a\163"))->okawmmwsiuauwsiu())->ikqyiskqaaymscgw("\141\x6a\141\170", Ajax::mucicoimkyqqioke); smiemmcqqukyguuu: } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x64\x6f\155\x61\151\156\55\x6d\x61\x6e\x61\147\145\x72")) { goto iksewmsaugayqaqq; } Model::symcgieuakksimmu(); iksewmsaugayqaqq: if (!$this->omseesogaocascyo("\160\141\x6e\145\154")) { goto yamyagayiooyeekg; } Panel::symcgieuakksimmu(); yamyagayiooyeekg: if (!$this->omseesogaocascyo("\x73\x65\x63\x75\x72\x69\x74\171")) { goto yoagcooekomeokwg; } Security::symcgieuakksimmu(); yoagcooekomeokwg: } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if (!($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk))) { goto eckcqesiokgwkkiw; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); eckcqesiokgwkkiw: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\141\163\x73" => "\164\145\170\x74\55\144\145\x63\x6f\162\141\x74\151\x6f\x6e\x2d\x6e\x6f\x6e\x65", "\x61\163\x2d\142\x75\x74\x74\157\156" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\x73\x6d", self::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, self::igssuqwuicwawgam => "\x69\156\x66\x6f"]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk))) { goto sgiwoiscywusgmmm; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\154\x61\163\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!$gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\x73\55\x62\165\164\164\157\x6e")) { goto mqiiqkuaoekeuswo; } $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\x62\x74\156\40\x62\x74\156\55{$qoiwmokisgikggia}\x20\142\164\x6e\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto ecouwqosmoyyqmkw; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\163\x73" => "\x69\x63\157\156\55\x77\150\151\164\145\x20\x69\x63\x6f\x6e\55{$oiegiwogmwmawkeo}"], [self::kicoscymgmgqeqgy => true]); ecouwqosmoyyqmkw: mqiiqkuaoekeuswo: $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto qmoocweoekqueuyy; } $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\x50\x4d\x50\x52\40\x50\x6c\165\x67\151\x6e", PR__MDL__COMPONENT_MANAGER)); qmoocweoekqueuyy: $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\x61\163\163" => $iyiskikeoeeysmiw ? "\x70\x6c\x2d\62" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\x6c\x61\x73\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); sgiwoiscywusgmmm: return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\x59\x6f\x75\x20\143\141\x6e\x20\x67\x65\164\40\150\x65\154\160\x20\x66\162\157\155\x20\164\150\145\x20\45\x73\x20\x74\x6f\40\x69\x6e\x73\x74\141\154\154\40\x74\150\x65\x20\x25\163\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), Setting::symcgieuakksimmu()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
