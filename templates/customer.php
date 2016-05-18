<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/customer.css">
</head>
<body style=" margin: 0; padding: 0">
<button class="service-request-btn" data-toggle="modal" data-target="#service-request-modal" style="margin: 0;">Start</button>

    

    <!-- Service Request Modal -->
    <div class="modal fade" id="service-request-modal" tabindex="-1" role="dialog" aria-labelledby="service-request-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form role="form" class="request-form">
                        <div class="form-group">
                            <label for="customer-name" class="control-label">Il tuo nome:</label>
                            <input type="text" class="form-control customer-name" name="customer_name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="problem-text" class="control-label">La tua email:</label>
                            <textarea class="form-control problem-text" name="problem_text" required="required"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                    <button type="button" class="btn btn-primary request-submit">Parla con un nostro consulente</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container waiting">
            <header>
                <img src="/css/logo.jpg"\>
                <h1 class="onhold" id="status">Videochiamata in corso</h1>
            </header>
            <section id="service-panel" class="video-holder">
                <iframe class="waiting" width="100%" height="500" src="https://www.youtube.com/embed/bbfdX6SQYn4?autoplay=1" frameborder="0" allowfullscreen></iframe>
                 <div class="subscriber"></div>
                <div class="publisher"></div>
            </section>
            <footer>
                <a id="microfono"><img src="/css/microfono.png"></a>
                <a id="chat"><img src="/css/chat.png"></a>
                <a id="interrompi close-button"><img src="/css/interrompi.png"></a>
            </footer>
    </div>


    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//static.opentok.com/webrtc/v2.8/js/opentok.min.js"></script>
    <script src="/js/vendor/setImmediate.js"></script>
    <script src="/js/vendor/eventemitter2.js"></script>
    <script src="/js/utils.js"></script>
    <script src="/js/customer.js"></script>
</body>
</html>
