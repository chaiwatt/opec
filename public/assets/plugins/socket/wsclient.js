var webSocket   = null;
var ws_protocol = null;
var ws_hostname = null;
var ws_port     = null;
var ws_endpoint = null;

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
            $('#serverconnected').val('connected'); 
            $('#btnsubmit').prop("disabled", false);

        };
        webSocket.onclose = function (closeEvent) {
            console.log("WebSocket CLOSE: " + JSON.stringify(closeEvent, null, 4));
            $('#serverconnected').val('');
            $('#txtstudentid').val('ERROR');
            $('#btnsubmit').prop("disabled", true);
        };
        webSocket.onerror = function (errorEvent) {
              console.log("WebSocket ERROR: " + JSON.stringify(errorEvent, null, 4));
              $('#serverconnected').val('');
              $('#txtstudentid').val('ERROR');
              $('#btnsubmit').prop( "disabled", true );
        };
        webSocket.onmessage = function (messageEvent) {
            var wsMsg = JSON.parse(messageEvent.data);
            if(wsMsg.Type == "deposit"){
                // $('#name').val(wsMsg.Name);
                // $('#lastname').val(wsMsg.Lastname);
                // $('#hid').val(wsMsg.Hid);
                // $('#dob').val(wsMsg.Dob);
                // $('#hidden_amphur').val(wsMsg.Amphur);
                // $('#hidden_tambol').val(wsMsg.Tambol);
                // $("#prefix option:contains("+wsMsg.Prefix+")").attr('selected', true).change();
                // $("#province option:contains("+wsMsg.Province+")").attr('selected', true).change();
                console.log (wsMsg.Studentid + " " + wsMsg.Uuid + " " + wsMsg.Balance)
            }
            if(wsMsg.Type == "printslip"){
                console.log("print slip");
            }

        };
    } catch (exception) {
        console.error(exception);
    }
}

function sendMessage(data) {
    if (webSocket.readyState != WebSocket.OPEN) {
        console.error("webSocket is not open: " + webSocket.readyState);
        return;
    }
    webSocket.send(JSON.stringify(data));
}