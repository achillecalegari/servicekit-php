<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/representative.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Microsoft Expert Dashboard</a>
        </div>
      </div>
    </nav>

    <div class="container" id="service-provider">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <button type="button" class="btn btn-primary get-customer">Accetta nuovo cliente</button>
                        <button type="button" class="btn btn-danger end-call">Termina chiamata</button>
                        <button type="button" class="btn btn-danger block-call">Blocca chiamata</button>
                        <button type="button" class="btn btn-primary start-session">Avvia livechat</button>
                        <button type="button" class="btn btn-danger stop-session">Spegni livechat</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body video-holder">
                        <div class="subscriber" />
                        <div class="publisher" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <dl class="dl-horizontal customer-info">
                            <dt>Customer Name</dt>
                            <dd class="customer-name"></dd>
                            <dt>Problem Description</dt>
                            <dd class="problem-text"></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="textchat">
         <p id="history"></p>
         <form class="chat">
              <input type="text" placeholder="Input your text here" id="msgTxt"></input>
         </form>
    </div>

        <div class="thankyou section">
            <header>
                <img src="/css/logo.jpg"\>
                <h1 class="" id="">Fine chiamata</h1>
            </header>
            <div class="thankyoubody">
            <h2>Grazie!</h2>
            <p>Lorem ipsum dixit!</p>
            </div>
            <footer>
                    
            </footer>
        </div>

    </div>

    <!-- Service Request Modal -->
    <div class="modal fade" id="service-provider-login-modal" tabindex="-1" role="dialog" aria-labelledby="service-provider-login-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="service-provider-login-modal-label">Login</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="login-form">
                        <div class="form-group">
                            <label for="representative-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control representative-name" name="representative_name" required="required">
                        </div>
                    </form>
                    <div class="alert alert-warning access-info" role="alert">Please <strong>allow access to your camera and mic</strong> before logging in.</div>
                    <div class="alert alert-success access-success" role="alert">Your camera and mic are accessible.</div>
                    <div class="alert alert-danger access-error" role="alert">Your camera and mic were denied. Please revert the choice and retry.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary login-submit" disabled>Login</button>
                </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//static.opentok.com/webrtc/v2.2/js/opentok.min.js"></script>
    <script src="/js/vendor/setImmediate.js"></script>
    <script src="/js/utils.js"></script>
    <script src="/js/representative.js"></script>
</body>
</html>

