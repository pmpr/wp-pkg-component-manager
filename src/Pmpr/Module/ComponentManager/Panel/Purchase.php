<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d29b0139f30             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\157\x6d\x70\x6f\x6e\145\x6e\x74\x2d\155\141\156\x61\147\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\164\x2d\x70\165\x72\143\150\x61\x73\145\x73", ["\141\x72\147\x73" => [], "\x6d\x65\164\150\157\144\163" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\x62\141\x63\153" => [$this, "\153\163\171\153\165\x61\x79\x6b\x79\x79\x75\161\147\163\x77\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mqimkwickkgqqeoi; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto qwemkcoaseywkuuc; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); saauykgakaeiyoua: } owuuuiekkaeoeacq: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); qwemkcoaseywkuuc: mqimkwickkgqqeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
