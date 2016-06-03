@section('title', 'WeProject')
@include('layouts.header')
<div class="container-fluid">
    @foreach($wp as $f)
        <article style="border:1px solid #ccc; margin: 40px 0; padding: 10px;">
            <sidebar><span style="background: #ddd">{{$f->ID}} </span>{{$f->DATE}} </sidebar>
            <img src="http://weproject.kz{{$f->URL}}" alt="" width="300" height="300" style="box-shadow: 0 2px 2px 2px #ccc">
            <h4><a target="_blank" href="{{$f->SRC}}">{{$f->TITLE}}</a></h4>
            <p>{{$f->TEXT}}</p>
        </article>
    @endforeach
    <?php echo $wp->render() ?>
</div>
@include('layouts.footer')

