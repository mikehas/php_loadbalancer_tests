php_loadbalancer_tests
======================


A php page for testing end-user experience when a server is removed from a load-balancer's loop.

The goal was to determine if removing a server from the loop would allow currently running page requests to complete.

This solution uses php to display the web server host that you have hit, then calls a long-running request (60 seconds) via ajax.

While the request is processing, remove the server from the loop and observe if the response is received.
