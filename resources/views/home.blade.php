@extends('layouts.app')
@section('title', 'Home')
@section('header')
    <div class="site-heading">
        <h1>IT FUTURE</h1>
        <hr class="small">
        <span class="subheading">Welcome to the future! Below, you will find a speculative timeline of future history.</span>
    </div>
@endsection


@section('content')
    
    <!--boxes -->
      <section id="content">
          <div class="big-cta">
            <div class="cta-text">
              <h2><span>Our Services for</span> Packages</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-3">
                  <div class="box">
                    <div class="box-gray aligncenter">
                      <h4>Webpage</h4>
                      <div class="icon">
                      <i class="fa fa-desktop fa-3x"></i>
                      </div>
                      <p>
                       Basic: Price(500,000) Kyats<br/>
                       Classic: Price(1,000,000) Kyats<br/>
                       Premium: Price(1,500,000) Kyats
                      </p>
                        
                    </div>
                    <div class="box-bottom">
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box">
                    <div class="box-gray aligncenter">
                      <h4>Web Development</h4>
                      <div class="icon">
                      <i class="fa fa-pagelines fa-3x"></i>
                      </div>
                       <p>
                       Basic: Price(240,000) Kyats<br/>
                       Classic: Price(280,000) Kyats<br/>
                       Premium: Price(300,000) Kyats
                      </p>
                        
                    </div>
                    <div class="box-bottom">
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box">
                    <div class="box-gray aligncenter">
                      <h4>Customizable</h4>
                      <div class="icon">
                      <i class="fa fa-edit fa-3x"></i>
                      </div>
                      <p>
                       Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                      </p>
                        
                    </div>
                    <div class="box-bottom">
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box">
                    <div class="box-gray aligncenter">
                      <h4>Valid HTML5</h4>
                      <div class="icon">
                      <i class="fa fa-code fa-3x"></i>
                      </div>
                      <p>
                       Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                      </p>
                        
                    </div>
                    <div class="box-bottom">
                      <a href="#">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- divider -->
          <div class="row">
            <div class="col-lg-12">
              <div class="solidline">
              </div>
            </div>
          </div>
          <!-- end divider -->
        </section>
    <!--/end boxes -->

<div class="col-lg-10 col-md-10 col-md-offset-1">
    @if(!Auth::user())
    <!-- create post modal -->
        <button type="button" data-toggle="modal" data-target="#myModal" disabled="true" class="post-btn"><i class="fa fa-pencil" aria-hidden="true"></i> Create a post by member</button>
    @else
     <button type="button" data-toggle="modal" data-target="#myModal" class="post-btn"><i class="fa fa-pencil" aria-hidden="true"></i> Create a post by member</button>
     @endif
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Create post</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  {!! Form::open(['route'=>'post.store', 'method'=>'POST', 'files' => true]) !!}
                    <input type="hidden" name="active" value="1">
                    @if(Auth::user())
                    <input type="hidden" name="author_id" value="{{ Auth::user()->id }}"> 
                    @endif
                   <span> {!! Form::label('title', 'Title') !!} </span>
                    {!! Form::text('title', null, array('class'=>'form-control')) !!}

                    <span>{!! Form::label('description', 'Description') !!}</span>
                    {!! Form::text('description', null, array('class'=>'form-control')) !!}

                    <span>{!! Form::label('body', 'Message') !!}</span>
                    {!! Form::textarea('body', null, array('class'=>'form-control')) !!}

                    <span>{!! Form::label('slug', 'Slug') !!}</span>
                    {!! Form::text('slug', null, array('class'=>'form-control')) !!}

                    <span>{!! Form::label('img', 'Upload Image') !!}</span>
                    {!! Form::file('img') !!}
                    <br/><br/>
                    <center><input type="submit" class="btn btn-primary" value="Post"></center> 
                    {!! Form::close() !!}
              </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
    <!--end create post modal -->

    @if(!$posts->count())
        There is no post till now. Login and write a new post now!!!

    @else
    @foreach($posts as $post)

    <div style="background: #fff; padding: 15px; margin-top:10px">
        <h2 class="post-title">
            <a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
        </h2>
        <p class="post-subtitle">
            {!! str_limit($post->body, $limit = 300, $end = '.......<a href='.url("/".$post->slug).'>Read More</a>') !!}
        </p>
        <p class="post-meta">
            {{ $post->created_at->format('M d, Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id) }}">{{ $post->author->name }}</a>
        </p>
        <p align="right">
        @if(Auth::user())
          @if(Auth::user()->id == $post->author_id)
          <button type="button" data-toggle="modal" data-target="#editpost-{{ $post['id'] }}"><span class="edit-post"><i class="fa fa-pencil" aria-hidden="true"></i> Edit post</span></button>
          @endif
        @endif
        </p>
         <!-- Edit Post Modal -->
        <div class="modal fade" id="editpost-{{ $post['id'] }}" tabindex="-1" role="dialog">
          <div class="modal-dialog">
          
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit post</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 col-md-12"> 
                {!! Form::model($post, ['method'=>'PATCH', 'route'=>['post.update', $post->id, 'id' => 'editpost'], 'files' => true]) !!}
                  <input type="hidden" id="active" name="active" value="1">
                  @if(Auth::user())
                    <input type="hidden" id="author_id" name="author_id" value="{{ Auth::user()->id }}"> 
                  @endif
                 <span> {!! Form::label('title', 'Title') !!} </span>
                  {!! Form::text('title', null, array('class'=>'form-control')) !!}

                  <span>{!! Form::label('description', 'Description') !!}</span>
                  {!! Form::text('description', null, array('class'=>'form-control')) !!}

                  <span>{!! Form::label('body', 'Message') !!}</span>
                  {!! Form::textarea('body', null, array('class'=>'form-control')) !!}

                  <span>{!! Form::label('slug', 'Slug') !!}</span>
                  {!! Form::text('slug', null, array('class'=>'form-control')) !!}

                  <span>{!! Form::label('img', 'Upload Image') !!}</span>
                  {!! Form::file('img') !!}
                  <br/><br/>
                  <center><input type="submit" class="btn btn-primary" value="Update post"></center> 
                  {!! Form::close() !!}
            </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
      <!--end edit post modal -->
    </div>
    @endforeach
    @endif
</div>
@endsection

@section('pagination')
    <div class="row">
        <hr>
        {!! $posts->links() !!}
    </div>
@endsection
