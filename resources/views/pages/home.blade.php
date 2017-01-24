@extends('templates.app')

@section('welcomeSection')
    @include('partials.welcomeSection')
@stop

@section('body')

    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="topic_top row clearfix">
                        <div class="col-md-9 hidden-xs">
                            <p>Showing x of y Topics</p>
                        </div>

                        <div class="col-md-3 text-right">
                            <select class="form-control">
                                <option>Toxick topics</option>
                                <option>Newest topics</option>
                                <option>Older topics</option>
                            </select>
                        </div>
                    </div><!-- end shop-top -->

                    <aside class="topic-page topic-list blog-list forum-list single-forum">
                        <article class="well btn-group-sm clearfix">
                            <div class="topic-desc row-fluid clearfix">
                                <div class="col-sm-2 text-center publisher-wrap">
                                    <img src="{{ url('assets/images/uploads/team_05.jpg') }}" alt="" class="avatar img-circle img-responsive">
                                    <h5>Bisexual Lesbian</h5>
                                    <small><img src="{{ url('assets/images/splat-icon.png') }}" width="25px" alt=""> 999,999</small>
                                </div>
                                <div class="col-sm-10">

                                    <footer class="topic-footer clearfix">
                                        <div class="pull-left">
                                            <ul class="list-inline tags">
                                                <li><a href="#">jQuery</a></li>
                                                <li><a href="#">JavaScript</a></li>
                                            </ul>
                                            <!-- end tags -->
                                        </div>
                                    </footer>

                                    <h4> <a href="single-question.html">Revolution Slider settings: How to remove arrows?</a></h4>
                                    <div class="blog-meta clearfix">
                                        <small><a href="#">1132 Views</a></small>
                                        <small><a href="#">11 Replies</a></small>
                                        <small>September 18, 2016</small>
                                    </div>

                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam..</p>

                                    <a href="#" class="readmore" title="">View full question</a>
                                </div>
                            </div><!-- end tpic-desc -->

                            <div class="topic-meta clearfix">
                                <div class="pull-left">
                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="Toxick">
                                        <img src="{{ url('assets/images/splat-icon.png') }}" width="20px" alt="" style="margin-top:5px;">
                                    </a>
                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="Bookmark">
                                        <i class="material-icons">bookmark_border</i>
                                    </a>
                                </div>
                                <!-- end left -->
                            </div>
                            <!-- end topic-meta -->
                        </article>

                    </aside>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
@stop
