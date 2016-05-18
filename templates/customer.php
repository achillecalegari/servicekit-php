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

    <!-- Service Request Modal -->
    <form id="submittanza" role="form" class="request-form">
                        <div class="form-group">
                            <label for="customer-name" class="control-label">Il tuo nome:</label>
                            <input type="text" class="form-control customer-name" name="customer_name" required="required" value="Cliente">
                        </div>
                        <div class="form-group">
                            <label for="problem-text" class="control-label">Tell us about your problem:</label>
                            <input type="text" class="form-control problem-text" name="problem_text" required="required" value="Problema">
                        </div>

                    </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                    <button type="button" class="btn btn-primary request-submit">Request a representative</button>
                </div>


    <!-- Service Panel -->
    <div id="service-panel" class="video-holder">
        <div class="subscriber"></div>
        <div class="publisher"></div>
        <div class="bottom-bar">
            <button type="button" class="btn btn-danger close-button">Cancel</button>
        </div>
        <div class="waiting">
            <iframe src="https://www.youtube.com/embed/bQtKOJP--uA?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
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
