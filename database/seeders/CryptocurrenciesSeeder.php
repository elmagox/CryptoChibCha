<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CryptocurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cryptocurrencies')->insert(
            [
                [
                    "alias" => "btc",
                    "name" => "Bitcoin",
                    "image" => "https://assets.coingecko.com/coins/images/1/large/bitcoin.png?1547033579",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "eth",
                    "name" => "Ethereum",
                    "image" => "https://assets.coingecko.com/coins/images/279/large/ethereum.png?1595348880",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "bnb",
                    "name" => "Binance Coin",
                    "image" => "https://assets.coingecko.com/coins/images/825/large/binance-coin-logo.png?1547034615",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "usdt",
                    "name" => "Tether",
                    "image" => "https://assets.coingecko.com/coins/images/325/large/Tether-logo.png?1598003707",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "sol",
                    "name" => "Solana",
                    "image" => "https://assets.coingecko.com/coins/images/4128/large/solana.png?1640133422",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ada",
                    "name" => "Cardano",
                    "image" => "https://assets.coingecko.com/coins/images/975/large/cardano.png?1547034860",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "usdc",
                    "name" => "USD Coin",
                    "image" => "https://assets.coingecko.com/coins/images/6319/large/USD_Coin_icon.png?1547042389",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "xrp",
                    "name" => "XRP",
                    "image" => "https://assets.coingecko.com/coins/images/44/small/xrp-symbol-white-128.png?1605778731",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "luna",
                    "name" => "Terra",
                    "image" => "https://assets.coingecko.com/coins/images/8284/large/luna1557227471663.png?1567147072",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "dot",
                    "name" => "Polkadot",
                    "image" => "https://assets.coingecko.com/coins/images/12171/large/polkadot.png?1639712644",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "AVAX",
                    "name" => "Avalanche",
                    "image" => "https://assets.coingecko.com/coins/images/12559/large/coin-round-red.png?1604021818",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "doge",
                    "name" => "Dogecoin",
                    "image" => "https://assets.coingecko.com/coins/images/5/large/dogecoin.png?1547792256",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "shib",
                    "name" => "Shiba Inu",
                    "image" => "https://assets.coingecko.com/coins/images/11939/large/shiba.png?1622619446",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "matic",
                    "name" => "Polygon",
                    "image" => "https://assets.coingecko.com/coins/images/4713/large/matic-token-icon.png?1624446912",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "cro",
                    "name" => "Crypto.com Coin",
                    "image" => "https://assets.coingecko.com/coins/images/7310/large/cypto.png?1547043960",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "busd",
                    "name" => "Binance USD",
                    "image" => "https://assets.coingecko.com/coins/images/9576/large/BUSD.png?1568947766",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "wbtc",
                    "name" => "Wrapped Bitcoin",
                    "image" => "https://assets.coingecko.com/coins/images/7598/large/wrapped_bitcoin_wbtc.png?1548822744",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "algo",
                    "name" => "Algorand",
                    "image" => "https://assets.coingecko.com/coins/images/4380/large/download.png?1547039725",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "atom",
                    "name" => "Cosmos",
                    "image" => "https://assets.coingecko.com/coins/images/1481/large/cosmos_hub.png?1555657960",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "link",
                    "name" => "Chainlink",
                    "image" => "https://assets.coingecko.com/coins/images/877/large/chainlink-new-logo.png?1547034700",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ltc",
                    "name" => "Litecoin",
                    "image" => "https://assets.coingecko.com/coins/images/2/large/litecoin.png?1547033580",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ust",
                    "name" => "TerraUSD",
                    "image" => "https://assets.coingecko.com/coins/images/12681/large/UST.png?1601612407",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "dai",
                    "name" => "Dai",
                    "image" => "https://assets.coingecko.com/coins/images/9956/large/4943.png?1636636734",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "near",
                    "name" => "Near",
                    "image" => "https://assets.coingecko.com/coins/images/10365/large/near_icon.png?1601359077",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "uni",
                    "name" => "Uniswap",
                    "image" => "https://assets.coingecko.com/coins/images/12504/large/uniswap-uni.png?1600306604",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "bch",
                    "name" => "Bitcoin Cash",
                    "image" => "https://assets.coingecko.com/coins/images/780/large/bitcoin-cash-circle.png?1594689492",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "trx",
                    "name" => "TRON",
                    "image" => "https://assets.coingecko.com/coins/images/1094/large/tron-logo.png?1547035066",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "okb",
                    "name" => "OKB",
                    "image" => "https://assets.coingecko.com/coins/images/4463/large/okb_token.png?1548386209",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "xlm",
                    "name" => "Stellar",
                    "image" => "https://assets.coingecko.com/coins/images/100/small/Stellar_symbol_black_RGB.png?1552356157",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ftm",
                    "name" => "Fantom",
                    "image" => "https://assets.coingecko.com/coins/images/4001/large/Fantom.png?1558015016",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "axs",
                    "name" => "Axie Infinity",
                    "image" => "https://assets.coingecko.com/coins/images/13029/large/axie_infinity_logo.png?1604471082",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "steth",
                    "name" => "Lido Staked Ether",
                    "image" => "https://assets.coingecko.com/coins/images/13442/large/steth_logo.png?1608607546",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "vet",
                    "name" => "VeChain",
                    "image" => "https://assets.coingecko.com/coins/images/1167/large/VeChain-Logo-768x725.png?1547035194",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "hbar",
                    "name" => "Hedera",
                    "image" => "https://assets.coingecko.com/coins/images/3688/large/hbar.png?1637045634",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ftt",
                    "name" => "FTX Token",
                    "image" => "https://assets.coingecko.com/coins/images/9026/large/F.png?1609051564",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "icp",
                    "name" => "Internet Computer",
                    "image" => "https://assets.coingecko.com/coins/images/14495/large/Internet_Computer_logo.png?1620703073",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ceth",
                    "name" => "cETH",
                    "image" => "https://assets.coingecko.com/coins/images/10643/large/ceth2.JPG?1581389598",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "sand",
                    "name" => "The Sandbox",
                    "image" => "https://assets.coingecko.com/coins/images/12129/large/sandbox_logo.jpg?1597397942",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "fil",
                    "name" => "Filecoin",
                    "image" => "https://assets.coingecko.com/coins/images/12817/large/filecoin.png?1602753933",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "egld",
                    "name" => "Elrond",
                    "image" => "https://assets.coingecko.com/coins/images/12335/large/elrond3_360.png?1626341589",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "theta",
                    "name" => "Theta Network",
                    "image" => "https://assets.coingecko.com/coins/images/2538/large/theta-token-logo.png?1548387191",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "etc",
                    "name" => "Ethereum Classic",
                    "image" => "https://assets.coingecko.com/coins/images/453/large/ethereum-classic-logo.png?1547034169",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "mim",
                    "name" => "Magic Internet Money",
                    "image" => "https://assets.coingecko.com/coins/images/16786/large/mimlogopng.png?1624979612",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "mana",
                    "name" => "Decentraland",
                    "image" => "https://assets.coingecko.com/coins/images/878/large/decentraland-mana.png?1550108745",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "xtz",
                    "name" => "Tezos",
                    "image" => "https://assets.coingecko.com/coins/images/976/large/Tezos-logo.png?1547034862",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "xmr",
                    "name" => "Monero",
                    "image" => "https://assets.coingecko.com/coins/images/69/large/monero_logo.png?1547033729",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "hnt",
                    "name" => "Helium",
                    "image" => "https://assets.coingecko.com/coins/images/4284/large/Helium_HNT.png?1612620071",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "miota",
                    "name" => "IOTA",
                    "image" => "https://assets.coingecko.com/coins/images/692/large/IOTA_Swirl.png?1604238557",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "aave",
                    "name" => "Aave",
                    "image" => "https://assets.coingecko.com/coins/images/12645/large/AAVE.png?1601374110",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "klay",
                    "name" => "Klaytn",
                    "image" => "https://assets.coingecko.com/coins/images/9672/large/CjbT82vP_400x400.jpg?1570548320",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "grt",
                    "name" => "The Graph",
                    "image" => "https://assets.coingecko.com/coins/images/13397/large/Graph_Token.png?1608145566",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "leo",
                    "name" => "LEO Token",
                    "image" => "https://assets.coingecko.com/coins/images/8418/large/leo-token.png?1558326215",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "cdai",
                    "name" => "cDAI",
                    "image" => "https://assets.coingecko.com/coins/images/9281/large/cDAI.png?1576467585",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "gala",
                    "name" => "Gala",
                    "image" => "https://assets.coingecko.com/coins/images/12493/large/GALA-COINGECKO.png?1600233435",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "one",
                    "name" => "Harmony",
                    "image" => "https://assets.coingecko.com/coins/images/4344/large/Y88JAze.png?1565065793",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "cake",
                    "name" => "PancakeSwap",
                    "image" => "https://assets.coingecko.com/coins/images/12632/large/pancakeswap-cake-logo_%281%29.png?1629359065",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "eos",
                    "name" => "EOS",
                    "image" => "https://assets.coingecko.com/coins/images/738/large/eos-eos-logo.png?1547034481",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ar",
                    "name" => "Arweave",
                    "image" => "https://assets.coingecko.com/coins/images/4343/large/oRt6SiEN_400x400.jpg?1591059616",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "cusdc",
                    "name" => "cUSDC",
                    "image" => "https://assets.coingecko.com/coins/images/9442/large/Compound_USDC.png?1567581577",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "flow",
                    "name" => "Flow",
                    "image" => "https://assets.coingecko.com/coins/images/13446/large/5f6294c0c7a8cda55cb1c936_Flow_Wordmark.png?1631696776",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ksm",
                    "name" => "Kusama",
                    "image" => "https://assets.coingecko.com/coins/images/9568/large/m4zRhP5e_400x400.jpg?1576190080",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "enj",
                    "name" => "Enjin Coin",
                    "image" => "https://assets.coingecko.com/coins/images/1102/large/enjin-coin-logo.png?1547035078",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "btt",
                    "name" => "BitTorrent",
                    "image" => "https://assets.coingecko.com/coins/images/7595/large/BTT_Token_Graphic.png?1555066995",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "lrc",
                    "name" => "Loopring",
                    "image" => "https://assets.coingecko.com/coins/images/913/large/LRC.png?1572852344",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "crv",
                    "name" => "Curve DAO Token",
                    "image" => "https://assets.coingecko.com/coins/images/12124/large/Curve.png?1597369484",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "qnt",
                    "name" => "Quant",
                    "image" => "https://assets.coingecko.com/coins/images/3370/large/5ZOu7brX_400x400.jpg?1612437252",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "xrd",
                    "name" => "Radix",
                    "image" => "https://assets.coingecko.com/coins/images/4374/large/Radix.png?1629701658",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "stx",
                    "name" => "Stacks",
                    "image" => "https://assets.coingecko.com/coins/images/2069/large/Stacks_logo_full.png?1604112510",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ohm",
                    "name" => "Olympus",
                    "image" => "https://assets.coingecko.com/coins/images/14483/large/token_OHM_%281%29.png?1628311611",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "amp",
                    "name" => "Amp",
                    "image" => "https://assets.coingecko.com/coins/images/12409/large/amp-200x200.png?1599625397",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "bsv",
                    "name" => "Bitcoin SV",
                    "image" => "https://assets.coingecko.com/coins/images/6799/large/BSV.png?1558947902",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "mkr",
                    "name" => "Maker",
                    "image" => "https://assets.coingecko.com/coins/images/1364/large/Mark_Maker.png?1585191826",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "xec",
                    "name" => "eCash",
                    "image" => "https://assets.coingecko.com/coins/images/16646/large/Logo_final-22.png?1628239446",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "rune",
                    "name" => "THORChain",
                    "image" => "https://assets.coingecko.com/coins/images/6595/large/RUNE.png?1614160507",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "cvx",
                    "name" => "Convex Finance",
                    "image" => "https://assets.coingecko.com/coins/images/15585/large/convex.png?1621256328",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "spell",
                    "name" => "Spell Token",
                    "image" => "https://assets.coingecko.com/coins/images/15861/large/abracadabra-3.png?1622544862",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "osmo",
                    "name" => "Osmosis",
                    "image" => "https://assets.coingecko.com/coins/images/16724/large/osmo.png?1632763885",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "kda",
                    "name" => "Kadena",
                    "image" => "https://assets.coingecko.com/coins/images/3693/large/djLWD6mR_400x400.jpg?1591080616",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "bat",
                    "name" => "Basic Attention Token",
                    "image" => "https://assets.coingecko.com/coins/images/677/large/basic-attention-token.png?1547034427",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "celo",
                    "name" => "Celo",
                    "image" => "https://assets.coingecko.com/coins/images/11090/large/icon-celo-CELO-color-500.png?1592293590",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "neo",
                    "name" => "NEO",
                    "image" => "https://assets.coingecko.com/coins/images/480/large/NEO_512_512.png?1594357361",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "tfuel",
                    "name" => "Theta Fuel",
                    "image" => "https://assets.coingecko.com/coins/images/8029/large/1_0YusgngOrriVg4ZYx4wOFQ.png?1553483622",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "frax",
                    "name" => "Frax",
                    "image" => "https://assets.coingecko.com/coins/images/13422/large/frax_logo.png?1608476506",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "hbtc",
                    "name" => "Huobi BTC",
                    "image" => "https://assets.coingecko.com/coins/images/12407/large/Unknown-5.png?1599624896",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "zec",
                    "name" => "Zcash",
                    "image" => "https://assets.coingecko.com/coins/images/486/large/circle-zcash-color.png?1547034197",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "sushi",
                    "name" => "Sushi",
                    "image" => "https://assets.coingecko.com/coins/images/12271/large/512x512_Logo_no_chop.png?1606986688",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "kcs",
                    "name" => "KuCoin Token",
                    "image" => "https://assets.coingecko.com/coins/images/1047/large/sa9z79.png?1610678720",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "cel",
                    "name" => "Celsius Network",
                    "image" => "https://assets.coingecko.com/coins/images/3263/large/CEL_logo.png?1609598753",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "chz",
                    "name" => "Chiliz",
                    "image" => "https://assets.coingecko.com/coins/images/8834/large/Chiliz.png?1561970540",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "waves",
                    "name" => "Waves",
                    "image" => "https://assets.coingecko.com/coins/images/425/large/waves.png?1548386117",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "omi",
                    "name" => "ECOMI",
                    "image" => "https://assets.coingecko.com/coins/images/4428/large/ECOMI.png?1557928886",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "dash",
                    "name" => "Dash",
                    "image" => "https://assets.coingecko.com/coins/images/19/large/dash-logo.png?1548385930",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "ht",
                    "name" => "Huobi Token",
                    "image" => "https://assets.coingecko.com/coins/images/2822/large/huobi-token-logo.png?1547036992",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "nexo",
                    "name" => "NEXO",
                    "image" => "https://assets.coingecko.com/coins/images/3695/large/nexo.png?1548086057",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "yfi",
                    "name" => "yearn.finance",
                    "image" => "https://assets.coingecko.com/coins/images/11849/large/yfi-192x192.png?1598325330",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "rose",
                    "name" => "Oasis Network",
                    "image" => "https://assets.coingecko.com/coins/images/13162/large/rose.png?1605772906",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "comp",
                    "name" => "Compound",
                    "image" => "https://assets.coingecko.com/coins/images/10775/large/COMP.png?1592625425",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "snx",
                    "name" => "Synthetix Network Token",
                    "image" => "https://assets.coingecko.com/coins/images/3406/large/SNX.png?1598631139",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "hot",
                    "name" => "Holo",
                    "image" => "https://assets.coingecko.com/coins/images/3348/large/Holologo_Profile.png?1547037966",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ],
                [
                    "alias" => "msol",
                    "name" => "Marinade staked SOL",
                    "image" => "https://assets.coingecko.com/coins/images/17752/large/PJ7Scn3.png?1629175951",
                    "enabled" => true,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]
            ]
        );
    }
}
