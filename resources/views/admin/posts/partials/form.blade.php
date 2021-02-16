<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre del Post']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Nombre del Slug','readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control','placeholder'=>'Nombre del Categoría']) !!}
   
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    
    @foreach ($tags as $tag)
        
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>

    @endforeach
 
    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label for="">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label for="">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>             

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">

            @isset($post->image)
                <img id="picture" src="{{'http://blog.test:9090/storage/'.$post->Image->url}}">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2018/06/25/00/51/sunrise-3495775__340.jpg" alt="">
            @endisset
            
        </div>                   
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el Post') !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!} 

            @error('file')
                <small class="text-danger">{{$message}}</small>
            @enderror

        </div>               

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde dignissimos omnis voluptates illum. Quibusdam, vel excepturi quis numquam mollitia, sit deleniti animi labore ducimus incidunt natus necessitatibus rem dignissimos aperiam!</p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>