<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce117a11525             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\x6f\x6d\x70\x6f\156\145\156\x74\55\x6d\141\156\141\147\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\160\165\x72\x63\150\141\x73\145\163", [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, Constants::wwgusigoaksqmwsm => [$this, "\x6b\163\x79\x6b\165\141\171\153\171\171\x75\x71\x67\163\x77\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto uykousayyomcaeaa; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto ucqmumuygcywwqma; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); ukqocwewouckikso: } gommacygsykyussk: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [Constants::ciyoccqkiamemcmm => $wqogggcaamgeiwew, Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); ucqmumuygcywwqma: uykousayyomcaeaa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
