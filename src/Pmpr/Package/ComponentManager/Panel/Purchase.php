<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed205b9789             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\Panel\REST\AbstractREST; use Pmpr\Package\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\157\x6d\160\157\x6e\145\x6e\x74\x2d\x6d\141\156\x61\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\x74\55\160\x75\162\143\150\x61\163\x65\163", ["\x61\162\x67\x73" => [], "\155\x65\164\x68\157\144\163" => self::uigoseacoukemwqc, "\143\x61\x6c\154\142\141\x63\x6b" => [$this, "\153\163\171\153\x75\141\x79\153\171\171\x75\x71\x67\163\x77\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eucqomyqykgoiuge; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto qikaewekoecykeou; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); yqagomygmeoecwey: } qsgqwyqaqiowkmco: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); qikaewekoecykeou: eucqomyqykgoiuge: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
