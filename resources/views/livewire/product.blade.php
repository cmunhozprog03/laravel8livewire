<div>
    Title : <input type="text" wire:model='title' /> <br>

    Name : <input type="text" wire:model='name' /> <br>

    <hr>

    <h3>Title: {{$title}}</h3>
    <h3>Name: {{$name}}</h3>

    <h3>Lifecicle Hooks Method</h3>
    @foreach ($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach

</div>
