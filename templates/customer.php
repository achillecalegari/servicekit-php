<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/customer.css">
</head>
<body>

    <button class="btn btn-primary btn-lg service-request-btn" data-toggle="modal" data-target="#service-request-modal">Start</button>

    <!-- Service Request Modal -->
    <div class="modal fade" id="service-request-modal" tabindex="-1" role="dialog" aria-labelledby="service-request-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="service-request-modal-label">Parla con l'esperto</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="request-form">
                        <div class="form-group">
                            <label for="customer-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control customer-name" name="customer_name" required="required" value="Pippo">
                        </div>
                        <div class="form-group">
                            <label for="problem-text" class="control-label">Email:</label>
                            <input type="text" class="form-control problem-text" name="problem_text" required="required" value="pippo@pippo.it"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                    <button type="button" class="btn btn-primary request-submit">Avvia la videochiamata</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Panel -->
    <div id="service-panel" class="video-holder section">
        <header>
            <img src="/css/logo.jpg"\>
            <h1 class="onhold" id="status">Videochiamata in corso</h1>
        </header>
        <div class="subscriber"></div>
        <div class="publisher"></div>
        <div class="bottom-bar">
            <button type="button" class="btn btn-danger close-button">Cancel</button>
        </div>
        <div class="waiting">
            <p class="hardware-access">Please allow access to your camera and mic.</p>
            <div class="representative"><iframe src="https://www.youtube.com/embed/bQtKOJP--uA?autoplay=1" frameborder="0" allowfullscreen></iframe></div>
        </div>
        <footer>
                <a id="microfono"><img src="/css/microfono.png"></a>
                <a id="chat"><img src="/css/chat.png"></a>
                <a id="interrompi"><img src="/css/interrompi.png"></a>
        </footer>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//static.opentok.com/webrtc/v2.2/js/opentok.min.js"></script>
    <script src="/js/vendor/setImmediate.js"></script>
    <script src="/js/vendor/eventemitter2.js"></script>
    <script src="/js/utils.js"></script>
    <script src="/js/customer.js"></script>
</body>
</html>
