<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680eda653df             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\Panel\REST\AbstractREST; use Pmpr\Package\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\x6f\x6d\160\x6f\x6e\145\156\x74\x2d\155\141\x6e\x61\147\145\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\x74\55\x70\165\x72\143\150\141\x73\145\x73", ["\x61\162\147\x73" => [], "\155\x65\x74\150\157\144\163" => self::READABLE, "\x63\141\154\x6c\x62\141\x63\153" => [$this, "\153\x73\171\153\165\141\x79\153\x79\x79\x75\161\x67\163\x77\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { goto wyyowcsciaqkuiuq; yweucowesgsoewyc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ikygockuuyimmmwk; gsggsmmwcmkgyyss: ekgkiioywougquka: goto yweucowesgsoewyc; imquwacukaswoyka: if (is_wp_error($keccaugmemegoimu)) { goto ekgkiioywougquka; } goto smksoismyouykeoa; qwgkwokcyocqiyee: $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); goto maeccckgcsaaumkw; smksoismyouykeoa: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); goto qwgkwokcyocqiyee; maeccckgcsaaumkw: if (!$wqogggcaamgeiwew) { goto umccwcqwkoiaakmu; } goto gcoeaokkagaaeuse; gcoeaokkagaaeuse: foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); coskmuqsawiaeyqg: } goto kcqueaewmayywqeq; wyyowcsciaqkuiuq: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto imquwacukaswoyka; uagsgicwwcakecwq: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::DOMAIN_ID => [self::VALUE => $wqogggcaamgeiwew, self::CLAUSE => self::CONTAIN]]); goto qocgmocqauaaekii; kcqueaewmayywqeq: seqammocqkyswaim: goto uagsgicwwcakecwq; qocgmocqauaaekii: umccwcqwkoiaakmu: goto gsggsmmwcmkgyyss; ikygockuuyimmmwk: } }
