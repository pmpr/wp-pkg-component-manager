<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626d4f9434abe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Module\ComponentManager\Setting; class Packagist extends Common { const eiaccaqoswmsoigy = "\143\150\x65\x63\x6b\x5f\x70\141\x63\153\x61\x67\x69\163\x74\x5f\x75\x70\144\141\164\145\137\x63\x72\x6f\x6e\x5f\x68\157\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\x6e\x69\164"])->qcsmikeggeemccuu(self::eiaccaqoswmsoigy, [$this, "\141\x6f\165\147\147\171\x69\x6d\x61\x6d\145\x67\165\x65\x6b\157"]); } public function iemaakgqgqosiecm() { if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto sioekkmekwygemyc; } Ajax::symcgieuakksimmu(); sioekkmekwygemyc: } public function init() { $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x61\152\141\170", Ajax::myikkigscysoykgy); if (DecoratorCron::sceqickmyoseqcue(self::eiaccaqoswmsoigy)) { goto ieqesiiageaauiuw; } $cukawkgykqoskaca = $this->weysguygiseoukqw(Setting::gomeigayyekgimuo); if (!(!$cukawkgykqoskaca || !in_array($cukawkgykqoskaca, array_keys(DecoratorCron::mggeycowqkwsieew()), true))) { goto yiowgigkkwsoqcci; } $cukawkgykqoskaca = self::wmasmcgmyeoaisoa; yiowgigkkwsoqcci: $yiuogaeewyockeak = $this->weysguygiseoukqw(Setting::qkcusmuuciksieoy, "\61\x37\72\64\63\x3a\64\x30"); $yiuogaeewyockeak = strtotime(date("\131\x2d\x6d\x2d\x64", time()) . "\40{$yiuogaeewyockeak}"); DecoratorCron::uwugaiqywmseksqm($cukawkgykqoskaca, self::eiaccaqoswmsoigy, [], $yiuogaeewyockeak); ieqesiiageaauiuw: $uusmaiomayssaecw = "\x63\150\x65\143\153\137\x63\x6f\155\160\157\156\145\156\164\163\137\144\x61\x74\141"; if (DecoratorOption::get($uusmaiomayssaecw)) { goto gamqcwuwkikwqoay; } $this->aouggyimamegueko(true); DecoratorOption::update($uusmaiomayssaecw, 1); gamqcwuwkikwqoay: } }
