<div>
    <button type="button" wire:click='addTwoNumbers(32,55)' >Sum</button>
    <br>

    <textarea wire:keydown.enter='DisplayMessage($event.target.value)'></textarea>
    <br>

    <form wire:submit.prevent='getSum'>
        Enter Num1: <input type="text" name="num1" wire:model='num1'/>
        Enter Num2: <input type="text" name="num2" wire:model='num2'/>
        <button type="submit">Submit</button>
    </form>

    <hr>
    Total da soma: {{$sum}} <br>
    Message: {{$message}}
</div>
