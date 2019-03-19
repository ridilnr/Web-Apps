<div class="container-fluid mainContainerLogin1">
    <div class="mainContainerLogin11">
        <div class="text-center">
            <div>
                {{ flash.output() }}
            </div>
        </div>
        <div class="containerLogin row">
            <div class="col-5 column1">
                <div class="column11">
                    <div class="text-center">
                        <span>WELCOME</span><br>
                        <span>TO YOUR RESTAURANT PANEL</span>
                    </div>
                </div>
            </div>
            <div class="mt-4 ml-4 mr-4 separatorLoginPage column2">
                <div class="column22">
                    &nbsp;
                </div>
            </div>
            <form method="post" autocomplete="on" action="{{ url('') }}" class="col-6 column3">
                <div class="column33">
                    <div class="boxLoginPage">
                        <div class="mb-2 font-weight-bold font-italic">
                            <span>Enter your credentials to connect</span>
                        </div>
                        <div class="input-group input-group-lg mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                                   aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-key"></i>
                                </span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                                   aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="w-50 submitButtonLogin">
                            <button type="submit" class="btn btn-outline-danger btn-lg btn-block">Connect</button>
                        </div>
                        <div class="text-center">
                            <a href="#"><span>Forgot Password ?</span></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/custom/indexScript.js"></script>