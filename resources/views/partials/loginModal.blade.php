<!-- Modal -->
<div id="LoginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Account</h4>
            </div>
            <div class="modal-body">
                <div class="widget clearfix">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <form class="sidebar-login">
                                <input type="text" class="form-control" placeholder="Username">
                                <input type="text" class="form-control" placeholder="Password">
                                <button type="button" class="btn btn-raised btn-default gr">Login</button>
                            </form>
                        </div>
                    </div>
                    <small>No account? <a href="{{ url('register') }}" style="color: #8d30ff;">Register</a></small>
                </div><!-- end widget -->
            </div>
        </div>
    </div>
</div>