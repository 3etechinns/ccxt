<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception as Exception; // a common import

class coinone extends Exchange {

    public function describe () {
        return array_replace_recursive (parent::describe (), array (
            'id' => 'coinone',
            'name' => 'CoinOne',
            'countries' => array ( 'KR' ), // Korea
            'rateLimit' => 667,
            'version' => 'v2',
            'has' => array (
                'CORS' => false,
                'createMarketOrder' => false,
                'fetchTickers' => true,
                'fetchOrder' => true,
            ),
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/38003300-adc12fba-323f-11e8-8525-725f53c4a659.jpg',
                'api' => 'https://api.coinone.co.kr',
                'www' => 'https://coinone.co.kr',
                'doc' => 'https://doc.coinone.co.kr',
            ),
            'requiredCredentials' => array (
                'apiKey' => true,
                'secret' => true,
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'orderbook/',
                        'trades/',
                        'ticker/',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'account/btc_deposit_address/',
                        'account/balance/',
                        'account/daily_balance/',
                        'account/user_info/',
                        'account/virtual_account/',
                        'order/cancel_all/',
                        'order/cancel/',
                        'order/limit_buy/',
                        'order/limit_sell/',
                        'order/complete_orders/',
                        'order/limit_orders/',
                        'order/order_info/',
                        'transaction/auth_number/',
                        'transaction/history/',
                        'transaction/krw/history/',
                        'transaction/btc/',
                        'transaction/coin/',
                    ),
                ),
            ),
            'markets' => array (
                'BCH/KRW' => array ( 'id' => 'bch', 'symbol' => 'BCH/KRW', 'base' => 'BCH', 'quote' => 'KRW', 'baseId' => 'bch', 'quoteId' => 'krw' ),
                'BTC/KRW' => array ( 'id' => 'btc', 'symbol' => 'BTC/KRW', 'base' => 'BTC', 'quote' => 'KRW', 'baseId' => 'btc', 'quoteId' => 'krw' ),
                'BTG/KRW' => array ( 'id' => 'btg', 'symbol' => 'BTG/KRW', 'base' => 'BTG', 'quote' => 'KRW', 'baseId' => 'btg', 'quoteId' => 'krw' ),
                'ETC/KRW' => array ( 'id' => 'etc', 'symbol' => 'ETC/KRW', 'base' => 'ETC', 'quote' => 'KRW', 'baseId' => 'etc', 'quoteId' => 'krw' ),
                'ETH/KRW' => array ( 'id' => 'eth', 'symbol' => 'ETH/KRW', 'base' => 'ETH', 'quote' => 'KRW', 'baseId' => 'eth', 'quoteId' => 'krw' ),
                'IOTA/KRW' => array ( 'id' => 'iota', 'symbol' => 'IOTA/KRW', 'base' => 'IOTA', 'quote' => 'KRW', 'baseId' => 'iota', 'quoteId' => 'krw' ),
                'LTC/KRW' => array ( 'id' => 'ltc', 'symbol' => 'LTC/KRW', 'base' => 'LTC', 'quote' => 'KRW', 'baseId' => 'ltc', 'quoteId' => 'krw' ),
                'OMG/KRW' => array ( 'id' => 'omg', 'symbol' => 'OMG/KRW', 'base' => 'OMG', 'quote' => 'KRW', 'baseId' => 'omg', 'quoteId' => 'krw' ),
                'QTUM/KRW' => array ( 'id' => 'qtum', 'symbol' => 'QTUM/KRW', 'base' => 'QTUM', 'quote' => 'KRW', 'baseId' => 'qtum', 'quoteId' => 'krw' ),
                'XRP/KRW' => array ( 'id' => 'xrp', 'symbol' => 'XRP/KRW', 'base' => 'XRP', 'quote' => 'KRW', 'baseId' => 'xrp', 'quoteId' => 'krw' ),
                'EOS/KRW' => array ( 'id' => 'eos', 'symbol' => 'EOS/KRW', 'base' => 'EOS', 'quote' => 'KRW', 'baseId' => 'eos', 'quoteId' => 'krw' ),
                'DATA/KRW' => array ( 'id' => 'data', 'symbol' => 'DATA/KRW', 'base' => 'DATA', 'quote' => 'KRW', 'baseId' => 'data', 'quoteId' => 'krw' ),
                'ZIL/KRW' => array ( 'id' => 'zil', 'symbol' => 'ZIL/KRW', 'base' => 'ZIL', 'quote' => 'KRW', 'baseId' => 'zil', 'quoteId' => 'krw' ),
                'KNC/KRW' => array ( 'id' => 'knc', 'symbol' => 'KNC/KRW', 'base' => 'KNC', 'quote' => 'KRW', 'baseId' => 'knc', 'quoteId' => 'krw' ),
                'ZRX/KRW' => array ( 'id' => 'zrx', 'symbol' => 'ZRX/KRW', 'base' => 'ZRX', 'quote' => 'KRW', 'baseId' => 'zrx', 'quoteId' => 'krw' ),
            ),
            'fees' => array (
                'trading' => array (
                    'tierBased' => true,
                    'percentage' => true,
                    'taker' => 0.001,
                    'maker' => 0.001,
                    'tiers' => array (
                        'taker' => [
                            [0, 0.001],
                            [100000000, 0.0009],
                            [1000000000, 0.0008],
                            [5000000000, 0.0007],
                            [10000000000, 0.0006],
                            [20000000000, 0.0005],
                            [30000000000, 0.0004],
                            [40000000000, 0.0003],
                            [50000000000, 0.0002],
                        ],
                        'maker' => [
                            [0, 0.001],
                            [100000000, 0.0008],
                            [1000000000, 0.0006],
                            [5000000000, 0.0004],
                            [10000000000, 0.0002],
                            [20000000000, 0],
                            [30000000000, 0],
                            [40000000000, 0],
                            [50000000000, 0],
                        ],
                    ),
                ),
            ),
            'exceptions' => array (
                '405' => '\\ccxt\\ExchangeNotAvailable',
                '104' => '\\ccxt\\OrderNotFound',
            ),
        ));
    }

    public function fetch_balance ($params = array ()) {
        $response = $this->privatePostAccountBalance ();
        $result = array ( 'info' => $response );
        $balances = $this->omit ($response, array (
            'errorCode',
            'result',
            'normalWallets',
        ));
        $ids = is_array ($balances) ? array_keys ($balances) : array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = $ids[$i];
            $balance = $balances[$id];
            $code = strtoupper ($id);
            if (is_array ($this->currencies_by_id) && array_key_exists ($id, $this->currencies_by_id))
                $code = $this->currencies_by_id[$id]['code'];
            $free = floatval ($balance['avail']);
            $total = floatval ($balance['balance']);
            $used = $total - $free;
            $account = array (
                'free' => $free,
                'used' => $used,
                'total' => $total,
            );
            $result[$code] = $account;
        }
        return $this->parse_balance($result);
    }

    public function fetch_order_book ($symbol, $limit = null, $params = array ()) {
        $market = $this->market ($symbol);
        $response = $this->publicGetOrderbook (array_merge (array (
            'currency' => $market['id'],
            'format' => 'json',
        ), $params));
        return $this->parse_order_book($response, null, 'bid', 'ask', 'price', 'qty');
    }

    public function fetch_tickers ($symbols = null, $params = array ()) {
        $this->load_markets();
        $response = $this->publicGetTicker (array_merge (array (
            'currency' => 'all',
            'format' => 'json',
        ), $params));
        $result = array ();
        $tickers = $response;
        $ids = is_array ($tickers) ? array_keys ($tickers) : array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = $ids[$i];
            $symbol = $id;
            $market = null;
            if (is_array ($this->markets_by_id) && array_key_exists ($id, $this->markets_by_id)) {
                $market = $this->markets_by_id[$id];
                $symbol = $market['symbol'];
                $ticker = $tickers[$id];
                $result[$symbol] = $this->parse_ticker($ticker, $market);
            }
        }
        return $result;
    }

    public function fetch_ticker ($symbol, $params = array ()) {
        $market = $this->market ($symbol);
        $response = $this->publicGetTicker (array_merge (array (
            'currency' => $market['id'],
            'format' => 'json',
        ), $params));
        return $this->parse_ticker($response, $market);
    }

    public function parse_ticker ($ticker, $market = null) {
        $timestamp = $this->milliseconds ();
        $last = $this->safe_float($ticker, 'last');
        $previousClose = $this->safe_float($ticker, 'yesterday_last');
        $change = null;
        if ($last !== null && $previousClose !== null)
            $change = $previousClose - $last;
        $symbol = ($market !== null) ? $market['symbol'] : null;
        return array (
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => $this->safe_float($ticker, 'high'),
            'low' => $this->safe_float($ticker, 'low'),
            'bid' => null,
            'bidVolume' => null,
            'ask' => null,
            'askVolume' => null,
            'vwap' => null,
            'open' => $this->safe_float($ticker, 'first'),
            'close' => $last,
            'last' => $last,
            'previousClose' => $previousClose,
            'change' => $change,
            'percentage' => null,
            'average' => null,
            'baseVolume' => $this->safe_float($ticker, 'volume'),
            'quoteVolume' => null,
            'info' => $ticker,
        );
    }

    public function parse_trade ($trade, $market = null) {
        $timestamp = intval ($trade['timestamp']) * 1000;
        $symbol = ($market !== null) ? $market['symbol'] : null;
        $is_ask = $this->safe_string($trade, 'is_ask');
        $side = null;
        if ($is_ask === '1') {
            $side = 'sell';
        } else if ($is_ask === '0') {
            $side = 'buy';
        }
        return array (
            'id' => null,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'order' => null,
            'symbol' => $symbol,
            'type' => null,
            'side' => $side,
            'price' => $this->safe_float($trade, 'price'),
            'amount' => $this->safe_float($trade, 'qty'),
            'fee' => null,
            'info' => $trade,
        );
    }

    public function fetch_trades ($symbol, $since = null, $limit = null, $params = array ()) {
        $market = $this->market ($symbol);
        $response = $this->publicGetTrades (array_merge (array (
            'currency' => $market['id'],
            'period' => 'hour',
            'format' => 'json',
        ), $params));
        return $this->parse_trades($response['completeOrders'], $market, $since, $limit);
    }

    public function create_order ($symbol, $type, $side, $amount, $price = null, $params = array ()) {
        if ($type !== 'limit')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $this->load_markets();
        $request = array (
            'price' => $price,
            'currency' => $this->market_id($symbol),
            'qty' => $amount,
        );
        $method = 'privatePostOrder' . $this->capitalize ($type) . $this->capitalize ($side);
        $response = $this->$method (array_merge ($request, $params));
        $id = $this->safe_string($response, 'orderId');
        if ($id !== null) {
            $id = strtoupper ($id);
        }
        $timestamp = $this->milliseconds ();
        $cost = $price * $amount;
        $order = array (
            'info' => $response,
            'id' => $id,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'lastTradeTimestamp' => null,
            'symbol' => $symbol,
            'type' => $type,
            'side' => $side,
            'price' => $price,
            'cost' => $cost,
            'average' => null,
            'amount' => $amount,
            'filled' => null,
            'remaining' => $amount,
            'status' => 'open',
            'fee' => null,
        );
        $this->orders[$id] = $order;
        return $order;
    }

    public function fetch_order ($id, $symbol = null, $params = array ()) {
        $this->load_markets();
        $result = null;
        $market = null;
        if ($symbol === null) {
            if (is_array ($this->orders) && array_key_exists ($id, $this->orders)) {
                $market = $this->market ($this->orders[$id]['symbol']);
            } else {
                throw new ArgumentsRequired ($this->id . ' fetchOrder() requires a $symbol argument for order ids missing in the .orders cache (the order was created with a different instance of this class or within a different run of this code).');
            }
        } else {
            $market = $this->market ($symbol);
        }
        try {
            $response = $this->privatePostOrderOrderInfo (array_merge (array (
                'order_id' => $id,
                'currency' => $market['id'],
            ), $params));
            $result = $this->parse_order($response);
            $this->orders[$id] = $result;
        } catch (Exception $e) {
            if ($e instanceof OrderNotFound) {
                if (is_array ($this->orders) && array_key_exists ($id, $this->orders)) {
                    $this->orders[$id]['status'] = 'canceled';
                    $result = $this->orders[$id];
                } else {
                    throw $e;
                }
            } else {
                throw $e;
            }
        }
        return $result;
    }

    public function parse_order_status ($status) {
        $statuses = array (
            'live' => 'open',
            'partially_filled' => 'open',
            'filled' => 'closed',
        );
        if (is_array ($statuses) && array_key_exists ($status, $statuses))
            return $statuses[$status];
        return $status;
    }

    public function parse_order ($order, $market = null) {
        $info = $this->safe_value($order, 'info');
        $id = $this->safe_string($info, 'orderId');
        if ($id !== null) {
            $id = strtoupper ($id);
        }
        $timestamp = intval ($info['timestamp']) * 1000;
        $status = $this->parse_order_status($this->safe_string($order, 'status'));
        $cost = null;
        $side = $this->safe_string($info, 'type');
        if (mb_strpos ($side, 'ask') !== false) {
            $side = 'sell';
        } else {
            $side = 'buy';
        }
        $price = $this->safe_float($info, 'price');
        $amount = $this->safe_float($info, 'qty');
        $remaining = $this->safe_float($info, 'remainQty');
        $filled = null;
        if ($amount !== null) {
            if ($remaining !== null) {
                $filled = $amount - $remaining;
            }
            if ($price !== null) {
                $cost = $price * $amount;
            }
        }
        $currency = $this->safe_string($info, 'currency');
        $fee = array (
            'currency' => $currency,
            'cost' => $this->safe_float($info, 'fee'),
            'rate' => $this->safe_float($info, 'feeRate'),
        );
        $symbol = null;
        if ($market === null) {
            $marketId = strtolower ($currency);
            if (is_array ($this->markets_by_id) && array_key_exists ($marketId, $this->markets_by_id))
                $market = $this->markets_by_id[$marketId];
        }
        if ($market !== null)
            $symbol = $market['symbol'];
        $result = array (
            'info' => $order,
            'id' => $id,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'lastTradeTimestamp' => null,
            'symbol' => $symbol,
            'type' => 'limit',
            'side' => $side,
            'price' => $price,
            'cost' => $cost,
            'amount' => $amount,
            'filled' => $filled,
            'remaining' => $remaining,
            'status' => $status,
            'fee' => $fee,
        );
        return $result;
    }

    public function cancel_order ($id, $symbol = null, $params = array ()) {
        $order = $this->safe_value($this->orders, $id);
        $amount = null;
        $price = null;
        $side = null;
        if ($order === null) {
            if ($symbol === null) {
                // eslint-disable-next-line quotes
                throw new InvalidOrder ($this->id . " cancelOrder could not find the $order $id " . $id . " in orders cache. The $order was probably created with a different instance of this class earlier. The `$symbol` argument is missing. To cancel the $order, pass a $symbol argument and array ('price' => 12345, 'qty' => 1.2345, 'is_ask' => 0) in the $params argument of cancelOrder.");
            }
            $price = $this->safe_float($params, 'price');
            if ($price === null) {
                // eslint-disable-next-line quotes
                throw new InvalidOrder ($this->id . " cancelOrder could not find the $order $id " . $id . " in orders cache. The $order was probably created with a different instance of this class earlier. The `$price` parameter is missing. To cancel the $order, pass a $symbol argument and array ('price' => 12345, 'qty' => 1.2345, 'is_ask' => 0) in the $params argument of cancelOrder.");
            }
            $amount = $this->safe_float($params, 'qty');
            if ($amount === null) {
                // eslint-disable-next-line quotes
                throw new InvalidOrder ($this->id . " cancelOrder could not find the $order $id " . $id . " in orders cache. The $order was probably created with a different instance of this class earlier. The `qty` ($amount) parameter is missing. To cancel the $order, pass a $symbol argument and array ('price' => 12345, 'qty' => 1.2345, 'is_ask' => 0) in the $params argument of cancelOrder.");
            }
            $side = $this->safe_float($params, 'is_ask');
            if ($side === null) {
                // eslint-disable-next-line quotes
                throw new InvalidOrder ($this->id . " cancelOrder could not find the $order $id " . $id . " in orders cache. The $order was probably created with a different instance of this class earlier. The `is_ask` ($side) parameter is missing. To cancel the $order, pass a $symbol argument and array ('price' => 12345, 'qty' => 1.2345, 'is_ask' => 0) in the $params argument of cancelOrder.");
            }
        } else {
            $price = $order['price'];
            $amount = $order['amount'];
            $side = ($order['side'] === 'buy') ? 0 : 1;
            $symbol = $order['symbol'];
        }
        $request = array (
            'order_id' => $id,
            'price' => $price,
            'qty' => $amount,
            'is_ask' => $side,
            'currency' => $this->market_id($symbol),
        );
        $this->orders[$id]['status'] = 'canceled';
        return $this->privatePostOrderCancel (array_merge ($request, $params));
    }

    public function sign ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $request = $this->implode_params($path, $params);
        $query = $this->omit ($params, $this->extract_params($path));
        $url = $this->urls['api'] . '/';
        if ($api === 'public') {
            $url .= $request;
            if ($query) {
                $url .= '?' . $this->urlencode ($query);
            }
        } else {
            $this->check_required_credentials();
            $url .= $this->version . '/' . $request;
            $nonce = (string) $this->nonce ();
            $json = $this->json (array_merge (array (
                'access_token' => $this->apiKey,
                'nonce' => $nonce,
            ), $params));
            $payload = base64_encode ($this->encode ($json));
            $body = $this->decode ($payload);
            $secret = strtoupper ($this->secret);
            $signature = $this->hmac ($payload, $this->encode ($secret), 'sha512');
            $headers = array (
                'content-type' => 'application/json',
                'X-COINONE-PAYLOAD' => $payload,
                'X-COINONE-SIGNATURE' => $signature,
            );
        }
        return array ( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function handle_errors ($code, $reason, $url, $method, $headers, $body, $response) {
        if (($body[0] === '{') || ($body[0] === '[')) {
            if (is_array ($response) && array_key_exists ('result', $response)) {
                $result = $response['result'];
                if ($result !== 'success') {
                    //
                    //    array (  "errorCode" => "405",  "status" => "maintenance",  "$result" => "error")
                    //
                    $code = $this->safe_string($response, 'errorCode');
                    $feedback = $this->id . ' ' . $this->json ($response);
                    $exceptions = $this->exceptions;
                    if (is_array ($exceptions) && array_key_exists ($code, $exceptions)) {
                        throw new $exceptions[$code] ($feedback);
                    } else {
                        throw new ExchangeError ($feedback);
                    }
                }
            } else {
                throw new ExchangeError ($this->id . ' ' . $body);
            }
        }
    }
}
