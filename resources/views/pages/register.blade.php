@extends('templates.app')

@section('body')
    <div class="padding-25"></div>

    <section class="section lb col-lg-offset-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="widget">
                        <div class="custom-module">
                            <h4 class="module-title"><i class="material-icons">lock</i> Create Account</h4>
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <form class="sidebar-login">
                                        <input name="username" v-model="user.username" type="text" class="form-control" placeholder="Username">
                                        <input name="email" v-model="user.email" type="email" class="form-control" placeholder="Email Address">
                                        <input name="password" type="text" class="form-control" placeholder="Password">
                                        <input name="password_confirmation" type="text" class="form-control" placeholder="Re-Password">
                                        <div class="checkbox">
                                            <label>
                                                <input name="newsletter" type="checkbox" checked> &nbsp;&nbsp;Subscribe email newsletter
                                            </label>
                                        </div>
                                        <button type="button" class="btn btn-raised btn-default gr">Create Account</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end custom-module -->
                    </div><!-- end widget -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
@stop

@section('javascript')
    <script>
        new Vue({
            el: '#wrapper',
            data: {
                user: {
                    username: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    newsletter: ''
                }
            },
            ready: function(){
                alert('ready');
            },
            methods: {
                postRegister: function(){
                    alert('Register');
                }
            }
        })
    </script>
@stop