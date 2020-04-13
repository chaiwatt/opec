var webSocket   = null;
var ws_protocol = null;
var ws_hostname = null;
var ws_port     = null;
var ws_endpoint = null;
window.total = 0;

function connectServer() {
    var ws_protocol = "ws" ;
    var ws_hostname = "localhost" ;
    var ws_port     = "8088" ;
    var ws_endpoint = ""; 
  openWSConnection(ws_protocol, ws_hostname, ws_port, ws_endpoint);
}

function disConnect() {
    webSocket.close();
}

function openWSConnection(protocol, hostname, port, endpoint) {
    var webSocketURL = null;
    webSocketURL = protocol + "://" + hostname + ":" + port + endpoint;
    console.log("openWSConnection::Connecting to: " + webSocketURL);
    
    try {
        webSocket = new WebSocket(webSocketURL);
        webSocket.onopen = function(openEvent) {
            console.log("WebSocket OPEN: " + JSON.stringify(openEvent, null, 4));
            $('#save').prop("disabled", false);
           // loadacceptor();
        };
        webSocket.onclose = function (closeEvent) {
            console.log("WebSocket CLOSE: " + JSON.stringify(closeEvent, null, 4));
        };
        webSocket.onerror = function (errorEvent) {
              console.log("WebSocket ERROR: " + JSON.stringify(errorEvent, null, 4));
        };
        webSocket.onmessage = function (messageEvent) {
            var wsMsg = JSON.parse(messageEvent.data);
            console.log(messageEvent.data);
            if(wsMsg.Type == "acceptor"){
                 console.log(window.acceptorlist);
                 if(wsMsg.Balance.length <= 8){
                    let obj = window.acceptorlist.find(o => o.code === wsMsg.Balance);
                    console.log(wsMsg.Balance);
                    window.total += parseInt(obj.value);
                    $('#transaction').val(window.total + " บาท");
                    $('#total').val(window.total);
                 }
            }
        };
    } catch (exception) {
        console.error(exception);
    }
}

// function loadacceptor(){
//     alert("ddd");
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         url:"{{ route('acceptorcalibration.list') }}",
//         method:"POST",
//         data:{},
//         success:function(response){
//             console.log(response);  
//             acceptorlist = response;          
//         }
//     });
// }

function sendMessage(data) {
    if (webSocket.readyState != WebSocket.OPEN) {
        console.error("webSocket is not open: " + webSocket.readyState);
        return;
    }
    webSocket.send(JSON.stringify(data));
}