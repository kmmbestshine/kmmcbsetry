var gps = require("gps-tracking");

var options = {
    'debug'                 : true,
    'port'                  : 8090,
    'device_adapter'        : "TK103"
}

var server = gps.server(options,function(device,connection){
    console.log(device);
    
    device.on("login_request",function(device_id,msg_parts){
        console.log(device_id);
        // Some devices sends a login request before transmitting their position
        // Do some stuff before authenticate the device... 

        // Accept the login request. You can set false to reject the device.
        this.login_authorized(true); 


    });

    device.on("login",function(){
        //this = device
        console.log("Hi! i'm "+this.uid);
    });

    //PING -> When the gps sends their position  
    device.on("ping",function(data){

        //After the ping is received, but before the data is saved
        //console.log(data);
        return data;

    });

});