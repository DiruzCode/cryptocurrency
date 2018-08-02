const moment = require('moment');
const WebSocket = require('ws');
const pako = require('pako');
const fs = require('fs')

const WS_URL = 'wss://api.huobi.pro/ws';


var orderbook = {};

exports.OrderBook = orderbook;

function handle(data) {
    let symbol = data.ch.split('.')[1];
    let channel = data.ch.split('.')[2];
    fs.writeFile('./'+symbol+'-usd.txt', data.tick.data[0].price, { flag: 'w' }, function(err) {
        if (err){
            return console.error(err);
        }
    })
}

function subscribe(ws) {

    var symbols = ['ocnusdt', 'dtausdt'];
    for (let symbol of symbols) {
        ws.send(JSON.stringify({
            "sub": `market.${symbol}.trade.detail`,
            "id": `${symbol}`
        }));
    }

}

function init() {
    var ws = new WebSocket(WS_URL);
    ws.on('open', () => {
        console.log('open');
        subscribe(ws);
    });
    ws.on('message', (data) => {
        let text = pako.inflate(data, {
            to: 'string'
        });
        let msg = JSON.parse(text);
        if (msg.ping) {
            ws.send(JSON.stringify({
                pong: msg.ping
            }));
        } else if (msg.tick) {
            // console.log(msg);
            handle(msg);
        } else {
            console.log(text);
        }
    });
    ws.on('close', () => {
        console.log('close');
        init();
    });
    ws.on('error', err => {
        console.log('error', err);
        init();
    });
}

init();
