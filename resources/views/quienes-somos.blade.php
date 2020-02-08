@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/quienes-somos.css') }}">
<title>¿Quienes somos?</title>
@section('content')

<div class="flex-center">
    <h1>¿Quienes somos?</h1>
</div>

<div class="flex-center">
    <img class="img-us" id="png" src= "{{ asset('img/us/pango.jpg') }}"> 
    <img class="img-us" id="rich" src= "{{ asset('img/us/ricardo.jpg') }}">
    <img class="img-us" id="wend" src= "{{ asset('img/us/wendy.jpg') }}">
</div>
<div class="flex-center">
    <h3>Rafael Bolaños</h3>
    <h3>Ricardo González</h3> 
    <h3>Wendy González</h3> 
</div>

<div class="flex-center">
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin libero et sapien vestibulum, sit amet rhoncus lectus cursus. Pellentesque pharetra neque non diam euismod tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas quis porttitor erat. Duis condimentum varius feugiat. Phasellus ornare at mauris eu eleifend. Nunc quis pellentesque sapien. Nullam iaculis massa a neque mollis tincidunt.

Quisque id dignissim erat. Etiam eros lectus, finibus non arcu semper, pulvinar malesuada purus. Etiam at libero mattis, auctor nisl sed, tincidunt eros. Nullam tristique mi sit amet nunc eleifend tristique. Vivamus bibendum magna nec lorem bibendum, in dictum ex imperdiet. Sed commodo ligula eu mauris mollis fermentum. Pellentesque efficitur, erat id tincidunt maximus, massa tortor sollicitudin orci, quis fermentum libero ex id neque. Vivamus sodales ex et sapien pharetra, eget sagittis libero maximus. Cras nulla augue, fringilla scelerisque consequat quis, commodo eu orci. Quisque vitae sollicitudin lacus. Pellentesque neque metus, tempor eget quam ut, blandit rutrum augue. Morbi sit amet velit sodales, finibus dolor sed, faucibus velit. Ut placerat, ex maximus tristique ullamcorper, ligula ex sagittis purus, porta vehicula nunc nisl id neque.

Vivamus placerat porta feugiat. Suspendisse aliquam laoreet ullamcorper. Pellentesque commodo magna in nisl tincidunt egestas. Sed convallis vulputate tortor, non euismod quam dapibus sed. Cras nec dolor semper, bibendum ex eget, faucibus velit. Vivamus turpis urna, dignissim vitae ornare vel, lobortis eget nunc. Sed molestie massa purus, non dictum purus gravida eget. Aliquam vel interdum mauris, nec laoreet risus. Ut hendrerit dui ac eros hendrerit porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec sit amet tempor tellus, non facilisis tellus. Nullam eu tellus at arcu lobortis elementum.

Aenean eleifend mi non dapibus scelerisque. Aliquam consectetur leo in ligula interdum, vitae interdum massa commodo. Proin nec vestibulum dui. Pellentesque vel dui nec nibh tempor ornare non vitae turpis. Curabitur et posuere libero, in tristique nibh. Duis imperdiet pulvinar arcu vel tristique. Nam vitae cursus neque. Nullam sagittis orci nunc, sed lobortis justo pretium ut. Ut nec erat eu sem blandit placerat sed eget arcu. Nam convallis orci ac odio euismod suscipit.

Morbi nec velit ac velit aliquet viverra eget vitae risus. Nullam eu tincidunt neque. Aenean id felis eget erat hendrerit dignissim. Proin congue vel ex et euismod. Phasellus pellentesque pharetra quam. Etiam vitae nulla sed mauris lacinia vestibulum. Sed et finibus lacus. Etiam porta, purus eu commodo cursus, nunc diam malesuada nisi, ac mollis mi leo eget est. Vivamus eget sollicitudin eros, vitae placerat risus.</p>
</div>


@endsection