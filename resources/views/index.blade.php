@section('title', 'Flow')
@include('layouts.header')
<div class="container-fluid">
@foreach($index as $f)
        <article style="border:1px solid #ccc; margin: 40px 0; padding: 10px;">
        <sidebar><span style="background: #ddd">{{$f->id}} </span>{{$f->date}} </sidebar>
        <h4><a target="_blank" href="http://the-flow.ru{{$f->url}}">{{$f->title}}</a></h4>
    <p>{{$f->text}}</p>
    </article>
@endforeach
    <?php echo $index->render() ?>
</div>
@include('layouts.footer')

