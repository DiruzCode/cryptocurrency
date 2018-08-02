@extends('admin.layout')

@section('content')
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">


    </div>
    <br />
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile  overflow_hidden">
                <div class="x_title">
                    <h2>Device Usage</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <table class="" style="width:100%">
                        <tr>
                            <th>
                                <p>Moneda comprada</p>
                            </th>
                            <th>
                                <p>Cantidad</p>
                            </th>
                            <th>
                                <p>Precio de compra</p>
                            </th>
                            <th>
                                <p>Exchange</p>
                            </th>
                            <th>
                                <p>Inversión total</p>
                            </th>
                            <th>
                                <p>Precio Actual</p>
                            </th>
                            <th>
                                <p>Dinero Actual</p>
                            </th>
                            <th>
                                <p>% perdida o ganancia</p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p>LiteCoin</p>
                            </td>
                            <td>
                                <p>740</p>
                            </td>
                            <td>
                                <p>$118.500</p>
                            </td>
                            <td>
                                <p>Coinbase</p>
                            </td>
                            <td>
                                <p>$87,690.000</p>
                            </td>
                            <td>
                                <p>$ <span id="current-price-LiteCoin-LTC"></span></p>
                            </td>
                            <td>
                                <p>$ <span id="LiteCoin-LTC-coinbase"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_litecoin"></i> <span id="litecoin-coinbase-porcentaje"></span>%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tron</p>
                            </td>
                            <td>
                                <p>751.000</p>
                            </td>
                            <td>
                                <p>$0.118</p>
                            </td>
                            <td>
                                <p>Binance</p>
                            </td>
                            <td>
                                <p>$88,618.000</p>
                            </td>
                            <td>
                                <p>$ <span id="current-price-trx-tron"></span></p>
                            </td>
                            <td>
                                <p>$ <span id="tron-trx-binance"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_tron"></i> <span id="tron-binance-porcentaje"></span>%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ethereum</p>
                            </td>
                            <td>
                                <p>8</p>
                            </td>
                            <td>
                                <p>$757.160</p>
                            </td>
                            <td>
                                <p>Bittrex</p>
                            </td>
                            <td>
                                <p>$6,057.280</p>
                            </td>
                            <td>
                                <p>$ <span id="current-price-eth-ethereum"></span></p>
                            </td>
                            <td>
                                <p>$ <span id="eth-ethereum-bittrex"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_ethereum"></i> <span id="ethereum-bittrex-porcentaje"></span>%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Data</p>
                            </td>
                            <td>
                                <p>1,009,000</p>
                            </td>
                            <td>
                                <p>$0.022</p>
                            </td>
                            <td>
                                <p>Huobi</p>
                            </td>
                            <td>
                                <p>$22,198.000</p>
                            </td>
                            <td>
                              <p>$ <span id="current-price-dta-data"></span></p>
                            </td>
                            <td>
                              <p>$ <span id="dta-data-huobi"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_data"></i> <span id="data-huobi-porcentaje"></span>%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Odyssey</p>
                            </td>
                            <td>
                                <p>522,000</p>
                            </td>
                            <td>
                                <p>$0.021</p>
                            </td>
                            <td>
                                <p>Huobi</p>
                            </td>
                            <td>
                                <p>$10,962.000</p>
                            </td>
                            <td>
                              <p>$ <span id="current-price-ocn-odyssey"></span></p>
                            </td>
                            <td>
                              <p>$ <span id="ocn-odyssey-huobi"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_ocn"></i> <span id="ocn-huobi-porcentaje"></span>%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>WePower</p>
                            </td>
                            <td>
                                <p>60,209</p>
                            </td>
                            <td>
                                <p>$0.092</p>
                            </td>
                            <td>
                                <p>Bitfinex</p>
                            </td>
                            <td>
                                <p>$5,539.228</p>
                            </td>
                            <td>
                              <p>$ <span id="current-price-wpr-wepower"></span></p>
                            </td>
                            <td>
                              <p>$ <span id="wpr-wepower-bitfinex"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_wpr"></i> <span id="wepower-bitfinex-porcentaje"></span>%</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Bitcoin</p>
                            </td>
                            <td>
                                <p>0.34</p>
                            </td>
                            <td>
                                <p>$6,413.000</p>
                            </td>
                            <td>
                                <p>Bitfinex</p>
                            </td>
                            <td>
                                <p>$2,180.420</p>
                            </td>
                            <td>
                              <p>$ <span id="current-price-btc-bitcoin"></span></p>
                            </td>
                            <td>
                              <p>$ <span id="btc-bitcoin-bitfinex"></span></p>
                            </td>
                            <td>
                                <p> <i class="fa fa-square" id="status_bitcoin"></i> <span id="bitcoin-bitfinex-porcentaje"></span>%</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('javascript')
    <script type="text/javascript" src="js/pako.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {



          const wssBinance = new WebSocket('wss://stream.binance.com:9443/ws/trxusdt@ticker');

          wssBinance.onmessage = (msg) => {
            let data = JSON.parse(msg.data);

            let total = 751000 * parseFloat(data['a']);

            $('#tron-trx-binance').text(total.toLocaleString('en-US', {maximumSignificantDigits : 4}));
            $('#current-price-trx-tron').text(parseFloat(data['a']).toLocaleString('en-US'));


            $('#status_tron').removeClass('green');
            $('#status_tron').removeClass('red');

            let current_per = ( total / 88618 * 100).toFixed(2);
            let total_perc = (current_per - 100).toFixed(2);

            if(total_perc < 0){
              $('#status_tron').addClass('red');
            }else{
              $('#status_tron').addClass('green');
            }
            $('#tron-binance-porcentaje').text( total_perc );

          };


          const wssBinanceWPR = new WebSocket('wss://api.bitfinex.com/ws/2');

          wssBinanceWPR.onmessage = (msg) => {
            let data = JSON.parse(msg.data);

            if (data.length > 1){

              console.log(data[1].length);
              console.log(data);

              if(data[1].length > 2){
                let total = 60209 * parseFloat(data[1][0][3]);


                $('#wpr-wepower-bitfinex').text(total.toLocaleString('en-US'));
                $('#current-price-wpr-wepower').text(parseFloat(data[1][0][3]).toLocaleString('en-US'));

                $('#status_wpr').removeClass('green');
                $('#status_wpr').removeClass('red');
                let current_per = ( total / 5539 * 100).toFixed(2);
                let total_perc = (current_per - 100).toFixed(2);

                if(total_perc < 0){
                  $('#status_wpr').addClass('red');
                }else{
                  $('#status_wpr').addClass('green');
                }
                $('#wepower-bitfinex-porcentaje').text( total_perc );
              }

            }

          };

          wssBinanceWPR.onopen = (msg) => {

            let subscribe = JSON.stringify({
              event: 'subscribe',
              channel: 'trades',
              symbol: 'tWPRUSD'
            })


            wssBinanceWPR.send(subscribe);
          };


          const wssCoinbase = new WebSocket('wss://ws-feed.gdax.com');

          wssCoinbase.onmessage = (msg) => {
            let data = JSON.parse(msg.data);

            let total = 740 * parseFloat(data.price);

            if ( data.type == 'ticker') {
              $('#LiteCoin-LTC-coinbase').text(total.toLocaleString('en-US'));
              $('#current-price-LiteCoin-LTC').text(parseFloat(data.price).toLocaleString('en-US', {maximumSignificantDigits : 4}));

              $('#status_litecoin').removeClass('green');
              $('#status_litecoin').removeClass('red');

              let current_per = ( total / 87690 * 100).toFixed(2);
              let total_perc = (current_per - 100).toFixed(2);

              if(total_perc < 0){
                $('#status_litecoin').addClass('red');
              }else{
                $('#status_litecoin').addClass('green');
              }
              $('#litecoin-coinbase-porcentaje').text( total_perc );


            }

          };


          wssCoinbase.onopen = (msg) => {

            let subscribe = '{"type": "subscribe", "channels": [{"name": "ticker", "product_ids": ["LTC-USD"]}]}';
            wssCoinbase.send(subscribe);

          }


          const wssBitfinex = new WebSocket('wss://api.bitfinex.com/ws/2');

          wssBitfinex.onmessage = (msg) => {

            let data = JSON.parse(msg.data);

            if (data.length > 2){

              let total = 0.34 * parseFloat(data[2][3]);

              $('#btc-bitcoin-bitfinex').text(total.toLocaleString('en-US'));
              $('#current-price-btc-bitcoin').text(parseFloat(data[2][3]).toLocaleString('en-US'));

              $('#status_bitcoin').removeClass('green');
              $('#status_bitcoin').removeClass('red');
              let current_per = ( total / 2180 * 100).toFixed(2);
              let total_perc = (current_per - 100).toFixed(2);

              if(total_perc < 0){
                $('#status_bitcoin').addClass('red');
              }else{
                $('#status_bitcoin').addClass('green');
              }
              $('#bitcoin-bitfinex-porcentaje').text( total_perc );
            }

          };

          wssBitfinex.onopen = (msg) => {

            let subscribe = JSON.stringify({
              event: 'subscribe',
              channel: 'trades',
              symbol: 'tBTCUSD'
            })


            wssBitfinex.send(subscribe);
          };


          setInterval(function(){


            var rawFile1 = new XMLHttpRequest();
            rawFile1.open("GET", '/node-ws/ws-eth-usd-bittrex/eth-usd.txt', false);
            rawFile1.onreadystatechange = function ()
            {
                if(rawFile1.readyState === 4)
                {
                    if(rawFile1.status === 200 || rawFile1.status == 0)
                    {

                        let total = 8 * parseFloat(rawFile1.responseText);

                        $('#eth-ethereum-bittrex').text(total.toLocaleString('en-US'));
                        $('#current-price-eth-ethereum').text(parseFloat(rawFile1.responseText).toLocaleString('en-US'));


                        $('#status_ethereum').removeClass('green');
                        $('#status_ethereum').removeClass('red');
                        let current_per = ( total / 6057 * 100).toFixed(2);
                        let total_perc = (current_per - 100).toFixed(2);

                        if(total_perc < 0){
                          $('#status_ethereum').addClass('red');
                        }else{
                          $('#status_ethereum').addClass('green');
                        }
                        $('#ethereum-bittrex-porcentaje').text( total_perc );

                    }
                }
            }
            rawFile1.send(null);


            var rawFile2 = new XMLHttpRequest();
            rawFile2.open("GET", '/node-ws/wst-huobi/dtausdt-usd.txt', false);
            rawFile2.onreadystatechange = function ()
            {
                if(rawFile2.readyState === 4)
                {
                    if(rawFile2.status === 200 || rawFile2.status == 0)
                    {
                      let total = 1009000 * parseFloat(rawFile2.responseText);

                      $('#dta-data-huobi').text(total.toLocaleString('en-US'));
                      $('#current-price-dta-data').text(parseFloat(rawFile2.responseText).toLocaleString('en-US'));

                      $('#status_data').removeClass('green');
                      $('#status_data').removeClass('red');
                      let current_per = ( total / 22198 * 100).toFixed(2);
                      let total_perc = (current_per - 100).toFixed(2);

                      if(total_perc < 0){
                        $('#status_data').addClass('red');
                      }else{
                        $('#status_data').addClass('green');
                      }
                      $('#data-huobi-porcentaje').text( total_perc );

                    }
                }
            }
            rawFile2.send(null);


            var rawFile3 = new XMLHttpRequest();
            rawFile3.open("GET", '/node-ws/wst-huobi/ocnusdt-usd.txt', false);
            rawFile3.onreadystatechange = function ()
            {
                if(rawFile3.readyState === 4)
                {
                    if(rawFile3.status === 200 || rawFile3.status == 0)
                    {

                      let total = 522000 * parseFloat(rawFile2.responseText);

                      $('#ocn-odyssey-huobi').text(total.toLocaleString('en-US'));
                      $('#current-price-ocn-odyssey').text(parseFloat(rawFile3.responseText).toLocaleString('en-US'));

                      $('#status_ocn').removeClass('green');
                      $('#status_ocn').removeClass('red');
                      let current_per = ( total / 10962 * 100).toFixed(2);
                      let total_perc = (current_per - 100).toFixed(2);

                      if(total_perc < 0){
                        $('#status_ocn').addClass('red');
                      }else{
                        $('#status_ocn').addClass('green');
                      }
                      $('#ocn-huobi-porcentaje').text( total_perc );
                    }
                }
            }
            rawFile3.send(null);


          }, 1000);




        });
    </script>
@stop
